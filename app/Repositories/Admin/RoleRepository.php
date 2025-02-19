<?php

namespace App\Repositories\Admin;

use Exception;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Prettus\Repository\Eloquent\BaseRepository;

class RoleRepository extends BaseRepository
{
    function model()
    {
        return Role::class;
    }

    public function index($roleTable)
    {
        if (request()->action) {
            return redirect()->back();
        }

        return view('admin.role.index', ['tableConfig' => $roleTable]);
    }

    public function store($request)
    {
        DB::beginTransaction();

        try {

            $role = $this->model->create(['guard_name' => 'web', 'name'=> $request->name]);
            $role->givePermissionTo($request->permissions);

            DB::commit();

            return redirect()->route('admin.role.index')->with('success', 'Role Created Successfully');

        } catch (Exception $e){

            DB::rollback();

            throw $e;
        }
    }

    public function update($request, $id)
    {
        DB::beginTransaction();

        try {

            $role = $this->model->findOrFail($id);
            if ($role->system_reserve) {
                return redirect()->route('admin.role.index')->with('error', 'This role cannot be update, It is system reserved.');
            }

            $role->syncPermissions($request['permissions']);
            $role->update($request);

            DB::commit();
            return redirect()->route('admin.role.index')->with('success', 'Role Updated Successfully');

        } catch (Exception $e){

            DB::rollback();

            throw $e;
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();

        try {

            $role = $this->model->findOrFail($id);
            if ($role->system_reserve) {
                return redirect()->route('admin.role.index')->with('error', 'This role cannot be deleted, It is system reserved.');
            }

            $role->destroy($id);
            DB::commit();
            return redirect()->route('admin.role.index')->with('success', 'Role Deleted Successfully');

        } catch (Exception $e){

            DB::rollback();

            throw $e;
        }
    }
}