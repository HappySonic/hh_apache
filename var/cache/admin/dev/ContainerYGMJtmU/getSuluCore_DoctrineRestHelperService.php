<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluCore_DoctrineRestHelperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_core.doctrine_rest_helper' shared service.
     *
     * @return \Sulu\Component\Rest\DoctrineRestHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/RestHelperInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Persistence/RelationTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/RestHelper.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/DoctrineRestHelper.php';

        return $container->services['sulu_core.doctrine_rest_helper'] = new \Sulu\Component\Rest\DoctrineRestHelper(($container->services['sulu_core.list_rest_helper'] ?? $container->load('getSuluCore_ListRestHelperService')));
    }
}
