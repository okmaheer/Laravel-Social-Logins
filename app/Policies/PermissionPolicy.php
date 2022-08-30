<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermissionPolicy
{
    use HandlesAuthorization;

    public function view(User $user):bool
    {
        return $user->ability('view_permission');
    }

    public function create(User $user):bool
    {
        return $user->ability('create_permission');
    }

    public function edit(User $user):bool
    {
        return $user->ability('edit_permission');
    }

    public function delete(User $user):bool
    {
        return $user->ability('delete_permission');
    }

    public function show(User $user):bool
    {
        return $user->ability('show_permission');
    }

    public function sync(User $user):bool
    {
        return $user->ability('sync_permission');
    }
}
