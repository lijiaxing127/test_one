<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf09f716dab9fd8b4e1fd04255bf99d90
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cjc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cjc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/cjc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf09f716dab9fd8b4e1fd04255bf99d90::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf09f716dab9fd8b4e1fd04255bf99d90::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf09f716dab9fd8b4e1fd04255bf99d90::$classMap;

        }, null, ClassLoader::class);
    }
}
