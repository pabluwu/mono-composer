<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitccddbafb06452f668fca8be8016e7d2d
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitccddbafb06452f668fca8be8016e7d2d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitccddbafb06452f668fca8be8016e7d2d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitccddbafb06452f668fca8be8016e7d2d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
