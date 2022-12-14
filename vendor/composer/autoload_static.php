<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit772aa56d5ca8e055cfba25a4f32edb8d
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rsgrinko\\Cache\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rsgrinko\\Cache\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit772aa56d5ca8e055cfba25a4f32edb8d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit772aa56d5ca8e055cfba25a4f32edb8d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit772aa56d5ca8e055cfba25a4f32edb8d::$classMap;

        }, null, ClassLoader::class);
    }
}
