<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit30a0959324098b63e72ba1a5a8b5c76f
{
    public static $files = array (
        '91ac96de25d42f0afb33fadff38620b1' => __DIR__ . '/../..' . '/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fagoc\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fagoc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/model',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit30a0959324098b63e72ba1a5a8b5c76f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit30a0959324098b63e72ba1a5a8b5c76f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}