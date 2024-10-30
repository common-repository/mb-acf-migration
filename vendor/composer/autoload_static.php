<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd8afe279ad0e2e2edff8b83197d779b7
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Riimu\\Kit\\PHPEncoder\\' => 21,
        ),
        'M' => 
        array (
            'MetaBox\\Support\\' => 16,
            'MetaBox\\ACF\\' => 12,
            'MBBParser\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Riimu\\Kit\\PHPEncoder\\' => 
        array (
            0 => __DIR__ . '/..' . '/riimu/kit-phpencoder/src',
        ),
        'MetaBox\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/meta-box/support',
        ),
        'MetaBox\\ACF\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'MBBParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/meta-box/mbb-parser/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd8afe279ad0e2e2edff8b83197d779b7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd8afe279ad0e2e2edff8b83197d779b7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd8afe279ad0e2e2edff8b83197d779b7::$classMap;

        }, null, ClassLoader::class);
    }
}
