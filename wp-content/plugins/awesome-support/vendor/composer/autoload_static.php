<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaabb04c5ff5c81c3c38fa09a644af677
{
    public static $files = array (
        'bee91f6e081cee6ae314324bd77cdd19' => __DIR__ . '/..' . '/ericmann/wp-session-manager/includes/deprecated.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPAS_API\\' => 9,
        ),
        'E' => 
        array (
            'EAMann\\Sessionz\\' => 16,
        ),
        'D' => 
        array (
            'Defuse\\Crypto\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPAS_API\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/rest-api/includes',
        ),
        'EAMann\\Sessionz\\' => 
        array (
            0 => __DIR__ . '/..' . '/ericmann/sessionz/php',
        ),
        'Defuse\\Crypto\\' => 
        array (
            0 => __DIR__ . '/..' . '/defuse/php-encryption/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'EAMann\\WPSession\\CacheHandler' => __DIR__ . '/..' . '/ericmann/wp-session-manager/includes/CacheHandler.php',
        'EAMann\\WPSession\\DatabaseHandler' => __DIR__ . '/..' . '/ericmann/wp-session-manager/includes/DatabaseHandler.php',
        'EAMann\\WPSession\\Objects\\Option' => __DIR__ . '/..' . '/ericmann/wp-session-manager/includes/Option.php',
        'EAMann\\WPSession\\OptionsHandler' => __DIR__ . '/..' . '/ericmann/wp-session-manager/includes/OptionsHandler.php',
        'EAMann\\WPSession\\SessionHandler' => __DIR__ . '/..' . '/ericmann/wp-session-manager/includes/SessionHandler.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaabb04c5ff5c81c3c38fa09a644af677::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaabb04c5ff5c81c3c38fa09a644af677::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaabb04c5ff5c81c3c38fa09a644af677::$classMap;

        }, null, ClassLoader::class);
    }
}