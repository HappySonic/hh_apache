<?php

namespace ContainerRqrmNio;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNodeTypeRegisterCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.Doctrine\Bundle\PHPCRBundle\Command\NodeTypeRegisterCommand' shared service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Command\NodeTypeRegisterCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/phpcr/phpcr-utils/src/PHPCR/Util/Console/Command/BaseCommand.php';
        include_once \dirname(__DIR__, 5).'/vendor/phpcr/phpcr-utils/src/PHPCR/Util/Console/Command/NodeTypeRegisterCommand.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/phpcr-bundle/src/Command/NodeTypeRegisterCommand.php';

        return $container->services['console.command.public_alias.Doctrine\\Bundle\\PHPCRBundle\\Command\\NodeTypeRegisterCommand'] = new \Doctrine\Bundle\PHPCRBundle\Command\NodeTypeRegisterCommand();
    }
}
