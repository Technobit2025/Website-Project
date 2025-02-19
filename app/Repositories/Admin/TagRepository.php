<?php

namespace App\Repositories\Admin;

use Exception;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Eloquent\BaseRepository;

class TagRepository extends BaseRepository
{
    function model()
    {
        return Tag::class;
    }

    public function index()
    {
        return view('admin.tag.index');
    }

    public function create($attribute = [])
    {
        return view('admin.tag.create');
    }

    public function store($request)
    {
        DB::beginTransaction();
        try {
            $tag = $this->model->create([
                'name' => $request->name,
                'description' => $request->description,
                'status' => $request->status,
            ]);

            DB::commit();
            return redirect()->route('admin.tag.index')->with('success', __('Tag Created Successfully'));
        } catch (Exception $e) {

            DB::rollback();

            throw $e;
        }
    }

    public function edit($tag)
    {
        return view('admin.tag.edit',['tag'=>$tag]);
    }

    public function update($request, $id)
    {
        DB::beginTransaction();
        try {

            $tag = $this->model->findOrFail($id);
            $tag->update($request);

            DB::commit();
            return redirect()->route('admin.tag.index')->with('success', 'Tag Updated Successfully.');

        } catch (Exception $e) {

            DB::rollback();
            throw $e;
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $tag = $this->model->findOrFail($id);
            $tag->destroy($id);

            DB::commit();
            return redirect()->back()->with('success', __('Tag Deleted Successfully'));
        } catch (Exception $e) {

            DB::rollback();
            throw $e;
        }
    }
    public function status($id, $status)
    {
        try {

            $tag = $this->model->findOrFail($id);
            $tag->update(['status' => $status]);

            return json_encode(["resp" => $tag]);
            
        } catch (Exception $e) {

            throw $e;
        }
    }
}