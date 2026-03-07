<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{
    public function index(UserService $userService)
    {
        $users = $userService->listUser();
        return view('user.index', ['users' => $users]);
    }

    public function first(UserService $userService)
    {
        return collect($userService->listUser())->first();
    }

    public function get(UserService $userService, $id)
    {
      $user = collect($userService->listUser())->filter(function ($item) use ($id) {
        return $item['id'] == $id;
      })->first();
      return $user;
    }
}
