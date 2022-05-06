<?php

namespace ContainerIwAkOJC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluActivity_StoreActivitySubscriberService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_activity.store_activity_subscriber' shared service.
     *
     * @return \Sulu\Bundle\ActivityBundle\Application\Subscriber\StoreActivitySubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/ActivityBundle/Application/Subscriber/StoreActivitySubscriber.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/ActivityBundle/Domain/Repository/ActivityRepositoryInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/ActivityBundle/Infrastructure/Doctrine/Repository/ActivityRepository.php';

        return $container->privates['sulu_activity.store_activity_subscriber'] = new \Sulu\Bundle\ActivityBundle\Application\Subscriber\StoreActivitySubscriber(new \Sulu\Bundle\ActivityBundle\Infrastructure\Doctrine\Repository\ActivityRepository(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), false));
    }
}
