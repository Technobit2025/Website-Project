<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\DataTables\BlogDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Admin\BlogRepository;
use App\Http\Requests\Admin\CreateBlogRequest;
use App\Http\Requests\Admin\UpdateBlogRequest;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class BlogController extends Controller
{
    public $repository;
    
    public function __construct(BlogRepository $repository)
    {
        $this->authorizeResource(Blog::class, 'blog');
        $this->repository = $repository;
    }
    
    /**
     * Display a listing of the resource.
    */
    public function index(BlogDataTable $dataTable)
    {
        return $dataTable->render('admin.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->repository->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateBlogRequest $request)
    {
        return $this->repository->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return $this->repository->edit($blog->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        return $this->repository->update($request, $blog->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        return $this->repository->destroy($blog->id);
    }

    public function status(Request $request, $id)
    {
        return $this->repository->status($id, $request->status);
    }

    public function removeImage($id)
    {
        $media = Media::find($id);
        $media->delete();
        return redirect()->back()->with('success', 'Image removed successfully');
    }
}
