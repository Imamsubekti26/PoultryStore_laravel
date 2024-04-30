<?php

namespace App\Http\Controllers;

use App\Helpers\GenerateResponse;
use App\Models\Employee;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->setTitle('karyawan', 'employee');
    }

    /**
     * Send batch of data.
     */
    public function list(Request $request): JsonResponse
    {
        try {
            $data = Employee::all();            
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
            $data = Employee::find($id);
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
            'surename' => $request->surename,
            'nik' => $request->nik,
            'address' => $request->address,
            'area' => $request->area,
            'phone' => $request->phone,
            'position' => $request->position,
            'base_salary' => $request->base_salary,
            'nickname' => $request->nickname,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ];

        try {
            $result = Employee::create($form);
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
            'surename' => $request->surename,
            'nik' => $request->nik,
            'address' => $request->address,
            'area' => $request->area,
            'phone' => $request->phone,
            'position' => $request->position,
            'base_salary' => $request->base_salary,
            'nickname' => $request->nickname,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ];

        try {
            $result = Employee::whereKey($id)->update($form);
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
            $result = Employee::find($id)->delete();
            if(!$result) {
                throw new Exception('failed to remove data with id '.$id);
            }
            return response()->json(GenerateResponse::success(['affected_row' => $result]));
        } catch (\Throwable $th) {            
            return response()->json(GenerateResponse::failed("failed to remove data: $th"), 500);
        }
    }
}
