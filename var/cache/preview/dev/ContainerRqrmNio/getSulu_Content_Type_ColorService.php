<?php

namespace ContainerRqrmNio;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSulu_Content_Type_ColorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu.content.type.color' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Content\Types\Color
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeExportInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/SimpleContentType.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Content/Types/Color.php';

        return $container->services['sulu.content.type.color'] = new \Sulu\Bundle\PageBundle\Content\Types\Color();
    }
}