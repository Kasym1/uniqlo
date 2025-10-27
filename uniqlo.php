<?php

/**
 * ������� info.txt ��� ������������� ������.
 * ������ �� ���� �� �������� ����������. ������ ����������� ������� �������������� � ����,
 * ���� ������ $items = [[�shirt�, �48$�, �https://www.uniqlo.com/us/en/products/E479158-000/00�], [�dress�, �18$�, �https://www.uniqlo.com/us/en/products/E479158-000/00�]];
 *
 *
 * @review:
 * - ������ ����� ������ ���� ��������� ������
 * - - ��� ����� ����� ��� ������������� ����� ���� ���������� ������ ����� ���������
 * - - https://code.mu/ru/php/book/oop/namespaces/command-use/ (������������ �� ����, ������ ��������)
 * - "������� ������ Product" - �� ������� ������ ������, ��� ��� ����� Uniqlo.
 * - - �������� ��� Uniqlo - �����������. ��������, ���� ��������� ������ �������, �� ������� �������� �����
 *     ����� ��������� ����� �� ������, � ���������� �����. ��� ������������ ���� (��������� �������� DRY https://vverh.digital/blog/dont-repeat-yourself-or-dry/),
 *     � ������, ���-�� �� ���. ������� ������� ���� ����� Product � ����� ����������� ������ ��������� ������,
 *     ���� � ���� ��������� ��� ����������.
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

