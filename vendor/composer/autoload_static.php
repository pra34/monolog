<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit794da78cc48205258b44b4b0cb1e472a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 
            array (
                0 => __DIR__ . '/..' . '/psr/log',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit794da78cc48205258b44b4b0cb1e472a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit794da78cc48205258b44b4b0cb1e472a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit794da78cc48205258b44b4b0cb1e472a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}