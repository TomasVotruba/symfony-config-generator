<?php

declare(strict_types=1);

namespace TomasVotruba\SymfonyConfigGenerator\Enum;

final class SymfonyClass
{
    /**
     * @var string
     */
    public const SENTRY_EXTENSION = 'Symfony\Bundle\SentryBundle\DependencyInjection\SentryExtension';

    /**
     * @var string
     */
    public const DOCTRINE_MIGRATIONS_EXTENSION = 'Doctrine\Bundle\MigrationsBundle\DependencyInjection\MigrationsExtension';

    /**
     * @var string
     */
    public const FRAMEWORK_EXTENSION = 'Symfony\Bundle\FrameworkBundle\DependencyInjection\FrameworkExtension';

    /**
     * @var string
     */
    public const MONOLOG_EXTENSION = 'Symfony\Bundle\MonologBundle\DependencyInjection\MonologExtension';

    /**
     * @var string
     */
    public const SECURITY_EXTENSION = 'Symfony\Bundle\SecurityBundle\DependencyInjection\SecurityExtension';

    /**
     * @var string
     */
    public const TWIG_EXTENSION = 'Symfony\Bundle\TwigBundle\DependencyInjection\TwigExtension';

    /**
     * @var string
     */
    public const DOCTRINE_EXTENSION = 'Doctrine\Bundle\DoctrineBundle\DependencyInjection\DoctrineExtension';
}
