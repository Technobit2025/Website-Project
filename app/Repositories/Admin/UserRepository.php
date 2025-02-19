<?php

namespace App\Repositories\Admin;

use Exception;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Prettus\Repository\Eloquent\BaseRepository;


class UserRepository extends BaseRepository
{
    protected $role;

    function model()
    {
        $this->role = new Role();
        return User::class;
    }

    public function index($userTable)
    {
        if (request()['action']) {
            return redirect()->back();
        }

        return view('admin.user.index', ['tableConfig' => $userTable]);
    }

    public function store($request)
    {
        DB::beginTransaction();

        try {
            $user = $this->model->create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'country_code' => $request->country_code,
                'phone' => (string) $request->phone,
                'status' => $request->status,
                'dob' => $request->dob,
                'gender' => $request->gender,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'postal_code' => $request->postal_code,
                'country_id' => $request->country_id,
                'state_id' => $request->state_id,
                'location' => $request->location,
                'skills' => $request->skills,
                'about_me' => $request->about_me,
                'bio' => $request->bio,
            ]);

            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $user->addMediaFromRequest('image')->toMediaCollection('image');
            }

            if ($request->role_id) {
                $role = $this->role->findOrFail($request->role_id);
                $user->assignRole($role);
            }
            
            DB::commit();

            return redirect()->route('admin.user.index')->with('success', __('User Created Successfully'));

        } catch (Exception $e){

            DB::rollback();

            throw $e;
        }
    }

    public function update($request, $id)
    {
        DB::beginTransaction();

        try {

            $user = $this->model->findOrFail($id);
            $user->update([
                'country_code' => $request->country_code,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => (string) $request->phone,
                'status' => $request->status,
                'dob' => $request->dob,
                'gender' => $request->gender,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'postal_code' => $request->postal_code,
                'country_id' => $request->country_id,
                'state_id' => $request->state_id,
                'location' => $request->location,
                'skills' => $request->skills,
                'about_me' => $request->about_me,
                'bio' => $request->bio,
            ]);

            $user = $this->model->findOrFail($id);
            if ($user->system_reserve) {
                return redirect()->back()->with('error', __('This user cannot be update, It is system reserved.'));
            }
            
            if (isset($request->role_id)) {
                $role = $this->role->find($request->role_id);
                $user->syncRoles($role);
            }

            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $user->clearMediaCollection('image');
                $user->addMediaFromRequest('image')->toMediaCollection('image');
            }

            DB::commit();
            return redirect()->route('admin.user.index')->with('success', __('User Updated Successfully'));

        } catch (Exception $e) {

            DB::rollback();

            throw $e;
        }
    }

    public function status($id, $status)
    {
        try {

            $user = $this->model->findOrFail($id);
            $user->update(['status' => $status]);

            return json_encode(["resp" => $user]);

        } catch (Exception $e) {

            throw $e;
        }
    }

    public function destroy($id)
    {
        try {

            $user = $this->model->findOrFail($id);
            $user->destroy($id);
            return redirect()->back()->with('success', __('User Deleted Successfully'));

        } catch (Exception $e) {

            throw $e;
        }
    }
}