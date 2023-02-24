<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;


use BaksDev\Field\Pack\Checkbox\Type\CheckboxField;
use BaksDev\Field\Pack\Checkbox\Type\CheckboxFieldType;
use Symfony\Config\DoctrineConfig;

return static function(DoctrineConfig $doctrine) {
	$doctrine->dbal()->type(CheckboxField::TYPE)->class(CheckboxFieldType::class);
};