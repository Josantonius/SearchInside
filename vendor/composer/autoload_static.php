<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd8cf6d7681a26fdb32ec528c5f9dd9e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SearchInside\\Core\\' => 18,
            'SearchInside\\Admin\\' => 19,
        ),
        'J' => 
        array (
            'Josantonius\\Json\\' => 17,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SearchInside\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
        'SearchInside\\Admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Admin',
        ),
        'Josantonius\\Json\\' => 
        array (
            0 => __DIR__ . '/..' . '/josantonius/json/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd8cf6d7681a26fdb32ec528c5f9dd9e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd8cf6d7681a26fdb32ec528c5f9dd9e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
