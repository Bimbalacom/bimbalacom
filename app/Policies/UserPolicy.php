<?php
declare(strict_types=1);

namespace App\Policies;

use App\User;

class UserPolicy
{
    public function viewHorizon(User $user): bool
    {
        return $user->hasPermission('browse_admin');
    }
}
