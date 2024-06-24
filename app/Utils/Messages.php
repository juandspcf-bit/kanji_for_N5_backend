<?php

namespace App\Utils;

class Messages{

    static public function errorMessage( $th, $code){
        return response()->json([
            'meta' => [
                'message' => $th->getMessage(),
            ],
            "data" => [],
        ], $code);
    }

}