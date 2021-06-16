<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Repositories\RoleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends AppBaseController
{
    /** @var  RoleRepository */
    private $roleRepository;

    public function __construct(RoleRepository $roleRepo)
    {
        $this->roleRepository = $roleRepo;
    }

    /**
     * Display a listing of the Role.
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
//        $roles = $this->roleRepository->paginate(10);
        $roles = Role::withCount('permissions')->paginate(10);

        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new Role.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $checked = [];

        $permissions = Permission::get()->groupBy('group');

        return view('roles.create', compact('checked', 'permissions'));
    }

    /**
     * Store a newly created Role in storage.
     *
     * @param CreateRoleRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateRoleRequest $request)
    {
        $input = $request->all();

        $role = $this->roleRepository->create($input);

        $this->sync($role);

        Flash::success(__('messages.saved', ['model' => __('models/roles.singular')]));

        return redirect(route('roles.index'));
    }

    /**
     * Display the specified Role.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $role = $this->roleRepository->find($id);

        if (empty($role)) {
            Flash::error(__('messages.not_found', ['model' => __('models/roles.singular')]));

            return redirect(route('roles.index'));
        }

        $permissions = $role->permissions->groupBy('group');

        return view('roles.show', compact('role', 'permissions'));
    }

    /**
     * Show the form for editing the specified Role.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $role = $this->roleRepository->find($id);

        if (empty($role)) {
            Flash::error(__('messages.not_found', ['model' => __('models/roles.singular')]));

            return redirect(route('roles.index'));
        }

        $checked = $role->permissions->pluck('id')->toArray();

        $permissions = Permission::get()->groupBy('group');

        return view('roles.edit', compact('role', 'permissions', 'checked'));
    }

    /**
     * Update the specified Role in storage.
     *
     * @param int $id
     * @param UpdateRoleRequest $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function update($id, UpdateRoleRequest $request)
    {
        $role = $this->roleRepository->find($id);

        if (empty($role)) {
            Flash::error(__('messages.not_found', ['model' => __('models/roles.singular')]));

            return redirect(route('roles.index'));
        }

        $role = $this->roleRepository->update($request->all(), $id);

        $this->sync($role);

        Flash::success(__('messages.updated', ['model' => __('models/roles.singular')]));

        return redirect(route('roles.index'));
    }

    /**
     * Remove the specified Role from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function destroy($id)
    {
        $role = $this->roleRepository->find($id);

        if (empty($role)) {
            Flash::error(__('messages.not_found', ['model' => __('models/roles.singular')]));

            return redirect(route('roles.index'));
        }

        $this->roleRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/roles.singular')]));

        return redirect(route('roles.index'));
    }

    private function sync($role)
    {
        if (request()->has('permissions') && is_array(request()->get('permissions'))) {
            $role->permissions()->sync(request()->get('permissions'));
        }
    }
}
