#!/usr/bin/env php
<?php

require __DIR__ . '/vendor/autoload.php';

use App\Commands\HelloCommand;
use Symfony\Component\Console\Application;

$app = new Application();

$app->add(new HelloCommand());

$app->run();
