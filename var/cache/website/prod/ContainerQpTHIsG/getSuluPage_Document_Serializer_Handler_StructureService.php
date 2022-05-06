<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Document_Serializer_Handler_StructureService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_page.document.serializer.handler.structure' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Serializer\Handler\StructureHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/Handler/SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Serializer/Handler/StructureHandler.php';

        return $container->privates['sulu_page.document.serializer.handler.structure'] = new \Sulu\Bundle\PageBundle\Serializer\Handler\StructureHandler();
    }
}
