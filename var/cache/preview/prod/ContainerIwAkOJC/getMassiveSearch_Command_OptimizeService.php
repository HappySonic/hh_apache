<?php

namespace ContainerIwAkOJC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveSearch_Command_OptimizeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'massive_search.command.optimize' shared service.
     *
     * @return \Massive\Bundle\SearchBundle\Command\OptimizeCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Command/OptimizeCommand.php';

        $container->privates['massive_search.command.optimize'] = $instance = new \Massive\Bundle\SearchBundle\Command\OptimizeCommand(($container->services['massive_search.adapter.zend_lucene'] ?? $container->load('getMassiveSearch_Adapter_ZendLuceneService')));

        $instance->setName('massive:search:optimize');

        return $instance;
    }
}
