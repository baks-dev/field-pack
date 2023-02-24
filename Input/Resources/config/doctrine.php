<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Field\Pack\Input\Type\InputField;
use BaksDev\Field\Pack\Input\Type\InputFieldType;

use Symfony\Config\DoctrineConfig;

return static function(DoctrineConfig $doctrine) {
	$doctrine->dbal()->type(InputField::TYPE)->class(InputFieldType::class);
};