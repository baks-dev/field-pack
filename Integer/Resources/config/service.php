<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Field\Pack\Integer\Choice\IntegerFieldChoice;

return static function (ContainerConfigurator $configurator) {
	
	$services = $configurator->services()
		->defaults()
		->autowire(true)
		->autoconfigure(true)
	;
	
	$services->set(IntegerFieldChoice::class)
		->tag('baks.fields.choice')
	;

};

