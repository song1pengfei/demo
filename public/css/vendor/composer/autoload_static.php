<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit03a1a89e9bfb04d3aa2ea67788626dee
{
    public static $files = array (
        '841780ea2e1d6545ea3a253239d59c05' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'z' => 
        array (
            'zgldh\\QiniuStorage\\' => 19,
        ),
        'Q' => 
        array (
            'Qiniu\\' => 6,
        ),
        'L' => 
        array (
            'League\\Flysystem\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'zgldh\\QiniuStorage\\' => 
        array (
            0 => __DIR__ . '/..' . '/zgldh/qiniu-laravel-storage/src',
        ),
        'Qiniu\\' => 
        array (
            0 => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu',
        ),
        'League\\Flysystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit03a1a89e9bfb04d3aa2ea67788626dee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit03a1a89e9bfb04d3aa2ea67788626dee::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
