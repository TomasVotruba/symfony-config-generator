<?php

declare(strict_types=1);

namespace TomasVotruba\SymfonyConfigGenerator\Enum;

final class SymfonyClass
{
    /**
     * @var string
     */
    public const CONTAINER_BUILDER = 'Symfony\Component\DependencyInjection\ContainerBuilder';

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