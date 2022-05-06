<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSulu_Repository_TrashItemService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu.repository.trash_item' shared service.
     *
     * @return \Sulu\Component\Persistence\Repository\ORM\EntityRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        if ($lazyLoad) {
            return $container->services['sulu.repository.trash_item'] = $container->createProxy('EntityRepository_9af69de', function () use ($container) {
                return \EntityRepository_9af69de::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = self::do($container, false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Persistence/Repository/RepositoryInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Persistence/Repository/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/persistence/src/Persistence/Mapping/ClassMetadata.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ClassMetadataInfo.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ClassMetadata.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        return new \Sulu\Component\Persistence\Repository\ORM\EntityRepository($a, $a->getClassMetadata('Sulu\\Bundle\\TrashBundle\\Domain\\Model\\TrashItem'));
    }
}
