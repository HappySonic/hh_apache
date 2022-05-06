<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSulu_Repository_RouteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu.repository.route' shared service.
     *
     * @return \Sulu\Bundle\RouteBundle\Entity\RouteRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        if ($lazyLoad) {
            return $container->services['sulu.repository.route'] = $container->createProxy('RouteRepository_ee5eed9', function () use ($container) {
                return \RouteRepository_ee5eed9::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = self::do($container, false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Persistence/Repository/RepositoryInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Persistence/Repository/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/RouteBundle/Entity/RouteRepositoryInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/RouteBundle/Entity/RouteRepository.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/persistence/src/Persistence/Mapping/ClassMetadata.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ClassMetadataInfo.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ClassMetadata.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        return new \Sulu\Bundle\RouteBundle\Entity\RouteRepository($a, $a->getClassMetadata('Sulu\\Bundle\\RouteBundle\\Entity\\Route'));
    }
}
