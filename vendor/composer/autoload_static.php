<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf7e2fa29d5abd69e056895e463488e1
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf7e2fa29d5abd69e056895e463488e1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf7e2fa29d5abd69e056895e463488e1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcf7e2fa29d5abd69e056895e463488e1::$classMap;

        }, null, ClassLoader::class);
    }
}
