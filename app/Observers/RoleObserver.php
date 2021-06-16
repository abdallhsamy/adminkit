<?php

namespace App\Observers;


use Spatie\Permission\Models\Role;

class RoleObserver
{
    /**
     * Handle the Role "created" event.
     *
     * @param Role $role
     * @return void
     */
    public function created(Role $role)
    {
        //
    }

    /**
     * Handle the Role "updated" event.
     *
     * @param  Role  $role
     * @return void
     */
    public function updated(Role $role)
    {
//        if (request()->has('permissions') && is_array(request()->get('permissions') && count(request()->get('permissions')) > 0)) {
//            $role->permissions()->sync(request()->get('permissions'));
//        }
    }

    /**
     * Handle the Role "deleted" event.
     *
     * @param  Role  $role
     * @return void
     */
    public function deleted(Role $role)
    {
        //
    }

    /**
     * Handle the Role "restored" event.
     *
     * @param  Role  $role
     * @return void
     */
    public function restored(Role $role)
    {
        //
    }

    /**
     * Handle the Role "force deleted" event.
     *
     * @param  Role  $role
     * @return void
     */
    public function forceDeleted(Role $role)
    {
        //
    }
}
