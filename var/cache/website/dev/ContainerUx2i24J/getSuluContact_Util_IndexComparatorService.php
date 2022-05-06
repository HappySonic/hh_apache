<?php

namespace ContainerUx2i24J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluContact_Util_IndexComparatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_contact.util.index_comparator' shared service.
     *
     * @return \Sulu\Bundle\ContactBundle\Util\IndexComparator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/Util/IndexComparatorInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/Util/IndexComparator.php';

        return $container->services['sulu_contact.util.index_comparator'] = new \Sulu\Bundle\ContactBundle\Util\IndexComparator();
    }
}
