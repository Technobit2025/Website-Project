<?php

namespace App\Repositories\Admin;

use Exception;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Prettus\Repository\Eloquent\BaseRepository;

class CategoryRepository extends BaseRepository
{
    function model()
    {
       return Category::class;
    }

    public function index()
    {
        $parent = $this->model->getHierarchy();
        $categories = $this->model->whereNull('parent_id')->orderBy('sort_order', 'ASC')->get();
        return view('admin.category.create', ['categories' => $categories, 'parent' => $parent]);
    }

    public function store($request)
    {
        DB::beginTransaction();
        try {
            $category =  $this->model->create([
                'name' => $request->name,
                'description' => $request->description,
                'type' => $request->type ?? 'post',
                'status' => $request->status,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'parent_id' => $request->parent_id,
            ]);

            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $category->addMediaFromRequest('image')->toMediaCollection('image');
            }


            DB::commit();

            return to_route('admin.category.index')->with('success', __('Category Create Successfully'));

        } catch (Exception $e) {

            DB::rollback();
            throw $e;
        }
    }

    public function edit($category)
    {
        $parent = $this->model->getHierarchy();
        $categories = $this->model->whereNull('parent_id')->orderBy('sort_order', 'ASC')->get();
        return view('admin.category.edit', ['cat' => $category, 'parent' => $parent, 'categories' =>  $categories]);
    }

    public function update($request, $id)
    {
        DB::beginTransaction();
        try {

            $category = $this->model->findOrFail($id);
            $category->update($request->all());

            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $category->clearMediaCollection('image');
                $category->addMediaFromRequest('image')->toMediaCollection('image');
            }

            DB::commit();

            return to_route('admin.category.index')->with('success', __('Category Updated Successfully'));

        } catch (Exception $e) {

            DB::rollback();

            throw $e;
        }
    }

    public function status($id, $status)
    {
        try {

            $category = $this->model->findOrFail($id);
            $category->update(['status' => $status]);

            return $category;

        } catch (Exception $e) {

            throw $e;
        }
    }

    public function destroy($id)
    {
        try {

            $this->model->findOrFail($id)?->destroy($id);
            return redirect()->route('admin.category.index')->with('success', __('Category Deleted Successfully'));

        } catch (Exception $e) {

            throw $e;
        }
    }

    public function updateOrders($data)
    {
        DB::beginTransaction();
        try {
            foreach($data['categories'] as $cat) {
                $category = $this->model->findOrFail($cat['id']);
                $category->update([
                    'parent_id' => $cat['parent_id'] ?? null,
                    'sort_order' => $cat['order']
                ]);
            }

            DB::commit();
            return json_encode(array("resp" => [$data['categories'], $category]));

        } catch (Exception $e) {

            DB::rollback();

            throw $e;
        }
    }
}
