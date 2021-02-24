<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', 'HomeController@index');

$router->get('/api/categories', 'CategoriesController@index');
$router->post('/api/categories/store', 'CategoriesController@store');
$router->get('/api/categories/{id}', 'CategoriesController@show');
$router->put('/api/categories/{id}/update', 'CategoriesController@update');
$router->delete('/api/categories/{id}/delete', 'CategoriesController@delete');


$router->get('/api/products', 'ProductsController@index');
$router->post('/api/products/store', 'ProductsController@store');
$router->get('/api/products/{id}', 'ProductsController@show');
$router->put('/api/products/{id}/update', 'ProductsController@update');
$router->delete('/api/products/{id}/delete', 'ProductsController@delete');

$router->get('/api/testing', 'ProductsController@testing');