<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRepositoryInitCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.Doctrine\Bundle\PHPCRBundle\Command\RepositoryInitCommand' shared service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Command\RepositoryInitCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/phpcr-bundle/src/Command/RepositoryInitCommand.php';

        $container->services['console.command.public_alias.Doctrine\\Bundle\\PHPCRBundle\\Command\\RepositoryInitCommand'] = $instance = new \Doctrine\Bundle\PHPCRBundle\Command\RepositoryInitCommand();

        $instance->setContainer($container);

        return $instance;
    }
}
