<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Mahasiswa;
use App\Models\User;

class MahasiswaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Mahasiswa');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Mahasiswa $mahasiswa): bool
    {
        return $user->checkPermissionTo('view Mahasiswa');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Mahasiswa');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Mahasiswa $mahasiswa): bool
    {
        return $user->checkPermissionTo('update Mahasiswa');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Mahasiswa $mahasiswa): bool
    {
        return $user->checkPermissionTo('delete Mahasiswa');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Mahasiswa');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Mahasiswa $mahasiswa): bool
    {
        return $user->checkPermissionTo('restore Mahasiswa');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Mahasiswa');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Mahasiswa $mahasiswa): bool
    {
        return $user->checkPermissionTo('replicate Mahasiswa');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Mahasiswa');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Mahasiswa $mahasiswa): bool
    {
        return $user->checkPermissionTo('force-delete Mahasiswa');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Mahasiswa');
    }
}
