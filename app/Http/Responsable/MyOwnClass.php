<?php

namespace App\Http\Responsable;

use Illuminate\Contracts\Support\Responsable;

class MyOwnClass implements Responsable
{
    public function toResponse($request)
    {
        return response()->json(['success' => true]);
    }
}