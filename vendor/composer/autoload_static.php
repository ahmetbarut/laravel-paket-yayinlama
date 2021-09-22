<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit75238f2524450ebbd35cc69954590a3f
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'ahmetbarut\\PackageDevelopment\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ahmetbarut\\PackageDevelopment\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit75238f2524450ebbd35cc69954590a3f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit75238f2524450ebbd35cc69954590a3f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit75238f2524450ebbd35cc69954590a3f::$classMap;

        }, null, ClassLoader::class);
    }
}
