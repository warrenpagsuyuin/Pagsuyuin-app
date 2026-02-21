<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\UserController;
use App\Services\UserService;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show-first', [FirstController::class, 'show']);

Route::get('/test-container', function (Request $request) {
    $input = $request->input('key');
    return $input;
});

Route::get('/test-provider', function (Request $request) {
    $input = $request->input('key');
    return $input;
});

Route::get('/test-user', [UserController::class, 'index']);

Route::get('/test-facade', function (UserService $userService) {
    return Response::json($userService->listUser());
});

