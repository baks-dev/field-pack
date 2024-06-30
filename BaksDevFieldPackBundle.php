<?php
/*
 * This file is part of the FreshCentrifugoBundle.
 *
 * (c) Artem Henvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BaksDev\Field\Pack;

use BaksDev\Field\Pack\Checkbox\Choice\CheckboxFieldChoice;
use BaksDev\Field\Pack\Contact\Choice\ContactFieldChoice;
use BaksDev\Field\Pack\Email\Choice\EmailFieldChoice;
use BaksDev\Field\Pack\Input\Choice\InputFieldChoice;
use BaksDev\Field\Pack\Integer\Choice\IntegerFieldChoice;
use BaksDev\Field\Pack\Phone\Choice\PhoneFieldChoice;
use BaksDev\Field\Pack\Textarea\Choice\TextareaFieldChoice;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class BaksDevFieldPackBundle extends AbstractBundle
{
    public const NAMESPACE = __NAMESPACE__.'\\';

    public const PATH = __DIR__.DIRECTORY_SEPARATOR;

    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $services = $container->services()
            ->defaults()
            ->autowire()
            ->autoconfigure();

        $services->load(self::NAMESPACE.'Checkbox\Form\\', self::PATH.'Checkbox/Form');
        $services->load(self::NAMESPACE.'Checkbox\Twig\\', self::PATH.'Checkbox/Twig');
        $services->set(CheckboxFieldChoice::class)
            ->tag('baks.fields.choice');


        $services->load(self::NAMESPACE.'Email\Form\\', self::PATH.'Email/Form');
        $services->load(self::NAMESPACE.'Email\Twig\\', self::PATH.'Email/Twig');
        $services->set(EmailFieldChoice::class)
            ->tag('baks.fields.choice');


        $services->load(self::NAMESPACE.'Input\Form\\', self::PATH.'Input/Form');
        $services->load(self::NAMESPACE.'Input\Twig\\', self::PATH.'Input/Twig');
        $services->set(InputFieldChoice::class)
            ->tag('baks.fields.choice');


        $services->load(self::NAMESPACE.'Contact\Form\\', self::PATH.'Contact/Form');
        $services->load(self::NAMESPACE.'Contact\Twig\\', self::PATH.'Contact/Twig');
        $services->set(ContactFieldChoice::class)
            ->tag('baks.fields.choice');

        $services->load(self::NAMESPACE.'Integer\Form\\', self::PATH.'Integer/Form');
        $services->load(self::NAMESPACE.'Integer\Twig\\', self::PATH.'Integer/Twig');
        $services->set(IntegerFieldChoice::class)
            ->tag('baks.fields.choice');


        $services->load(self::NAMESPACE.'Phone\Form\\', self::PATH.'Phone/Form');
        $services->load(self::NAMESPACE.'Phone\Twig\\', self::PATH.'Phone/Twig');
        $services->set(PhoneFieldChoice::class)
            ->tag('baks.fields.choice');

        $services->load(self::NAMESPACE.'Textarea\Form\\', self::PATH.'Textarea/Form');
        $services->load(self::NAMESPACE.'Textarea\Twig\\', self::PATH.'Textarea/Twig');
        $services->set(TextareaFieldChoice::class)
            ->tag('baks.fields.choice');

    }

}
