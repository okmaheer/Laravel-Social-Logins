<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function view(User $user): bool
    {
        return $user->ability('view_user');
    }

    public function create(User $user): bool
    {
        return $user->ability('create_user');
    }

    public function edit(User $user): bool
    {
        return $user->ability('edit_user');
    }

    public function delete(User $user): bool
    {
        return $user->ability('delete_user');
    }

    public function show(User $user): bool
    {
        return $user->ability('show_user');
    }
}
