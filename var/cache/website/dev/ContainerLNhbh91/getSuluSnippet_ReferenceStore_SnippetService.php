<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSnippet_ReferenceStore_SnippetService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_snippet.reference_store.snippet' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/ReferenceStore/ReferenceStoreInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/ReferenceStore/ReferenceStore.php';

        return $container->services['sulu_snippet.reference_store.snippet'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore();
    }
}
