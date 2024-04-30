<?php

namespace App\Helpers;
use Illuminate\Database\Eloquent;

class GenerateResponse
{
    /**
     * 
     */
    public static function success($data): array
    {
        return [
            'isSuccess' => true,
            'error' => null,
            'data' => $data
        ];
    }

    /**\
     * 
     */
    public static function failed(string $msg): array
    {
        return [
            'isSuccess' => false,
            'error' => $msg,
            'data' => null
        ];
    }
}
