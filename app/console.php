#!/usr/bin/env php
<?php

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../src/Command/PasswordCreatorCommand.php';

use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new \src\Command\PasswordCreatorCommand());

$application->run();
