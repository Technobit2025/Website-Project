<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public $result = [
        'success' => true,
        'message' => null,
        'data' => null,
        'exceptions' => null
    ];

    public function paginateResponse(Request $request, $query)
    {
        //Paginate settings if available
        if ($request->has('limit') && !empty($request->input('limit')) && $request->has('page') && !empty($request->input('page'))) {
            $limit = $request->input('limit', 10);
            $page = $request->input('page', 1);

            Paginator::currentPageResolver(function () use ($page) {
                return $page;
            });
            $data = $query->paginate($limit);

            return $this->listResponse($data);
        } else {
            $data = $query->get();

            return $this->successResponse($data);
        }
    }

    /**
     * List json individual response with paginate
     * @param $data
     * @return
     */
    public function listResponse($data)
    {
        $response = [
            'success' => true,
            'data' => $data->all(),
            'metadata' => [
                'pages' => (int) $data->lastPage(),
                'current_page' => (int) $data->currentPage(),
                'per_page' => (int) $data->perPage(),
                'total' => (int) $data->total(),
            ],
        ];

        return getJsonResponse($response);
    }

    /**
     * Show json individual response
     * @param $data
     * @return
     */
    public function showResponse($data)
    {
        $response = [
            'success' => true,
            'data' => $data,
        ];

        return getJsonResponse($response);
    }

    /**
     * Show json individual response
     * @param $data
     * @return
     */
    public function createdResponse($data, $message = '')
    {
        $response = [
            'success' => true,
            'data' => $data,
            'message' => $message ? $message : 'New Data Successfully Created'
        ];

        return getJsonResponse($response);
    }

    /**
     * Not found response
     * @return
     */
    public function successResponse($data = null, $message = '')
    {
        $response = [
            'success' => true,
            'data' => $data,
            'message' => $message
        ];

        return getJsonResponse($response, 200);
    }

    /**
     * Not found response
     * @return
     */
    public function notFoundResponse($message = '', $code = 200)
    {
        $response = [
            'success' => false,
            'data' => null,
            'message' => $message ? $message : 'Resource Not Found'
        ];

        return getJsonResponse($response, $code);
    }

    /**
     * Client error response
     * @param $data
     * @return
     */
    public function clientErrorResponse($data = null, $message = '', $code = 422)
    {
        $response = [
            'success' => false,
            'data' => $data,
            'message' => $message ? $message : 'Unprocessable entity',
        ];

        return getJsonResponse($response, $code);
    }

    /**
     * Client error response
     * @param $data
     * @return
     */
    public function exceptionResponse($message = '', $exceptions = null, $code = 422)
    {
        $response = [
            'success' => false,
            'data' => null,
            'message' => $message ? $message : 'Error(s) occured when inserting new data',
            'exceptions' => $exceptions,
        ];

        return getJsonResponse($response, $code);
    }
}
