<?php

$routes = [
    '/' => 'HomeController@index',
    '/users/{id}' => 'UserController@show',
    '/todo' => 'TaskController@index',
    '/signIn' => 'HomeController@signIn',
    '/signUp' => 'HomeController@signUp',
    '/add' => 'HomeController@add',
    '/addTask' => 'TaskController@create',
    '/tasks/{id}' => 'TaskController@show',
];