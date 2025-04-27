<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Field\Pack\Checkbox\Type\CheckboxField;
use BaksDev\Field\Pack\Checkbox\Type\CheckboxFieldType;
use BaksDev\Field\Pack\Contact\Type\ContactField;
use BaksDev\Field\Pack\Contact\Type\ContactFieldType;
use BaksDev\Field\Pack\Inn\Type\InnField;
use BaksDev\Field\Pack\Inn\Type\InnFieldType;
use BaksDev\Field\Pack\Input\Type\InputField;
use BaksDev\Field\Pack\Input\Type\InputFieldType;
use BaksDev\Field\Pack\Integer\Type\IntegerField;
use BaksDev\Field\Pack\Integer\Type\IntegerFieldType;
use BaksDev\Field\Pack\Invoice\Type\InvoiceField;
use BaksDev\Field\Pack\Invoice\Type\InvoiceFieldType;
use BaksDev\Field\Pack\Kpp\Type\KppField;
use BaksDev\Field\Pack\Kpp\Type\KppFieldType;
use BaksDev\Field\Pack\Phone\Type\PhoneField;
use BaksDev\Field\Pack\Phone\Type\PhoneFieldType;
use BaksDev\Field\Pack\Textarea\Type\TextareaField;
use BaksDev\Field\Pack\Textarea\Type\TextareaFieldType;
use Symfony\Config\DoctrineConfig;

return static function(DoctrineConfig $doctrine) {

    $doctrine->dbal()->type(CheckboxField::TYPE)->class(CheckboxFieldType::class);

    $doctrine->dbal()->type(ContactField::TYPE)->class(ContactFieldType::class);

    $doctrine->dbal()->type(InputField::TYPE)->class(InputFieldType::class);

    $doctrine->dbal()->type(IntegerField::TYPE)->class(IntegerFieldType::class);

    $doctrine->dbal()->type(PhoneField::TYPE)->class(PhoneFieldType::class);

    $doctrine->dbal()->type(TextareaField::TYPE)->class(TextareaFieldType::class);

    $doctrine->dbal()->type(InnField::TYPE)->class(InnFieldType::class);

    $doctrine->dbal()->type(KppField::TYPE)->class(KppFieldType::class);

    $doctrine->dbal()->type(InvoiceField::TYPE)->class(InvoiceFieldType::class);

};
