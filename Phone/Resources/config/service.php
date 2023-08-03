<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Field\Pack\Phone\Choice\PhoneFieldChoice;

return static function(ContainerConfigurator $configurator) {

    $services = $configurator->services()
        ->defaults()
        ->autowire(true)
        ->autoconfigure(true);


    $NAMESPACE = 'BaksDev\Field\Pack\Phone\\';

    $MODULE = substr(__DIR__, 0, strpos(__DIR__, "Resources"));

    $services->load($NAMESPACE.'Form\\', $MODULE.'Form');

    $services->load($NAMESPACE.'Twig\\', $MODULE.'Twig');

    $services->set(PhoneFieldChoice::class)
        ->tag('baks.fields.choice');

};

