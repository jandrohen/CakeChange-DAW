<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PeticionesUsersFixture
 */
class PeticionesUsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'peticiones_id' => 1,
                'users_id' => 1,
                'created' => '2021-11-30 11:56:50',
                'updated' => '2021-11-30 11:56:50',
            ],
        ];
        parent::init();
    }
}
