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
use Symfony\Config\TwigConfig;

return static function (TwigConfig $twig) {

    $twig->path(
        BaksDevFieldPackBundle::PATH.implode(DIRECTORY_SEPARATOR, ['Checkbox', 'Resources', 'view', '']), // .'Checkbox/Resources/view',
        'field-pack-checkbox'
    );

    $twig->path(
        BaksDevFieldPackBundle::PATH.implode(DIRECTORY_SEPARATOR, ['Contact', 'Resources', 'view', '']), // .'Contact/Resources/view',
        'field-pack-contact'
    );

    $twig->path(
        BaksDevFieldPackBundle::PATH.implode(DIRECTORY_SEPARATOR, ['Email', 'Resources', 'view', '']), // .'Email/Resources/view',
        'field-pack-email'
    );

    $twig->path(
        BaksDevFieldPackBundle::PATH.implode(DIRECTORY_SEPARATOR, ['Input', 'Resources', 'view', '']), // .'Input/Resources/view',
        'field-pack-input'
    );

    $twig->path(
        BaksDevFieldPackBundle::PATH.implode(DIRECTORY_SEPARATOR, ['Integer', 'Resources', 'view', '']), // .'Integer/Resources/view',
        'field-pack-integer'
    );

    $twig->path(
        BaksDevFieldPackBundle::PATH.implode(DIRECTORY_SEPARATOR, ['Phone', 'Resources', 'view', '']), // .'Phone/Resources/view',
        'field-pack-phone'
    );

    $twig->path(
        BaksDevFieldPackBundle::PATH.implode(DIRECTORY_SEPARATOR, ['Textarea', 'Resources', 'view', '']), // .'Textarea/Resources/view',
        'field-pack-textarea'
    );
};
