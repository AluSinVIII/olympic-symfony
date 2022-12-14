<?php

namespace ContainerC5qxYfL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KpvCfyBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kpvCfyB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kpvCfyB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'athleteRepository' => ['privates', 'App\\Repository\\AthleteRepository', 'getAthleteRepositoryService', true],
        ], [
            'athleteRepository' => 'App\\Repository\\AthleteRepository',
        ]);
    }
}
