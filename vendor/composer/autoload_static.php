<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9304ebf4bf1eba52b056672cf3a0ab13
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zoo\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zoo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9304ebf4bf1eba52b056672cf3a0ab13::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9304ebf4bf1eba52b056672cf3a0ab13::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9304ebf4bf1eba52b056672cf3a0ab13::$classMap;

        }, null, ClassLoader::class);
    }
}
