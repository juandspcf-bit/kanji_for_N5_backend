<?php

namespace App\Utils;

class Messages{

    static public function errorMessage( $message, $code){
        return response()->json([
            'meta' => [
                'message' => $message,
            ],
            "data" => [],
        ], $code);
    }

}