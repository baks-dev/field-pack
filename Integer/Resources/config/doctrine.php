<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;


use BaksDev\Field\Pack\Integer\Type\IntegerField;
use BaksDev\Field\Pack\Integer\Type\IntegerFieldType;
use Symfony\Config\DoctrineConfig;

return static function(DoctrineConfig $doctrine) {
	$doctrine->dbal()->type(IntegerField::TYPE)->class(IntegerFieldType::class);
};