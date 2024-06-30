<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Field\Pack\Contact\Type\ContactField;
use BaksDev\Field\Pack\Contact\Type\ContactFieldType;
use Symfony\Config\DoctrineConfig;

return static function(DoctrineConfig $doctrine) {
    $doctrine->dbal()->type(ContactField::TYPE)->class(ContactFieldType::class);
};
