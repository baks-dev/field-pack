<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Field\Pack\Checkbox\Choice\CheckboxFieldChoice;

return static function (ContainerConfigurator $configurator) {
	
	$services = $configurator->services()
		->defaults()
		->autowire(true)
		->autoconfigure(true)
	;

    $namespace = 'BaksDev\Field\Pack\Checkbox';

	$services->set(CheckboxFieldChoice::class)
		->tag('baks.fields.choice')
	;

    $services->load($namespace.'\Form\\', __DIR__.'/../../Form');
    $services->load($namespace.'\Twig\\', __DIR__.'/../../Twig');


};

