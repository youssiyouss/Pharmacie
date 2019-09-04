<?php

namespace App\Policies;

use App\User;
use App\Achat;
use Illuminate\Auth\Access\HandlesAuthorization;

class AchatPolicy
{
    use HandlesAuthorization;
    public function before($user, $ability) {
      if($user->isadmin == 1)
        return true;
    }
    /**
     * Determine whether the user can view any achats.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the achat.
     *
     * @param  \App\User  $user
     * @param  \App\Achat  $achat
     * @return mixed
     */
    public function view(User $user, Achat $achat)
    {
        //
    }

    /**
     * Determine whether the user can create achats.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the achat.
     *
     * @param  \App\User  $user
     * @param  \App\Achat  $achat
     * @return mixed
     */
    public function update(User $user, Achat $achat)
    {
        return $user->isadmin;
    }

    /**
     * Determine whether the user can delete the achat.
     *
     * @param  \App\User  $user
     * @param  \App\Achat  $achat
     * @return mixed
     */
    public function delete(User $user, Achat $achat)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the achat.
     *
     * @param  \App\User  $user
     * @param  \App\Achat  $achat
     * @return mixed
     */
    public function restore(User $user, Achat $achat)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the achat.
     *
     * @param  \App\User  $user
     * @param  \App\Achat  $achat
     * @return mixed
     */
    public function forceDelete(User $user, Achat $achat)
    {
        //
    }
}
