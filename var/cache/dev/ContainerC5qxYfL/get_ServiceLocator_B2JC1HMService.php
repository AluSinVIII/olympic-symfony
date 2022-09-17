<?php

namespace ContainerC5qxYfL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B2JC1HMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.B2JC1HM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.B2JC1HM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'athlete' => ['privates', '.errored..service_locator.B2JC1HM.App\\Entity\\Athlete', NULL, 'Cannot autowire service ".service_locator.B2JC1HM": it references class "App\\Entity\\Athlete" but no such service exists.'],
            'athleteRepository' => ['privates', 'App\\Repository\\AthleteRepository', 'getAthleteRepositoryService', true],
        ], [
            'athlete' => 'App\\Entity\\Athlete',
            'athleteRepository' => 'App\\Repository\\AthleteRepository',
        ]);
    }
}
