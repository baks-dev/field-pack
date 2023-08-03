<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Field\Pack\Input\Choice\InputFieldChoice;

return static function (ContainerConfigurator $configurator) {
	
	$services = $configurator->services()
		->defaults()
		->autowire(true)
		->autoconfigure(true)
	;

    $NAMESPACE = 'BaksDev\Field\Pack\Input\\';

    $MODULE = substr(__DIR__, 0, strpos(__DIR__, "Resources"));

    $services->load($NAMESPACE.'Twig\\', $MODULE.'Twig');
	
	$services->set(InputFieldChoice::class)
		->tag('baks.fields.choice')
	;

};

