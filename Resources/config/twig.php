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

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Auth\Email\Type\Email\AccountEmail;
use BaksDev\Field\Pack\BaksDevFieldPackBundle;
use BaksDev\Field\Pack\Brand\Type\BrandField;
use BaksDev\Field\Pack\Checkbox\Type\CheckboxField;
use BaksDev\Field\Pack\Contact\Type\ContactField;
use BaksDev\Field\Pack\Inn\Type\InnField;
use BaksDev\Field\Pack\Input\Type\InputField;
use BaksDev\Field\Pack\Integer\Type\IntegerField;
use BaksDev\Field\Pack\Invoice\Type\InvoiceField;
use BaksDev\Field\Pack\Kpp\Type\KppField;
use BaksDev\Field\Pack\Model\Type\ModelField;
use BaksDev\Field\Pack\Okpo\Type\OkpoField;
use BaksDev\Field\Pack\Organization\Type\OrganizationField;
use BaksDev\Field\Pack\Orgn\Type\OrgnField;
use BaksDev\Field\Pack\Phone\Type\PhoneField;
use BaksDev\Field\Pack\Schedule\Type\ScheduleField;
use BaksDev\Field\Pack\Textarea\Type\TextareaField;
use Symfony\Config\TwigConfig;

return static function(TwigConfig $twig) {

    $PATH = BaksDevFieldPackBundle::PATH;

    $choices = [
        'Email' => AccountEmail::TYPE,
        'Checkbox' => CheckboxField::TYPE,
        'Contact' => ContactField::TYPE,
        'Input' => InputField::TYPE,
        'Integer' => IntegerField::TYPE,
        'Phone' => PhoneField::TYPE,
        'Textarea' => TextareaField::TYPE,

        'Inn' => InnField::TYPE,
        'Kpp' => KppField::TYPE,
        'Okpo' => OkpoField::TYPE,
        'Orgn' => OrgnField::TYPE,

        'Invoice' => InvoiceField::TYPE,
        'Schedule' => ScheduleField::TYPE,
        'Organization' => OrganizationField::TYPE,

        'Brand' => BrandField::TYPE,
        'Model' => ModelField::TYPE,
    ];

    foreach($choices as $key => $type)
    {
        $twig->path(
            $PATH.implode(DIRECTORY_SEPARATOR, [$key, 'Resources', 'view', '']),
            $type
        );
    }
};