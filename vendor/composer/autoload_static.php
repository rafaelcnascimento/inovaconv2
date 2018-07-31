<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b26d195ab5265df0ff8b09ae0965e06
{
    public static $classMap = array (
        'Db' => __DIR__ . '/../..' . '/src/classes/Db.php',
        'Noticia' => __DIR__ . '/../..' . '/src/classes/Noticia.php',
        'Usuario' => __DIR__ . '/../..' . '/src/classes/Usuario.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit7b26d195ab5265df0ff8b09ae0965e06::$classMap;

        }, null, ClassLoader::class);
    }
}
