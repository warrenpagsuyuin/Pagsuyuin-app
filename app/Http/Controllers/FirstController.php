<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function show() {
        $first = [
            [
                "name" => "John Doe",
                "gender" => "Male"
            ],
            [
                "name" => "Jane Doe",
                "gender" => "Female"
            ]
        ];

        return response()->json($first);
    }
}
