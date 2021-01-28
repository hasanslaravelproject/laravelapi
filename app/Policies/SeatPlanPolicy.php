<?php

namespace App\Policies;

use App\Models\User;
use App\Models\SeatPlan;
use Illuminate\Auth\Access\HandlesAuthorization;

class SeatPlanPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the seatPlan can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list seatplans');
    }

    /**
     * Determine whether the seatPlan can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\SeatPlan  $model
     * @return mixed
     */
    public function view(User $user, SeatPlan $model)
    {
        return $user->hasPermissionTo('view seatplans');
    }

    /**
     * Determine whether the seatPlan can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create seatplans');
    }

    /**
     * Determine whether the seatPlan can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\SeatPlan  $model
     * @return mixed
     */
    public function update(User $user, SeatPlan $model)
    {
        return $user->hasPermissionTo('update seatplans');
    }

    /**
     * Determine whether the seatPlan can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\SeatPlan  $model
     * @return mixed
     */
    public function delete(User $user, SeatPlan $model)
    {
        return $user->hasPermissionTo('delete seatplans');
    }

    /**
     * Determine whether the seatPlan can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\SeatPlan  $model
     * @return mixed
     */
    public function restore(User $user, SeatPlan $model)
    {
        return false;
    }

    /**
     * Determine whether the seatPlan can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\SeatPlan  $model
     * @return mixed
     */
    public function forceDelete(User $user, SeatPlan $model)
    {
        return false;
    }
}
