<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Table\UsersTable;
use Authorization\IdentityInterface;

/**
 * Users policy
 */
class UsersTablePolicy
{
     /**
     * Check if $user can view User
     */
    public function canView(IdentityInterface $user, User $resource)
    {
        if($user['role'] == 'admin')return true;
        return false;
    }
}
