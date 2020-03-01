<?php

use Klein\Klein;
use Klein\Request;
use Klein\Response;

/**
 * @var Klein $router
 */

$router->get('/', function($request, $response){
    return cnt('PostsController@index', $request, $response);
});

$router->get('/post', function($request, $response){
    return cnt('PostsController@view', $request, $response);
});

$router->get('/create', function($request, $response){
    return cnt('PostsController@view', $request, $response);
});

$router->with('/create', function() use ($router){
    $router->get('', function (){
        return cnt('PostsController@create');
    });

    $router->post('', function ($request, $res){
        return cnt('PostsController@insert', $request, $res);
    });
});

$router->with('/update', function() use ($router){
    $router->get('', function ($request, $res){
        return cnt('PostsController@update', $request, $res);
    });

    $router->post('', function ($request, $res){
        return cnt('PostsController@edit', $request, $res);
    });
});

$router->get('/delete', function($request, $res){
    return cnt('PostsController@delete', $request, $res);
});