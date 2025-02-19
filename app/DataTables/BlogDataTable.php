<?php

namespace App\DataTables;

use App\Models\Blog;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class BlogDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->setRowId('id')
        ->editColumn('created_at', function ($row) {
            return $row->created_at->diffForHumans();
        })
        ->editColumn('thumbnail', function ($row) {
            $media = $row->getFirstMedia('thumbnail');
                if ($media) {
                    return '<img src="' . $media->getUrl() . '" alt="thumbnail" class="img-thumbnail img-fix">';
                }
                return '<img src="' . asset("assets/images/user/user.png") . '" alt="Placeholder Image" class="img-thumbnail img-fix">';
        })
        ->editColumn('action', function ($row) {
            return view('admin.inc.action', [
                'edit'   => 'admin.blog.edit',
                'delete' => 'admin.blog.destroy',
                'data'   => $row
            ]);
        })
        ->editColumn('status', function ($row) {
            return view('admin.inc.action', [
                'toggle' => $row,
                'name' => 'status',
                'route' => 'admin.blog.status',
                'value' => $row->status,
            ]);
        })
        ->rawColumns(['action', 'created_at','thumbnail']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Blog $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
        ->setTableId('blog-table')
        ->addColumn(['data' => 'thumbnail', 'title' => __('Thumbnail'), 'orderable' => false, 'searchable' => false,])
        ->addColumn(['data' => 'title', 'title' =>  __('Title'), 'orderable' => true, 'searchable' => true,])
        ->addColumn(['data' => 'created_at', 'title' =>  __('Created At'), 'orderable' => true, 'searchable' => false])
        ->addColumn(['data' => 'status', 'title' =>  __('Status'), 'orderable' => true, 'searchable' => true])
        ->addColumn(['data' => 'action', 'title' =>  __('Action'), 'orderable' => false, 'searchable' => false])
        ->minifiedAjax()
        ->orderBy(1)
        ->selectStyleSingle()
        ->parameters([
            'language' => [
                'emptyTable' => 'No Records Found',
                'infoEmpty' => '',
                'zeroRecords' => 'No Records Found',
            ],
            'drawCallback' => 'function(settings) {
                if (settings._iRecordsDisplay === 0) {
                    $(settings.nTableWrapper).find(".dataTables_paginate").hide();
                } else {
                    $(settings.nTableWrapper).find(".dataTables_paginate").show();
                }
                feather.replace();
            }',
        ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Blog_' . date('YmdHis');
    }
}
