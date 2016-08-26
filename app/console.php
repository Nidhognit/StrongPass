#!/usr/bin/env php
<?php

$dir = __DIR__ . '/../';
require $dir . 'vendor/autoload.php';
require $dir . 'src/Command/PasswordCreatorCommand.php';

$files = glob($dir . 'src/service/*.php');

foreach ($files as $file) {
    require($file);
}

use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new \src\Command\PasswordCreatorCommand());

$application->run();
