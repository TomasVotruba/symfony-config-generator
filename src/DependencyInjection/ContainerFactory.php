<?php

declare(strict_types=1);

namespace TomasVotruba\SymfonyConfigGenerator\DependencyInjection;

use Illuminate\Container\Container;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Style\SymfonyStyle;
use TomasVotruba\SymfonyConfigGenerator\Console\Command\GenerateCommand;

final class ContainerFactory
{
    /**
     * @api used in bin and tests
     */
    public function create(): Container
    {
        $container = new Container();

        // console
        $container->singleton(
            SymfonyStyle::class,
            static fn (): SymfonyStyle => new SymfonyStyle(new ArrayInput([]), new ConsoleOutput())
        );

        $container->singleton(Application::class, function (Container $container): Application {
            $application = new Application();

            $generateCommand = $container->make(GenerateCommand::class);
            $application->add($generateCommand);

            $application->setDefaultCommand($generateCommand->getName(), true);

            // remove basic command to make output clear
            $application->get('help')
                ->setHidden(true);
            $application->get('completion')
                ->setHidden(true);

            return $application;
        });

        return $container;
    }
}
