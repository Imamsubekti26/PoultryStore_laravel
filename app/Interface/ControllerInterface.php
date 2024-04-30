<?php

namespace App\Interface;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

interface ControllerInterface
{
    /**
     * Show home page
     */
    public function index():View;

    /**
     * Show form to add data
     */
    public function create(): View;

    /**
     * Show form to edit data
     */
    public function edit(string $id): View;

    /**
     * Send batch of data.
     */
    public function list(Request $request): JsonResponse;

    /**
     * Send a single data depend on id.
     */
    public function show(string $id): JsonResponse;

    /**
     * Store data to database.
     */
    public function store(Request $request): JsonResponse;

    /**
     * Update data in database depend on id.
     */
    public function update(Request $request, string $id): JsonResponse;

    /**
     * Delete data from database depend on id.
     */
    public function destroy(string $id): JsonResponse;
}
