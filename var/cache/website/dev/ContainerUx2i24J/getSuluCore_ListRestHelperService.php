<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluCore_ListRestHelperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_core.list_rest_helper' shared service.
     *
     * @return \Sulu\Component\Rest\ListBuilder\ListRestHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/ListBuilder/ListRestHelperInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/ListBuilder/ListRestHelper.php';

        return $container->services['sulu_core.list_rest_helper'] = new \Sulu\Component\Rest\ListBuilder\ListRestHelper(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
