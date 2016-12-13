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

// $app->get('/', function () use ($app) {
//     return $app->version();
// });

$app->group(['prefix' => 'api/v1'], function($app)
{
  $app->get('/bycycles','BycyclesController@index');
  $app->get('/bycycles/{bycycles}','BycyclesController@show');
  $app->post('/bycycles','BycyclesController@store');
  $app->put('/bycycles/{bycycles}','BycyclesController@update');
  // $app->patch('/bycycles/{bycycles}', 'BycyclesController@update');
  $app->delete('/bycycles/{bycycles}','BycyclesController@destroy');
});
