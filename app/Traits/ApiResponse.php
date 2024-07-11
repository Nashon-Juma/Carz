<?php

namespace App\Traits;

trait ApiResponse {
    protected function error($message,){
        return $this->success( $message,200);
    }
    protected function ok($message, $statusCode=200){
        return response()->json([
           'message' => $message,
           'status'  => $statusCode
        ], $statusCode);
    }
}

