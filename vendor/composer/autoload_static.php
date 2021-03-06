<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7eda83042e5f0ef9a73d38697685244d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7eda83042e5f0ef9a73d38697685244d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7eda83042e5f0ef9a73d38697685244d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7eda83042e5f0ef9a73d38697685244d::$classMap;

        }, null, ClassLoader::class);
    }
}
