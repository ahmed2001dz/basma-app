<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Leson;
use Illuminate\Auth\Access\HandlesAuthorization;

class LesonPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Leson');
    }

    public function view(AuthUser $authUser, Leson $leson): bool
    {
        return $authUser->can('View:Leson');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Leson');
    }

    public function update(AuthUser $authUser, Leson $leson): bool
    {
        return $authUser->can('Update:Leson');
    }

    public function delete(AuthUser $authUser, Leson $leson): bool
    {
        return $authUser->can('Delete:Leson');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Leson');
    }

    public function restore(AuthUser $authUser, Leson $leson): bool
    {
        return $authUser->can('Restore:Leson');
    }

    public function forceDelete(AuthUser $authUser, Leson $leson): bool
    {
        return $authUser->can('ForceDelete:Leson');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Leson');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Leson');
    }

    public function replicate(AuthUser $authUser, Leson $leson): bool
    {
        return $authUser->can('Replicate:Leson');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Leson');
    }

}