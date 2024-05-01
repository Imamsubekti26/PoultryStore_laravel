<?php

namespace App\Http\Controllers;

use App\Helpers\GenerateResponse;
use App\Models\Car;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->setTitle('mobil', 'car');
    }

    /**
     * Send batch of data.
     */
    public function list(Request $request): JsonResponse
    {
        try {
            $data = Car::all();            
            return response()->json(GenerateResponse::success($data));
        } catch (\Throwable $th) {            
            return response()->json(GenerateResponse::failed("failed to getting data: ".$th->getMessage()), 500);
        }
    }

    /**
     * Send a single data depend on id.
     */
    public function show(string $id): JsonResponse
    {
        try {
            $data = Car::find($id);
            if(is_null($data)){
                throw new Exception('data not found');
            }
            return response()->json(GenerateResponse::success($data));
        } catch (\Throwable $th) {
            $error_code = $th == 'data not found' ? 404 : 500 ;
            return response()->json(GenerateResponse::failed("failed to getting data: ".$th->getMessage()), $error_code);
        }
    }

    /**
     * Store data to database.
     */
    public function store(Request $request): JsonResponse
    {
        $form = [
            'plat' => $request->plat,
            'merk' => $request->merk
        ];

        try {
            $result = Car::create($form);
            if(is_null($result)){
                throw new Exception('null');
            }
            return response()->json(GenerateResponse::success($result), 201);
        } catch (\Throwable $th) {            
            return response()->json(GenerateResponse::failed("failed to adding data: ".$th->getMessage()), 500);
        }
    }

    /**
     * Update data in database depend on id.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $form = [
            'plat' => $request->plat,
            'merk' => $request->merk,
            'status' => $request->status,
        ];

        try {
            $result = Car::whereKey($id)->update($form);
            if($result == 0){
                throw new Exception('null');
            }
            return response()->json(GenerateResponse::success(['affected_row' => $result]));
        } catch (\Throwable $th) {            
            return response()->json(GenerateResponse::failed("failed to updating data: ".$th->getMessage()), 500);
        }
    }

    /**
     * Delete data from database depend on id.
     */
    public function destroy(string $id): JsonResponse
    {
        try {
            $result = Car::destroy($id);
            if($result == 0) {
                throw new Exception('failed to remove data with id '.$id);
            }
            return response()->json(GenerateResponse::success(['affected_row' => $result]));
        } catch (\Throwable $th) {            
            return response()->json(GenerateResponse::failed("failed to remove data: ".$th->getMessage()), 500);
        }
    }
}
