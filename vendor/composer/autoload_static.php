<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite14d116f43b7602ba58b7978a74317bf
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Minhazulmin\\Fscoder\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Minhazulmin\\Fscoder\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite14d116f43b7602ba58b7978a74317bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite14d116f43b7602ba58b7978a74317bf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite14d116f43b7602ba58b7978a74317bf::$classMap;

        }, null, ClassLoader::class);
    }
}
