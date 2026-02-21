<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'UserController index']);
    }

    public function first(UserService $userService)
    {
        return collect($userService->listUser())->first();
    }

    public function get(UserService $userService, $id)
    {
      $user = collect($userService->listUser()) ->filter(function ($item) use ($id) {
        return $item['id'] == $id;
    })->first();
     
    }
}
