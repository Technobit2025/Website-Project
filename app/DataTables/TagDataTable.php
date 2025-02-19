<?php

namespace App\DataTables;

use App\Models\Tag;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class TagDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->editColumn('created_at', function ($row) {
            return $row->created_at->diffForHumans();
        })
        ->editColumn('action', function ($row) {
            return view('admin.inc.action', [
                'edit'   => 'admin.tag.edit',
                'delete' => 'admin.tag.destroy',
                'data'   => $row
            ]);
        })
        ->editColumn('status', function ($row) {
            return view('admin.inc.action', [
                'toggle' => $row,
                'name' => 'status',
                'route' => 'admin.tag.status',
                'value' => $row->status,
            ]);
        })
        ->rawColumns(['action', 'status', 'created_at']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Tag $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                ->setTableId('tag-table')
                ->addColumn(['data' => 'name', 'title' => __('Name'), 'orderable' => true, 'searchable' => true,])
                ->addColumn(['data' => 'created_at', 'title' => __('Created At'), 'orderable' => true, 'searchable' => true])
                ->addColumn(['data' => 'status', 'title' =>  __('Status'), 'orderable' => true, 'searchable' => true])
                ->addColumn(['data' => 'action', 'title' =>  __('Action'), 'orderable' => false, 'searchable' => false])
                ->minifiedAjax()
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
        return 'Tag_' . date('YmdHis');
    }
}
