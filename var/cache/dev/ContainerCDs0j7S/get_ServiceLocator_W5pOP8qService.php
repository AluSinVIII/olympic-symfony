<?php

namespace ContainerCDs0j7S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_W5pOP8qService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.W5pOP8q' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.W5pOP8q'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'category' => ['privates', '.errored..service_locator.W5pOP8q.App\\Entity\\Category', NULL, 'Cannot autowire service ".service_locator.W5pOP8q": it references class "App\\Entity\\Category" but no such service exists.'],
            'sportRepository' => ['privates', 'App\\Repository\\SportRepository', 'getSportRepositoryService', true],
        ], [
            'category' => 'App\\Entity\\Category',
            'sportRepository' => 'App\\Repository\\SportRepository',
        ]);
    }
}