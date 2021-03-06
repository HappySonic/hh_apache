<?php

namespace ContainerIwAkOJC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluAdmin_InfoCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_admin.info_command' shared service.
     *
     * @return \Sulu\Bundle\AdminBundle\Command\InfoCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Command/InfoCommand.php';

        $container->privates['sulu_admin.info_command'] = $instance = new \Sulu\Bundle\AdminBundle\Command\InfoCommand('2.4.2');

        $instance->setName('sulu:admin:info');

        return $instance;
    }
}
