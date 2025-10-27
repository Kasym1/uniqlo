<?php

/**
 * ƒобавил info.txt где продублировал задачу.
 * ƒанные не надо из реальных источников. ѕросто используйте массивы захардкоженные в коде,
 * типо такого $items = [[СshirtТ, С48$Т, Сhttps://www.uniqlo.com/us/en/products/E479158-000/00Т], [СdressТ, С18$Т, Сhttps://www.uniqlo.com/us/en/products/E479158-000/00Т]];
 *
 *
 * @review:
 * -  аждый класс должен быть отдельным файлом
 * - - Ёто нужно чтобы при необходимости можно было подключать каждый класс раздельно
 * - - https://code.mu/ru/php/book/oop/namespaces/command-use/ (использовать не надо, просто почитать)
 * - "—оздать объект Product" - из первого пункта задачи, это ваш класс Uniqlo.
 * - - Ќазывать его Uniqlo - неправильно. Ќапример, если следовать вашему примеру, то каждому магазину нужно
 *     будет создавать такие же классы, с одинаковым кодом. Ёто дублирование кода (нарушение принципа DRY https://vverh.digital/blog/dont-repeat-yourself-or-dry/),
 *     а значит, что-то не так. ѕоэтому создаем один класс Product и через конструктор задаем параметры товара,
 *     ведь у всех магазинов они одинаковые.
 */

class Uniqlo
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

class BaseShop implements ShopInterface
{
    protected $url;
    protected $name;
    protected $totalPage;

    public function __construct($url, $name, $totalPage){
        $this->url = $url;
        $this->name = $name;
        $this->totalPage = $totalPage;
    }

    public function getItems()
    {
    }

    public function getTotalPage()
    {
        return $this->totalPage;
    }
}

class AmazonShop extends BaseShop
{
}

class UniqloShop extends BaseShop
{
}

class RakutenShop extends BaseShop
{
}

