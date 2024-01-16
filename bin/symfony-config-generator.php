<?php

declare(strict_types=1);

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Output\ConsoleOutput;
use TomasVotruba\SymfonyConfigGenerator\DependencyInjection\ContainerFactory;

if (file_exists(__DIR__ . '/../../../../vendor/autoload.php')) {
    // A. dev repository
    require_once __DIR__ . '/../../../../vendor/autoload.php';
} else {
    // B. local repository
    require_once __DIR__ . '/../vendor/autoload.php';
}

$containerFactory = new ContainerFactory();
$application = $containerFactory->createApplication();

$exitCode = $application->run(new ArgvInput(), new ConsoleOutput());
exit($exitCode);
