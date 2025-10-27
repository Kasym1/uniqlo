<?php

/**
 * Добавил info.txt где продублировал задачу.
 * Данные не надо из реальных источников. Просто используйте массивы захардкоженные в коде,
 * типо такого $items = [[‘shirt’, ‘48$’, ‘https://www.uniqlo.com/us/en/products/E479158-000/00’], [‘dress’, ‘18$’, ‘https://www.uniqlo.com/us/en/products/E479158-000/00’]];
 *
 *
 * @review:
 * - Каждый класс должен быть отдельным файлом
 * - - Это нужно чтобы при необходимости можно было подключать каждый класс раздельно
 * - - https://code.mu/ru/php/book/oop/namespaces/command-use/ (использовать не надо, просто почитать)
 * - "Создать объект Product" - из первого пункта задачи, это ваш класс Uniqlo.
 * - - Называть его Uniqlo - неправильно. Например, если следовать вашему примеру, то каждому магазину нужно
 *     будет создавать такие же классы, с одинаковым кодом. Это дублирование кода (нарушение принципа DRY https://vverh.digital/blog/dont-repeat-yourself-or-dry/),
 *     а значит, что-то не так. Поэтому создаем один класс Product и через конструктор задаем параметры товара,
 *     ведь у всех магазинов они одинаковые.
 */

class Product
{
    public $url;
    public $name;
    public $price;

    public function __construct($url, $name, $price)
    {
        $this->url = $url;
        $this->name = $name;
        $this->price = $price;
    }

    public function getInfo()
    {
        return $this->url - $this->name - $this->price;
    }
}