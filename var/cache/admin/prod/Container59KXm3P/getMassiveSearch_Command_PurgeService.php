<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveSearch_Command_PurgeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'massive_search.command.purge' shared service.
     *
     * @return \Massive\Bundle\SearchBundle\Command\PurgeCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Command/PurgeCommand.php';

        $container->privates['massive_search.command.purge'] = $instance = new \Massive\Bundle\SearchBundle\Command\PurgeCommand(($container->services['massive_search.search_manager'] ?? $container->load('getMassiveSearch_SearchManagerService')));

        $instance->setName('massive:search:purge');

        return $instance;
    }
}
