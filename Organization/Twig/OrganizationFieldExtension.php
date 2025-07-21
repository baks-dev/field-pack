<?php
/*
 *  Copyright 2023.  Baks.dev <admin@baks.dev>
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
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 *  THE SOFTWARE.
 *
 *
 */

namespace BaksDev\Field\Pack\Organization\Twig;

use BaksDev\Field\Pack\Organization\Type\OrganizationField;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

final class OrganizationFieldExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction(OrganizationField::TYPE, [$this, 'call'], ['needs_environment' => true, 'is_safe' => ['html']]),

            new TwigFunction(OrganizationField::TYPE.'_render', [$this, 'render'], ['needs_environment' => true, 'is_safe' => ['html']]),
            new TwigFunction('_render', [$this, 'render'], ['needs_environment' => true, 'is_safe' => ['html']]),

            new TwigFunction(OrganizationField::TYPE.'_template', [$this, 'template'], ['needs_environment' => true, 'is_safe' => ['html']]),
            new TwigFunction('_template', [$this, 'template'], ['needs_environment' => true, 'is_safe' => ['html']]),
        ];
    }

    public function call(Environment $twig, string $value, string $type, ?string $label = null): string
    {
        try
        {
            return $twig->render('@Template/field-pack/'.OrganizationField::TYPE.'/content.html.twig', ['value' => $value, 'label' => $label]);

        }
        catch(LoaderError $loaderError)
        {
            return $twig->render('@'.OrganizationField::TYPE.'/content.html.twig', ['value' => $value, 'label' => $label]);
        }
    }

    public function render(Environment $twig, string $value): string
    {
        try
        {
            return $twig->render('@Template/field-pack/'.OrganizationField::TYPE.'/render.html.twig', ['value' => $value]);
        }
        catch(LoaderError $loaderError)
        {
            return $twig->render('@'.OrganizationField::TYPE.'/render.html.twig', ['value' => $value]);
        }
    }

    public function template(Environment $twig, ?string $value): ?string
    {
        if($value)
        {
            try
            {
                return $twig->render('@Template/field-pack/'.OrganizationField::TYPE.'/template.html.twig', ['value' => $value]);
            }
            catch(LoaderError $loaderError)
            {
                return $twig->render('@'.OrganizationField::TYPE.'/template.html.twig', ['value' => $value]);
            }
        }

        return null;

    }
}
