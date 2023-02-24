<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;


use BaksDev\Field\Pack\Textarea\Type\TextareaField;
use BaksDev\Field\Pack\Textarea\Type\TextareaFieldType;
use Symfony\Config\DoctrineConfig;

return static function(DoctrineConfig $doctrine) {
	$doctrine->dbal()->type(TextareaField::TYPE)->class(TextareaFieldType::class);
};