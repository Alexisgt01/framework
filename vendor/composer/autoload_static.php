<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6004ab9a0ff4b037f89f78951a7720a7
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WeRouter\\' => 9,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WeRouter\\' => 
        array (
            0 => __DIR__ . '/..' . '/alexisgt01/we-router/src',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6004ab9a0ff4b037f89f78951a7720a7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6004ab9a0ff4b037f89f78951a7720a7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
