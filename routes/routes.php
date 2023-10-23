<?php

$routes = [
    '/' => 'HomeController@index',
    '/users/{id}' => 'UserController@show',
    '/signIn' => 'HomeController@signIn',
    '/signUp' => 'HomeController@signUp',
    '/add' => 'HomeController@add',
    '/todo' => 'TaskController@index',
    '/addTask' => 'TaskController@create',
    '/tasks/{id}' => 'TaskController@show',
    '/update' => 'TaskController@update',
    '/important' => 'TaskController@showImportant',
];