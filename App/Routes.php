<?php

return [
    "GET" => [
        "/" => "HomeController@index",
        "/register" => "AuthController@indexRegister",
        "/login" => "AuthController@indexLogin",
        "/app" => "AppController@index",
    ],
    "POST" => [
        "/register" => "AuthController@register",
        "/login" => "AuthController@login",
        "/logout" => "AuthController@logout",
    ],
];