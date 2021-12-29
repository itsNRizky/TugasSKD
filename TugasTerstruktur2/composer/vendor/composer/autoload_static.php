<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d968f938f0eec4c3fb96be408568267
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0d968f938f0eec4c3fb96be408568267::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0d968f938f0eec4c3fb96be408568267::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0d968f938f0eec4c3fb96be408568267::$classMap;

        }, null, ClassLoader::class);
    }
}
