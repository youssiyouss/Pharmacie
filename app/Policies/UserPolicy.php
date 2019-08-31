<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;
    public function before($user, $ability) {
      if($user->isadmin == 1)
        return true;
    }


    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $pharmacien
     * @return mixed
     */
    public function view(User $user, User $pharmacien)
    {
        //
    }

  /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return  false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $pharmacien
     * @return mixed
     */
    public function update(User $user, User $pharmacien)
    {
        return $user->id === $pharmacien->id;
    }

      /**
       * Determine whether the user can update the model.
       *
       * @param  \App\User  $pharmacien
       * @return mixed
      */
     public function isAdmin(User $user)
     {
         return $user->isadmin;
     }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $pharmacien
     * @return mixed
     */
    public function delete(User $user, User $pharmacien)
    {
       return  false;
    }




}
