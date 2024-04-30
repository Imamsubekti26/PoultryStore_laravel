<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ActivityController extends Controller
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->setTitle('aktivitas', 'activity');
    }

    /**
     * Send batch of data.
     */
    public function list(Request $request): JsonResponse
    {
        return response()->json([]);
    }

    /**
     * Send a single data depend on id.
     */
    public function show(string $id): JsonResponse
    {
        return response()->json([]);
    }

    /**
     * Store data to database.
     */
    public function store(Request $request): JsonResponse
    {
        return response()->json([]);
    }

    /**
     * Update data in database depend on id.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        return response()->json([]);
    }

    /**
     * Delete data from database depend on id.
     */
    public function destroy(string $id): JsonResponse
    {
        return response()->json([]);
    }

}
