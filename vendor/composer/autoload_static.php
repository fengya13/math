<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d13d5ac6d2e8d9a540f89f8f5eea43b
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zc\\Math\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zc\\Math\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d13d5ac6d2e8d9a540f89f8f5eea43b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d13d5ac6d2e8d9a540f89f8f5eea43b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5d13d5ac6d2e8d9a540f89f8f5eea43b::$classMap;

        }, null, ClassLoader::class);
    }
}
