<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Field\Pack\Integer\Choice\IntegerFieldChoice;

return static function(ContainerConfigurator $configurator) {

    $services = $configurator->services()
        ->defaults()
        ->autowire(true)
        ->autoconfigure(true);

    $NAMESPACE = 'BaksDev\Field\Pack\Integer\\';

    $MODULE = substr(__DIR__, 0, strpos(__DIR__, "Resources"));

    $services->load($NAMESPACE.'Form\\', $MODULE.'Form');

    $services->set(IntegerFieldChoice::class)
        ->tag('baks.fields.choice');

};

