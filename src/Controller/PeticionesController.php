<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Peticiones Controller
 *
 * @property \App\Model\Table\PeticionesTable $Peticiones
 * @method \App\Model\Entity\Peticione[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PeticionesController extends AppController
{
    /**
     * Initialization before method.
     **/
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        $this->Authorization->skipAuthorization();
        parent::beforeFilter($event);
        // for all controllers in our application, make index and view
        // actions public, skipping the authentication check
        $this->Authentication->addUnauthenticatedActions(['index', 'view']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();

        $id = $this->Authentication->getResult()->getData()->id;
        $rol = $this->Authentication->getResult()->getData()->rol;
        $this->paginate = [
            'contain' => ['Categorias'],
        ];
        if ($rol == 'admin') {
            return $this->redirect(['action' => 'indexAdmin']);
        }
        $peticiones = $this->paginate($this->Peticiones->find()->where(['user_id' => $id]));

        $this->set(compact('peticiones'));
    }

    /**
     * Index admin method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function indexAdmin()
    {
        $this->Authorization->skipAuthorization();

        $this->paginate = [
            'contain' => ['Categorias'],
        ];

        $peticiones = $this->paginate($this->Peticiones->find('all'));

        $this->set(compact('peticiones'));
    }

    /**
     * View method
     *
     * @param string|null $id Peticione id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $peticione = $this->Peticiones->get($id, [
            'contain' => ['Categorias', 'Users'],
        ]);

        $this->set(compact('peticione'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $peticione = $this->Peticiones->newEmptyEntity();
        $id = $this->Authentication->getResult()->getData()->id;
        if ($this->request->is('post')) {
            $peticione = $this->Peticiones->patchEntity($peticione, $this->request->getData());
            $peticione->estado = 'pendiente';
            $peticione->user_id = $id;
            $peticione->firmantes = 0;
            if ($this->Peticiones->save($peticione)) {
                $this->Flash->success(__('The peticione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The peticione could not be saved. Please, try again.'));
        }
        $categorias = $this->Peticiones->Categorias->find('list', ['limit' => 200])->all();
        $users = $this->Peticiones->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('peticione', 'categorias', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Peticione id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $peticione = $this->Peticiones->get($id, [
            'contain' => ['Users'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $peticione = $this->Peticiones->patchEntity($peticione, $this->request->getData());
            if ($this->Peticiones->save($peticione)) {
                $this->Flash->success(__('The peticione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The peticione could not be saved. Please, try again.'));
        }
        $categorias = $this->Peticiones->Categorias->find('list', ['limit' => 200])->all();
        $users = $this->Peticiones->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('peticione', 'categorias', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Peticione id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $peticione = $this->Peticiones->get($id);
        if ($this->Peticiones->delete($peticione)) {
            $this->Flash->success(__('The peticione has been deleted.'));
        } else {
            $this->Flash->error(__('The peticione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Change status method
     *
     * @param string|null $id Peticione id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function status($id = null)
    {
        $peticione = $this->Peticiones->get($id);
        if ($peticione->estado === 'aceptada') {
            $peticione->estado = 'pendiente';
        } else {
            $peticione->estado = 'aceptada';
        }
        if ($this->Peticiones->save($peticione)) {
            $this->Flash->success(__('The peticione has been saved.'));
            return $this->redirect(['action' => 'index-admin']);
        }
        $this->Flash->error(__('The peticione could not be saved. Please, try again.'));
    }
}
