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
use BaksDev\Field\Pack\Input\Choice\InputFieldChoice;
use BaksDev\Field\Pack\Integer\Choice\IntegerFieldChoice;
use BaksDev\Field\Pack\Phone\Choice\PhoneFieldChoice;
use BaksDev\Field\Pack\Textarea\Choice\TextareaFieldChoice;

return static function(ContainerConfigurator $configurator) {

    $services = $configurator->services()
        ->defaults()
        ->autowire(true)
        ->autoconfigure(true);

    $NAMESPACE = BaksDevFieldPackBundle::NAMESPACE;
    $PATH = BaksDevFieldPackBundle::PATH;


    $services->load($NAMESPACE.'Checkbox\Form\\', $PATH.implode(DIRECTORY_SEPARATOR, ['Checkbox', 'Form'])); //  'Checkbox/Form');
    $services->load($NAMESPACE.'Checkbox\Twig\\', $PATH.implode(DIRECTORY_SEPARATOR, ['Checkbox', 'Twig'])); //  .'Checkbox/Twig');
    $services->set(CheckboxFieldChoice::class)
        ->tag('baks.fields.choice');


    $services->load($NAMESPACE.'Email\Form\\', $PATH.implode(DIRECTORY_SEPARATOR, ['Email', 'Form'])); //  .'Email/Form');
    $services->load($NAMESPACE.'Email\Twig\\', $PATH.implode(DIRECTORY_SEPARATOR, ['Email', 'Twig'])); //  .'Email/Twig');
    $services->set(EmailFieldChoice::class)
        ->tag('baks.fields.choice');


    $services->load($NAMESPACE.'Input\Form\\', $PATH.implode(DIRECTORY_SEPARATOR, ['Input', 'Form'])); //  .'Input/Form');
    $services->load($NAMESPACE.'Input\Twig\\', $PATH.implode(DIRECTORY_SEPARATOR, ['Input', 'Twig'])); //  .'Input/Twig');
    $services->set(InputFieldChoice::class)
        ->tag('baks.fields.choice');


    $services->load($NAMESPACE.'Contact\Form\\', $PATH.implode(DIRECTORY_SEPARATOR, ['Contact', 'Form'])); //  .'Contact/Form');
    $services->load($NAMESPACE.'Contact\Twig\\', $PATH.implode(DIRECTORY_SEPARATOR, ['Contact', 'Twig'])); //  .'Contact/Twig');
    $services->set(ContactFieldChoice::class)
        ->tag('baks.fields.choice');

    $services->load($NAMESPACE.'Integer\Form\\', $PATH.implode(DIRECTORY_SEPARATOR, ['Integer', 'Form'])); //  .'Integer/Form');
    $services->load($NAMESPACE.'Integer\Twig\\', $PATH.implode(DIRECTORY_SEPARATOR, ['Integer', 'Twig'])); //  .'Integer/Twig');
    $services->set(IntegerFieldChoice::class)
        ->tag('baks.fields.choice');


    $services->load($NAMESPACE.'Phone\Form\\', $PATH.implode(DIRECTORY_SEPARATOR, ['Phone', 'Form'])); //  .'Phone/Form');
    $services->load($NAMESPACE.'Phone\Twig\\', $PATH.implode(DIRECTORY_SEPARATOR, ['Phone', 'Twig'])); //  .'Phone/Twig');
    $services->set(PhoneFieldChoice::class)
        ->tag('baks.fields.choice');

    $services->load($NAMESPACE.'Textarea\Form\\', $PATH.implode(DIRECTORY_SEPARATOR, ['Textarea', 'Form'])); //  .'Textarea/Form');
    $services->load($NAMESPACE.'Textarea\Twig\\', $PATH.implode(DIRECTORY_SEPARATOR, ['Textarea', 'Twig'])); //  .'Textarea/Twig');
    $services->set(TextareaFieldChoice::class)
        ->tag('baks.fields.choice');


};
