<?php

namespace App\DataTables;

use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class RoleDataTable extends DataTable
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
            ->editColumn('updated_at', function ($row) {
                return $row->updated_at->diffForHumans();
            })
            ->editColumn('action', function ($row) {
                return view('admin.inc.action', [
                    'edit'   => 'admin.role.edit',
                    'delete' => 'admin.role.destroy',
                    'data'   => $row
                ]);
            })
            ->rawColumns(['created_at', 'status', 'action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Role $model): QueryBuilder
    {
        return $model->newQuery()->where('system_reserve',0);
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('role-table')
            ->addColumn(['data' => 'name', 'title' => __('Name'), 'orderable' => true, 'searchable' => true])
            ->addColumn(['data' => 'created_at', 'title' => __('Created At'), 'orderable' => true, 'searchable' => true])
            ->addColumn(['data' => 'updated_at', 'title' => __('Updated At'), 'orderable' => true, 'searchable' => false])
            ->addColumn(['data' => 'action', 'title' => __('Action'), 'orderable' => false, 'searchable' => false])
            ->minifiedAjax()
            ->parameters([
                'language' => [
                    'emptyTable' =>'No Records Found',
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
        return 'Role_' . date('YmdHis');
    }
}
