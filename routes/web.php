<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
use App\Models\User;
use Illuminate\Http\Request;
$app->get('/', function () use ($app) {
  //  return $app->version();
    return 'russik Lumen';
});

$app->get('/data',function () use ($app) {
    //  return $app->version();
    return response()->json(User::all());
});



$app->post('/data/add',function (Request $request) use ($app) {
    $new_user = new User();
    $new_user->username=$request->input('username');
    $new_user->password=$request->input('password');
    $new_user->file=$request->input('file');

    if($new_user->save()){
        return response()->json($new_user);
    }else{
        return response()->json('error');
    }




});