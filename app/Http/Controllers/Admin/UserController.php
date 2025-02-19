<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\User;
use App\Models\State;
use App\Models\Country;
use Illuminate\Http\Request;
use App\DataTables\UserDataTable;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Admin\RoleRepository;
use App\Repositories\Admin\UserRepository;
use Illuminate\Contracts\Support\Renderable;
use App\Http\Requests\Admin\CreateUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Http\Requests\Admin\UpdateProfileRequest;

class UserController extends Controller
{
    private $role;

    private $repository;

    public function __construct(RoleRepository $roleRepository, UserRepository $repository)
    {
        $this->authorizeResource(User::class, 'user');
        $this->repository = $repository;
        $this->role = $roleRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(User $user)
    {
        $countries = Country::all()->pluck('name','id');
        return view('admin.user.create', ['user' => $user,'roles' => $this->role->get()], compact('countries'));
    }

    public function store(CreateUserRequest $request)
    {
        return $this->repository->store($request);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(User $user)
    {
        $countries = Country::all()->pluck('name','id');
        return view('admin.user.edit', ['user' => $user, 'roles' => $this->role->get()], compact('countries'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        return $this->repository->update($request, $user->id);
    }

    /**
     * Update Status the specified resource from storage.
     *
     * @param  int  $id
     * @param int $status
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request, $id)
    {
        return $this->repository->status($id, $request->status);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(User $user)
    {
        return $this->repository->destroy($user->id);
    }
    
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function userProfile()
    {
        return view('admin.user.user-profile',['user' => Auth::user(),'role' => Auth::user()->role->name]);
    }

    public function editProfile()
    {
        $countries = Country::all()->pluck('name','id');
        return view('admin.user_profile.edit_profile',['user' => Auth::user(),'role' => Auth::user()->role->name], compact('countries'));
    }
    public function getStates(Request $request){
    	$data['states'] = State::where("country_id", $request->country_id)->get(["name", "id"]);
        return response()->json($data);
    }

    public function updateProfile(UpdateProfileRequest $request){

        DB::beginTransaction();

        try {
            $user = Auth::user();
            $user->email = $request->input('email');
            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->postal_code = $request->input('postal_code');
            $user->country_code = $request->input('country_code');
            $user->phone = $request->input('phone');
            $user->address = $request->input('address');
            $user->country_id = $request->input('country_id');
            $user->state_id = $request->input('state_id');
            $user->location = $request->input('location');
            $user->about_me = $request->input('about_me');
            $user->bio = $request->input('bio');

            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $user->clearMediaCollection('image');
                $user->addMediaFromRequest('image')->toMediaCollection('image');
            }
            $user->save();

            DB::commit();
            return redirect()->route('admin.user.edit-profile')->with('success', __('Profile updated successfully'));

        } catch (Exception $e) {

            DB::rollback();

            throw $e;
        }
    }
    public function removeImage($id)
    {
        $user = User::find($id);
        $user->clearMediaCollection('image');
        return redirect()->back()->with('success', 'Image removed successfully');
    }
}
