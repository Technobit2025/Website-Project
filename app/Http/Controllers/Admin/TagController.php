<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\DataTables\TagDataTable;
use App\Http\Controllers\Controller;
use App\Repositories\Admin\TagRepository;
use App\Http\Requests\Admin\CreateTagRequest;
use App\Http\Requests\Admin\UpdateTagRequest;

class TagController extends Controller
{

    public $repository;

    public function __construct(TagRepository $repository)
    {
        $this->authorizeResource(Tag::class, 'tag');
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(TagDataTable $dataTable)
    {
        return $dataTable->render('admin.tag.index');
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
    public function store(CreateTagRequest $request)
    {
        return $this->repository->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return $this->repository->edit($tag);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        return $this->repository->update($request->all(), $tag->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        return $this->repository->destroy($tag->id);
    }

    public function status(Request $request, $id)
    {
        return $this->repository->status($id ,$request->status);
    }
}
 