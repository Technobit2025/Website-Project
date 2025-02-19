<?php

namespace App\Repositories\Admin;

use Exception;
use App\Models\Tag;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Eloquent\BaseRepository;

class BlogRepository extends BaseRepository
{
    protected $category;
    protected $tag;

    function model()
    {
        $this->category = new Category();
        $this->tag = new Tag();
        return Blog::class;
    }

    public function index()
    {
        return view('admin.blog.index');
    }

    public function create($attribute = [])
    {
        return view('admin.blog.create',[
            'categories'=>$this->getCategories(),
            'tags'=>$this->getTags()
        ]);

        return view('admin.blog.create');
    }

    private function getCategories()
    {
        return $this->category->where('type', 'blog')
            ->where('status', true)
            ->pluck('name', 'id');
    }

    private function getTags()
    {
        return $this->tag->where('type', 'blog')
            ->where('status', true)
            ->pluck('name', 'id');
    }


    public function show($id)
    {

    }

    public function store($request)
    {
        DB::beginTransaction();
        try {
            $blog = $this->model->create([
                'title' => $request->title,
                'description'=> $request->description,
                'content' => $request->content,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'status' => $request->status,
            ]);

            if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
                $blog->addMedia($request->file('thumbnail'))->toMediaCollection('thumbnail');
            }

            if ($request->hasFile('images') && $request->file('images')) {
                foreach ($request->file('images') as $file) {
                    if($file->isValid()){
                        $blog->addMedia($file)->toMediaCollection('images');
                    }
                }
            }
    
            if ($request->hasFile('meta_image') && $request->file('meta_image')->isValid()) {
                $blog->addMedia($request->file('meta_image'))->toMediaCollection('meta_image');
            }

            if (isset($request->categories)){
                $blog->categories()->attach($request->categories);
                $blog->categories;
            }

            if (isset($request->tags)){
                $blog->tags()->attach($request->tags);
                $blog->tags;
            }

            DB::commit();
            return redirect()->route('admin.blog.index')->with('success', __('Blog Created Successfully'));
        } catch (Exception $e) {

            DB::rollback();

            throw $e;
        }
    }

    public function edit($id)
    {
        $blog = $this->model->find($id);
        return view('admin.blog.edit', [
            'blog' => $blog,
            'categories'=>$this->getCategories(),
            'tags'=>$this->getTags(),
            'default_categories'=>$this->getDefaultCategories($blog),
            'default_tags'=>$this->getDefaultTags($blog),
        ]);
    }

    public function getDefaultCategories($blog)
    {
        $categories = [];
        foreach ($blog->categories as $category) {
            $categories[] = $category->id;
        }
        $categories = array_map('strval', $categories);
        return $categories;
    }

    public function getDefaultTags($blog)
    {
        $tags = [];
        foreach ($blog->tags as $tag) {
            $tags[] = $tag->id;
        }
        $tags = array_map('strval', $tags);
        return $tags;
    }


    public function update($request, $id)
    {
        DB::beginTransaction();
        try {
            $blog = $this->model->findOrFail($id);
            $blog->update($request->all());

            if (isset($request->categories)){
                $blog->categories()->sync($request->categories);
                $blog->categories;
            }

            if (isset($request->tags)){
                $blog->tags()->sync($request->tags);
                $blog->tags;
            }

            if ($request['thumbnail']) {
                $blog->clearMediaCollection('thumbnail');
                $blog->addMedia($request['thumbnail'])->toMediaCollection('thumbnail');
            }

            if ($request['images']) {
                $blog->clearMediaCollection('images');
                foreach ($request->file('images') as $image) {
                    $blog->addMedia($image)->toMediaCollection('images');
                }
            }

            if ($request['meta_image']) {
                $blog->clearMediaCollection('meta_image');
                $blog->addMedia($request['meta_image'])->toMediaCollection('meta_image');
            }

            DB::commit();
            return redirect()->route('admin.blog.index')->with('success', __('Blog Updated Successfully'));
        } catch (Exception $e) {

            DB::rollback();
            throw $e;
        }
    }
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $category = $this->model->findOrFail($id);
            $category->destroy($id);

            DB::commit();
            return redirect()->back()->with('success', __('Blog Deleted Successfully'));
        } catch (Exception $e) {

            DB::rollback();
            throw $e;
        }
    }
    public function status($id, $status)
    {
        try {
            $blog = $this->model->findOrFail($id);
            $blog->update(['status' => $status]);

            return json_encode(["resp" => $blog]);
        } catch (Exception $e) {

            throw $e;
        }
    }

}