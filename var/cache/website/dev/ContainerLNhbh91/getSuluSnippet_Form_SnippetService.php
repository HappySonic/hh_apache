<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSnippet_Form_SnippetService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_snippet.form.snippet' shared service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Form\SnippetType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/Form/Type/AbstractStructureBehaviorType.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/SnippetBundle/Form/SnippetType.php';

        return $container->privates['sulu_snippet.form.snippet'] = new \Sulu\Bundle\SnippetBundle\Form\SnippetType();
    }
}
