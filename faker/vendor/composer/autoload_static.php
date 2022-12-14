<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb9215331e256a0c1bf79ac14c0142549
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb9215331e256a0c1bf79ac14c0142549::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb9215331e256a0c1bf79ac14c0142549::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb9215331e256a0c1bf79ac14c0142549::$classMap;

        }, null, ClassLoader::class);
    }
}
