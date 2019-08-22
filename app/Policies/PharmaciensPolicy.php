<?php

namespace App\Policies;

use App\User;
use App\Pharmacien;
use Illuminate\Auth\Access\HandlesAuthorization;

class PharmaciensPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any pharmaciens.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the pharmacien.
     *
     * @param  \App\User  $user
     * @param  \App\Pharmacien  $pharmacien
     * @return mixed
     */
    public function view(User $user, Pharmacien $pharmacien)
    {
        return true;
    }

    /**
     * Determine whether the user can create pharmaciens.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->id->isadmin === 1;
    }

    /**
     * Determine whether the user can update the pharmacien.
     *
     * @param  \App\User  $user
     * @param  \App\Pharmacien  $pharmacien
     * @return mixed
     */
    public function update(User $user, Pharmacien $pharmacien)
    {
        return ($user->email ===  $pharmacien->email);
    }

    /**
     * Determine whether the user can delete the pharmacien.
     *
     * @param  \App\User  $user
     * @param  \App\Pharmacien  $pharmacien
     * @return mixed
     */
    public function delete(User $user, Pharmacien $pharmacien)
    {
        return $user->id->isadmin === 1;
    }

    /**
     * Determine whether the user can restore the pharmacien.
     *
     * @param  \App\User  $user
     * @param  \App\Pharmacien  $pharmacien
     * @return mixed
     */
    public function restore(User $user, Pharmacien $pharmacien)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the pharmacien.
     *
     * @param  \App\User  $user
     * @param  \App\Pharmacien  $pharmacien
     * @return mixed
     */
    public function forceDelete(User $user, Pharmacien $pharmacien)
    {
        //
    }
}
