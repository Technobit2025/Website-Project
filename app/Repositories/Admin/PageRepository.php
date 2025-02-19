<?php

namespace App\Repositories\Admin;

use Exception;
use App\Models\Page;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Eloquent\BaseRepository;

class PageRepository extends BaseRepository
{
    function model()
    {
        return Page::class;
    }

    public function index($pageTable)
    {
        return view('admin.page.index');
    }  

    public function create($attribute = [])
    {
        return view('admin.page.create');
    }

    public function store($request)
    {
        DB::beginTransaction();
        try {
            $page = $this->model->create([
                'title' => $request->title,
                'content' => $request->content,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'created_by_id' => Auth::user()->id,
                'status' => $request->status,
            ]);

            if ($request->hasFile('meta_image') && $request->file('meta_image')->isValid()) {
                $page->addMediaFromRequest('meta_image')->toMediaCollection('meta_image');
            }

            DB::commit();
            return redirect()->route('admin.page.index')->with('success', 'Page Created Successfully.');
        } catch (Exception $e) {

            DB::rollback();

            throw $e;
        }
    }

    public function edit($id)
    {
        $page = $this->model->find($id);
        return view('admin.page.edit', [
            'page' => $page,
        ]);
    }

    public function update($request, $id)
    {
        DB::beginTransaction();
        try {

            $page = $this->model->findOrFail($id);
            $page->update([
                'title' => $request->title,
                'content' => $request->content,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'created_by_id' => Auth::user()->id,
                'status' => $request->status,
            ]);

            if ($request->hasFile('meta_image') && $request->file('meta_image')->isValid()) {
                $page->clearMediaCollection('meta_image');
                $page->addMediaFromRequest('meta_image')->toMediaCollection('meta_image');
            }

            DB::commit();
            return redirect()->route('admin.page.index')->with('success', 'Page Updated Successfully.');
        } catch (Exception $e) {

            DB::rollback();
            throw $e;
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $page = $this->model->findOrFail($id);
            $page->destroy($id);

            DB::commit();
            return redirect()->back()->with('success', __('Page Deleted Successfully'));
        } catch (Exception $e) {

            DB::rollback();
            return back()->with(['error' => $e->getMessage()]);
        }
    }
    public function status($id, $status)
    {
        try {

            $page = $this->model->findOrFail($id);
            $page->update(['status' => $status]);

            return json_encode(["resp" => $page]);
        } catch (Exception $e) {

            throw $e;
        }
    }
}
