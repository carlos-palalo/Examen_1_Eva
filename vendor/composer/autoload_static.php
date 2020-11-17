<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9f5e49605bb9a49dcd2e0065f77652e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SujalPatel\\IntToEnglish\\' => 24,
        ),
        'B' => 
        array (
            'Ballen\\Distical\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SujalPatel\\IntToEnglish\\' => 
        array (
            0 => __DIR__ . '/..' . '/sujalpatel/inttoenglish/src',
        ),
        'Ballen\\Distical\\' => 
        array (
            0 => __DIR__ . '/..' . '/ballen/distical/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc9f5e49605bb9a49dcd2e0065f77652e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc9f5e49605bb9a49dcd2e0065f77652e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc9f5e49605bb9a49dcd2e0065f77652e::$classMap;

        }, null, ClassLoader::class);
    }
}