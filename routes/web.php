<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/deploy', function (Request $request) {

    // if ($request->header('X-SECRET-TOKEN') !== '123456789') {
    //     abort(403, 'Unauthorized');
    // }

    exec('/home/~/deploy_lms.sh');

    return response()->json(['status' => 'deployed']);
});
//2
