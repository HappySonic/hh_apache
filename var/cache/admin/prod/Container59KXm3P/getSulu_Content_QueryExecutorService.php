<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSulu_Content_QueryExecutorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu.content.query_executor' shared service.
     *
     * @return \Sulu\Component\Content\Query\ContentQueryExecutor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/Query/ContentQueryExecutorInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Content/Query/ContentQueryExecutor.php';

        return $container->privates['sulu.content.query_executor'] = new \Sulu\Component\Content\Query\ContentQueryExecutor(($container->services['sulu.phpcr.session'] ?? $container->getSulu_Phpcr_SessionService()), ($container->services['sulu.content.mapper'] ?? $container->load('getSulu_Content_MapperService')), NULL);
    }
}
