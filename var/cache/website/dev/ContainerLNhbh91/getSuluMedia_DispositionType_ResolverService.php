<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluMedia_DispositionType_ResolverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_media.disposition_type.resolver' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\DispositionType\DispositionTypeResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Media/DispositionType/DispositionTypeResolverInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Media/DispositionType/DispositionTypeResolver.php';

        return $container->services['sulu_media.disposition_type.resolver'] = new \Sulu\Bundle\MediaBundle\Media\DispositionType\DispositionTypeResolver('attachment', [], []);
    }
}
