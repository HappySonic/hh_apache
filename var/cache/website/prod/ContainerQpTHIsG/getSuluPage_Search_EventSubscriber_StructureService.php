<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Search_EventSubscriber_StructureService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_page.search.event_subscriber.structure' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Search\EventSubscriber\StructureSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Search/EventSubscriber/StructureSubscriber.php';

        return $container->privates['sulu_page.search.event_subscriber.structure'] = new \Sulu\Bundle\PageBundle\Search\EventSubscriber\StructureSubscriber(($container->services['massive_search.search_manager'] ?? $container->load('getMassiveSearch_SearchManagerService')));
    }
}
