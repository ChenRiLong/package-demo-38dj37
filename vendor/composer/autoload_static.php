<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd6e3259530b65a579ba2ec81cc416f2
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Chuhai\\Packagedemo\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Chuhai\\Packagedemo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd6e3259530b65a579ba2ec81cc416f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd6e3259530b65a579ba2ec81cc416f2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd6e3259530b65a579ba2ec81cc416f2::$classMap;

        }, null, ClassLoader::class);
    }
}
