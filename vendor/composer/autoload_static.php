<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaee7a58df879ab528370af03ca36620a
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaee7a58df879ab528370af03ca36620a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaee7a58df879ab528370af03ca36620a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
