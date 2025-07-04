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
use Symfony\Config\FrameworkConfig;

return static function(FrameworkConfig $config) {

    $PATH = BaksDevFieldPackBundle::PATH;

    $config
        ->translator()
        ->paths([
            $PATH.implode(DIRECTORY_SEPARATOR, ['Checkbox', 'Resources', 'translations', '']),
            $PATH.implode(DIRECTORY_SEPARATOR, ['Contact', 'Resources', 'translations', '']),
            $PATH.implode(DIRECTORY_SEPARATOR, ['Email', 'Resources', 'translations', '']),
            $PATH.implode(DIRECTORY_SEPARATOR, ['Input', 'Resources', 'translations', '']),
            $PATH.implode(DIRECTORY_SEPARATOR, ['Integer', 'Resources', 'translations', '']),
            $PATH.implode(DIRECTORY_SEPARATOR, ['Phone', 'Resources', 'translations', '']),
            $PATH.implode(DIRECTORY_SEPARATOR, ['Textarea', 'Resources', 'translations', '']),
            $PATH.implode(DIRECTORY_SEPARATOR, ['Inn', 'Resources', 'translations', '']),
            $PATH.implode(DIRECTORY_SEPARATOR, ['Kpp', 'Resources', 'translations', '']),
            $PATH.implode(DIRECTORY_SEPARATOR, ['Okpo', 'Resources', 'translations', '']),
            $PATH.implode(DIRECTORY_SEPARATOR, ['Orgn', 'Resources', 'translations', '']),
            $PATH.implode(DIRECTORY_SEPARATOR, ['Invoice', 'Resources', 'translations', '']),
        ]);


};