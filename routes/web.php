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

//Excer 3
Route::get('/post/{post}/comment/{comment}', function ($postId, $commentId) {
    return "Post ID: $postId, Comment: $commentId";
});

Route::get('post/{id}', function ($id) {
    return "Post ID: $id";
})->where('id', '[0-9]+');

Route::get('/search/{search}', function (string $search) {
    return  $search;
})->where('search', '.*');

Route::get('/test/route/sample', function () {
    return route('test-route');
})->name('test-route');

Route::middleware(['user-middleware'])->group(function () {
    Route::get('route-middleware-group', function (Request $request) {
        return response('first');
    });

    Route::get('route-middleware-group/second', function (Request $request) {
        return response('second');
    });
});

Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index');
    Route::post('/users/first', 'first');
    Route::get('/users/{id}', 'get');
});

Route::get('/token', function (Request $request) {
    return view('token');
});

Route::post('/token', function (Request $request) {
    return $rrequest->all();
});

