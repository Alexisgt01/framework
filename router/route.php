<?php
use WeRouter\Router;

Router::setNamespace("App\\Http\\Controller\\");

Router::get('/', 'HomeController@index');

Router::run();
