<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Search_EventSubscriber_BlameTimestampService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_page.search.event_subscriber.blame_timestamp' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Search\EventSubscriber\BlameTimestampSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Search/EventSubscriber/BlameTimestampSubscriber.php';

        return $container->privates['sulu_page.search.event_subscriber.blame_timestamp'] = new \Sulu\Bundle\PageBundle\Search\EventSubscriber\BlameTimestampSubscriber(($container->privates['sulu_search.search.factory'] ?? ($container->privates['sulu_search.search.factory'] = new \Sulu\Bundle\SearchBundle\Search\Factory())), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
