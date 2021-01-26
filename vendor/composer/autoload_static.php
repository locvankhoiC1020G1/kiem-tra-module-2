<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf127221d9edadef535854b7f74991df2
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf127221d9edadef535854b7f74991df2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf127221d9edadef535854b7f74991df2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
