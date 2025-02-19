<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use Illuminate\Http\Request;
use App\DataTables\PageDataTable;
use App\Http\Controllers\Controller;
use App\Repositories\Admin\PageRepository;
use App\Http\Requests\Admin\CreatePageRequest;
use App\Http\Requests\Admin\UpdatePageRequest;

class PageController extends Controller
{
    
    public $repository;
    
    public function __construct(PageRepository $repository)
    {
        $this->authorizeResource(Page::class, 'page');
        $this->repository = $repository;
    }
   
    /**
     * Display a listing of the resource.
     */
    public function index(PageDataTable $dataTable)
    {
        return $dataTable->render('admin.page.index');
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
    public function store(CreatePageRequest $request)
    {
        return $this->repository->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        return $this->repository->edit($page->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        return $this->repository->update($request, $page->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        return $this->repository->destroy($page->id);
    }

    public function status(Request $request, $id)
    {
        return $this->repository->status($id ,$request->status);
    }
}
