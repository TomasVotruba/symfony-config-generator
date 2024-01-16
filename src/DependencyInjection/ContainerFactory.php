<?php

declare(strict_types=1);

namespace TomasVotruba\SymfonyConfigGenerator\DependencyInjection;

use Symfony\Component\Console\Application;
use TomasVotruba\SymfonyConfigGenerator\Console\Command\GenerateCommand;

final class ContainerFactory
{
    public function createApplication(): Application
    {
        $application = new Application();

        $generateCommand = new GenerateCommand();
        $application->add($generateCommand);

        $application->setDefaultCommand($generateCommand->getName(), true);

        // remove basic command to make output clear
        $application->get('help')
            ->setHidden(true);
        $application->get('completion')
            ->setHidden(true);

        return $application;
    }
}
