<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Controller\IndexController;
use App\HystrixAppBundle\Contracts\RepositoryInterface;
use App\HystrixAppBundle\Repository\Repository;

return function (ContainerConfigurator $configurator) {
    $configurator->parameters()
        ->set('app.theme', '%env(APP_THEME)%');

    $services = $configurator->services();

    $services->defaults()
        ->autowire(true)
        ->autoconfigure(true);

    $services->set(Repository::class);

    $services->alias(RepositoryInterface::class,Repository::class);

    $services->load('App\\', '../src/*')
        ->exclude('../src/{DependencyInjection,Entity,Tests,Kernel.php}');
};