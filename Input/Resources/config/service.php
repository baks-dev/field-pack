<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Field\Pack\Input\Choice\InputFieldChoice;

return static function (ContainerConfigurator $configurator) {
	
	$services = $configurator->services()
		->defaults()
		->autowire(true)
		->autoconfigure(true)
	;
	
	$services->set(InputFieldChoice::class)
		->tag('baks.fields.choice')
	;

};

