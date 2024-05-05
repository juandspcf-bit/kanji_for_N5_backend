<?php

namespace App\Utils;

use Illuminate\Http\Request;

function errorMessage(Request $request, $message, $code)
{
    return $request->json([
        'meta' => [
            'message' => $message,
        ],
        "data" => [],
    ], $code);
}
