<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Field\Pack\Phone\Choice\PhoneFieldChoice;

return static function (ContainerConfigurator $configurator) {
	
	$services = $configurator->services()
		->defaults()
		->autowire(true)
		->autoconfigure(true)
	;
	
	
	$namespace = 'BaksDev\Field\Pack\Phone';
	
	$services->load($namespace.'\Form\\', __DIR__.'/../../Form')
		//->exclude(__DIR__.'/../../Repository/**/*DTO.php')
	;
	
	$services->set(PhoneFieldChoice::class)
		->tag('baks.fields.choice')
	;
	
	


};

