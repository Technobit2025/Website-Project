<?php

namespace App\Http\Controllers\Web\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiTestController extends Controller
{
    public function index()
    {
        return view('super_admin.api_test.index');
    }

    public function test(Request $request)
    {
        $validated = $request->validate([
            'method'  => 'required|string',
            'url'     => 'required|url',
            'headers' => 'nullable|array',
            'body'    => 'nullable'
        ]);

        try {
            $response = Http::withHeaders($validated['headers'] ?? [])
                ->send($validated['method'], $validated['url'], [
                    'body' => $validated['body'] ?? null
                ]);

            return response()->json([
                'status'  => $response->status(),
                'headers' => $response->headers(),
                'body'    => $response->json()
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
