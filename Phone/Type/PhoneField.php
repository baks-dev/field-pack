<?php
/*
*  Copyright Baks.dev <admin@baks.dev>
*
*  Licensed under the Apache License, Version 2.0 (the "License");
*  you may not use this file except in compliance with the License.
*  You may obtain a copy of the License at
*
*  http://www.apache.org/licenses/LICENSE-2.0
*
*  Unless required by applicable law or agreed to in writing, software
*  distributed under the License is distributed on an "AS IS" BASIS,
*  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
*  See the License for the specific language governing permissions and
*   limitations under the License.
*
*/

namespace BaksDev\Field\Pack\Phone\Type;

final class PhoneField
{
    public const string TYPE = 'phone_field';

    private string $value;


    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function formater(string $phone): string
    {
        // Убираем все символы, кроме цифр и знака + в начале
        $emptyPhone = preg_replace('/[^\d+]/', '', $phone);

        // Проверяем, начинается ли строка с +7
        if(preg_match('/^\+7(\d{10})$/', $emptyPhone, $matches))
        {
            // Форматируем номер в нужный формат
            $formattedPhone = '+7 ('.substr($matches[1], 0, 3).') '.
                substr($matches[1], 3, 3).'-'.
                substr($matches[1], 6, 2).'-'.
                substr($matches[1], 8, 2);

            return $formattedPhone;
        }

        return $phone;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}