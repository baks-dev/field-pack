<?php
/*
 *  Copyright 2024.  Baks.dev <admin@baks.dev>
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is furnished
 *  to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NON INFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 *  THE SOFTWARE.
 */

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Field\Pack\BaksDevFieldPackBundle;
use BaksDev\Field\Pack\Checkbox\Choice\CheckboxFieldChoice;
use BaksDev\Field\Pack\Contact\Choice\ContactFieldChoice;
use BaksDev\Field\Pack\Email\Choice\EmailFieldChoice;
use BaksDev\Field\Pack\Inn\Choice\InnFieldChoice;
use BaksDev\Field\Pack\Input\Choice\InputFieldChoice;
use BaksDev\Field\Pack\Integer\Choice\IntegerFieldChoice;
use BaksDev\Field\Pack\Invoice\Choice\InvoiceFieldChoice;
use BaksDev\Field\Pack\Kpp\Choice\KppFieldChoice;
use BaksDev\Field\Pack\Okpo\Choice\OkpoFieldChoice;
use BaksDev\Field\Pack\Orgn\Choice\OrgnFieldChoice;
use BaksDev\Field\Pack\Phone\Choice\PhoneFieldChoice;
use BaksDev\Field\Pack\Textarea\Choice\TextareaFieldChoice;

return static function(ContainerConfigurator $configurator) {

    $services = $configurator
        ->services()
        ->defaults()
        ->autowire(true)
        ->autoconfigure(true);

    $NAMESPACE = BaksDevFieldPackBundle::NAMESPACE;
    $PATH = BaksDevFieldPackBundle::PATH;

    $choices = [
        'Email' => EmailFieldChoice::class,
        'Checkbox' => CheckboxFieldChoice::class,
        'Input' => InputFieldChoice::class,
        'Contact' => ContactFieldChoice::class,
        'Integer' => IntegerFieldChoice::class,
        'Phone' => PhoneFieldChoice::class,
        'Textarea' => TextareaFieldChoice::class,

        'Inn' => InnFieldChoice::class,
        'Kpp' => KppFieldChoice::class,
        'Okpo' => OkpoFieldChoice::class,
        'Orgn' => OrgnFieldChoice::class,
        'Invoice' => InvoiceFieldChoice::class,
    ];

    foreach($choices as $key => $class)
    {
        $services->load($NAMESPACE.$key.'\Form\\', $PATH.implode(DIRECTORY_SEPARATOR, [$key, 'Form'])); //  'Checkbox/Form');
        $services->load($NAMESPACE.$key.'\Twig\\', $PATH.implode(DIRECTORY_SEPARATOR, [$key, 'Twig'])); //  .'Checkbox/Twig');
        $services->set($class)->tag('baks.fields.choice');
    }
};
