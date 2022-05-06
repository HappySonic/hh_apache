<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluRoute_Manager_RouteManagerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_route.manager.route_manager' shared service.
     *
     * @return \Sulu\Bundle\RouteBundle\Manager\RouteManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/RouteBundle/Manager/RouteManagerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/RouteBundle/Manager/RouteManager.php';

        return $container->privates['sulu_route.manager.route_manager'] = new \Sulu\Bundle\RouteBundle\Manager\RouteManager(($container->privates['sulu_route.chain_generator'] ?? $container->load('getSuluRoute_ChainGeneratorService')), ($container->privates['sulu_route.manager.conflict_resolver.auto_increment'] ?? $container->load('getSuluRoute_Manager_ConflictResolver_AutoIncrementService')), ($container->services['sulu.repository.route'] ?? $container->load('getSulu_Repository_RouteService')));
    }
}
