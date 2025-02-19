<?php

namespace App\Http\Controllers\Admin;

use App\Models\Module;
use Illuminate\Http\Request;
use App\DataTables\RoleDataTable;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Repositories\Admin\RoleRepository;
use App\Http\Requests\Admin\CreateRoleRequest;
use App\Http\Requests\Admin\UpdateRoleRequest;

class RoleController extends Controller
{
    public $repository;

    public function __construct(RoleRepository $repository)
    {
        $this->authorizeResource(Role::class, 'role', ['expect' => ['index']]);
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(RoleDataTable $dataTable)
    {
        return $dataTable->render('admin.role.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin.role.create', ['modules' => $this->getModules()]);
    }

    public function getModules()
    {
        return Module::get();
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreateRoleRequest $request)
    {
        return $this->repository->store($request);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Role $role)
    {
        return view('admin.role.edit', ['role' => $role, 'modules' => $this->getModules()]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        return $this->repository->update($request->all(), isset($role->id) ? $role->id : $request->id);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Request $request, Role $role)
    {
        return $this->repository->destroy(isset($role->id) ? $role->id : $request->id);
    }
}
