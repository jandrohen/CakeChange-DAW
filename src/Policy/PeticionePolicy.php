<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Peticione;
use Authorization\IdentityInterface;

/**
 * Peticione policy
 */
class PeticionePolicy
{
    /**
     * Check if $user can add Peticione
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Peticione $peticione
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Peticione $peticione)
    {
        if($user['role'] == 'admin')return true;
        return false;
    }

    /**
     * Check if $user can edit Peticione
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Peticione $peticione
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Peticione $peticione)
    {
        if($user['role'] == 'admin')return true;
        return false;
    }

    /**
     * Check if $user can delete Peticione
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Peticione $peticione
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Peticione $peticione)
    {
        if($user['role'] == 'admin')return true;
        return false;
    }

    /**
     * Check if $user can view Peticione
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Peticione $peticione
     * @return bool
     */
    public function canView(IdentityInterface $user, Peticione $peticione)
    {
    }
}
