<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Field\Pack\Textarea\Choice\TextareaFieldChoice;

return static function (ContainerConfigurator $configurator) {
	
	$services = $configurator->services()
		->defaults()
		->autowire(true)
		->autoconfigure(true)
	;
	
	$services->set(TextareaFieldChoice::class)
		->tag('baks.fields.choice')
	;

};

