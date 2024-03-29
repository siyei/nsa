<?php
if (!defined('PHP_VERSION_ID') || PHP_VERSION_ID < 50300)
    die('PHP ActiveRecord requires PHP 5.3 or higher');

require 'lib/Singleton.php';
require 'lib/Config.php';
require 'lib/Utils.php';
require 'lib/DateTimeInterface.php';
require 'lib/DateTime.php';
require 'lib/Model.php';
require 'lib/Table.php';
require 'lib/ConnectionManager.php';
require 'lib/Connection.php';
require 'lib/Serialization.php';
require 'lib/SQLBuilder.php';
require 'lib/Reflections.php';
require 'lib/Inflector.php';
require 'lib/CallBack.php';
require 'lib/Exceptions.php';
require 'lib/Cache.php';

spl_autoload_register('activerecord_autoload');

function activerecord_autoload($class_name)
{
    $path = ActiveRecord\Config::instance()->get_model_directory();
    $root = realpath(isset($path) ? $path : '.');

    if (($namespaces = ActiveRecord\get_namespaces($class_name))) {
        $class_name = array_pop($namespaces);
        $directories = array();

        foreach ($namespaces as $directory)
            $directories[] = $directory;

        $root .= DIRECTORY_SEPARATOR . implode($directories, DIRECTORY_SEPARATOR);
    }

    $file = "$root/$class_name.php";

    if (file_exists($file))
        require $file;
}
