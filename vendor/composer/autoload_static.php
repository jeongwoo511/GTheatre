<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7507812e021922e6c1e18047b1a0d97a
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'H' => 
        array (
            'Http\\' => 5,
        ),
        'G' => 
        array (
            'GTheatre\\' => 9,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'A' => 
        array (
            'Auryn\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/patricklouys/http/src',
        ),
        'GTheatre\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'Auryn\\' => 
        array (
            0 => __DIR__ . '/..' . '/rdlowrey/auryn/lib',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'P' => 
        array (
            'PhpConsole' => 
            array (
                0 => __DIR__ . '/..' . '/php-console/php-console/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7507812e021922e6c1e18047b1a0d97a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7507812e021922e6c1e18047b1a0d97a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7507812e021922e6c1e18047b1a0d97a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
