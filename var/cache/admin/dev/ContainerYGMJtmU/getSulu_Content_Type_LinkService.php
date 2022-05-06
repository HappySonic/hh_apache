<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSulu_Content_Type_LinkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu.content.type.link' shared service.
     *
     * @return \Sulu\Component\Content\Types\Link
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/ContentTypeExportInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/SimpleContentType.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/Types/Link.php';

        return $container->services['sulu.content.type.link'] = new \Sulu\Component\Content\Types\Link(($container->privates['sulu_markup.link_tag.provider_pool'] ?? $container->getSuluMarkup_LinkTag_ProviderPoolService()));
    }
}
