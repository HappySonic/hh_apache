<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HspzwsTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HspzwsT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HspzwsT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'structure' => ['privates', '.errored..service_locator.HspzwsT.Sulu\\Component\\Content\\Compat\\StructureInterface', NULL, 'Cannot autowire service ".service_locator.HspzwsT": it references interface "Sulu\\Component\\Content\\Compat\\StructureInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'structure' => 'Sulu\\Component\\Content\\Compat\\StructureInterface',
        ]);
    }
}
