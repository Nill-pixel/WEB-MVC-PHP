<?php

$routes = [
    '/' => 'HomeController@index',
    '/users/{id}' => 'UserController@show',
    '/signUpUser' => 'UserController@signUp',
    '/signIn' => 'HomeController@signIn',
    '/signUp' => 'HomeController@signUp',
    '/add' => 'HomeController@add',
    '/todo' => 'TaskController@index',
    '/addTask' => 'TaskController@create',
    '/tasks/{id}' => 'TaskController@show',
    '/update' => 'TaskController@update',
    '/important' => 'TaskController@showImportant',
    '/planned' => 'TaskController@planned',
    '/all' => 'TaskController@all',
    '/delete/{id}' => 'TaskController@delete',
];