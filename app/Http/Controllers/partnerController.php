<?php

namespace App\Http\Controllers;

use App\Helpers\GenerateResponse;
use App\Models\Partner;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->setTitle('mitra', 'partner');
    }

    /**
     * Send batch of data.
     */
    public function list(Request $request): JsonResponse
    {
        try {
            $data = Partner::all();            
            return response()->json(GenerateResponse::success($data));
        } catch (\Throwable $th) {            
            return response()->json(GenerateResponse::failed("failed to getting data: $th"), 500);
        }
    }

    /**
     * Send a single data depend on id.
     */
    public function show(string $id): JsonResponse
    {
        try {
            $data = Partner::find($id);
            if(is_null($data)){
                throw new Exception('data not found');
            }
            return response()->json(GenerateResponse::success($data));
        } catch (\Throwable $th) {
            $error_code = $th == 'data not found' ? 404 : 500 ;
            return response()->json(GenerateResponse::failed("failed to getting data: $th"), $error_code);
        }
    }

    /**
     * Store data to database.
     */
    public function store(Request $request): JsonResponse
    {
        $form = [
            "name" => $request->name,
            "address" => $request->address,
            "area" => $request->area,
            "phone" => $request->phone,
            "partnership_type" => $request->partnership_type
        ];

        try {
            $result = Partner::create($form);
            if(is_null($result)){
                throw new Exception('null');
            }
            return response()->json(GenerateResponse::success($result), 201);
        } catch (\Throwable $th) {            
            return response()->json(GenerateResponse::failed("failed to adding data: $th"), 500);
        }
    }

    /**
     * Update data in database depend on id.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $form = [
            "name" => $request->name,
            "address" => $request->address,
            "area" => $request->area,
            "phone" => $request->phone,
            "partnership_type" => $request->partnership_type
        ];

        try {
            $result = Partner::whereKey($id)->update($form);
            if($result == 0){
                throw new Exception('null');
            }
            return response()->json(GenerateResponse::success(['affected_row' => $result]));
        } catch (\Throwable $th) {            
            return response()->json(GenerateResponse::failed("failed to updating data: $th"), 500);
        }
    }

    /**
     * Delete data from database depend on id.
     */
    public function destroy(string $id): JsonResponse
    {
        try {
            $result = Partner::destroy($id);
            if($result == 0) {
                throw new Exception('failed to remove data with id '.$id);
            }
            return response()->json(GenerateResponse::success(['affected_row' => $result]));
        } catch (\Throwable $th) {            
            return response()->json(GenerateResponse::failed("failed to remove data: $th"), 500);
        }
    }
}
