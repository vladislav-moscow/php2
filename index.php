<?php



use Blog\package_name\example_Name;


spl_autoload_register(function ($class) {
    $directories = explode('\\', $class);

    $className = str_replace('_', DIRECTORY_SEPARATOR, end($directories));

    $file = sprintf('%s/%s.php', __DIR__, implode( DIRECTORY_SEPARATOR, array_merge($directories, [$className])));

    if (file_exists($file)) {
        require $file;
    }
});

echo new example_Name('vlad');