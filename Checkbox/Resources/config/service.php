<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Field\Pack\Checkbox\Choice\CheckboxFieldChoice;

return static function (ContainerConfigurator $configurator) {
	
	$services = $configurator->services()
		->defaults()
		->autowire(true)
		->autoconfigure(true)
	;
	
	$services->set(CheckboxFieldChoice::class)
		->tag('baks.fields.choice')
	;

};

