<?php

use App\Item;
use App\ItemChild;
use PHPUnit\Framework\TestCase;

require_once 'Item.php';
require_once 'ItemChild.php';

class ItemTest extends TestCase
{
    public function testDescriptionIsNotEmpty()
    {
        $item = new Item();

        $this->assertNotEmpty($item->getDescription());
    }

    public function testIdIsInterger()
    {
        $item = new ItemChild();

        $this->assertIsInt($item->getId());
    }

    public function testTokenIsAString()
    {
        $item = new Item();

        $reflector =  new ReflectionClass(Item::class);

        $method = $reflector->getMethod('getToken');
        $method->setAccessible(true);

        $result = $method->invoke($item);

        $this->assertIsString($result);
    }

    public function testPrefixedTokenStartsWithPrefix()
    {
        $item = new Item();

        $reflector =  new ReflectionClass(Item::class);

        $method = $reflector->getMethod('getPrefixedToken');
        $method->setAccessible(true);

        $result = $method->invokeArgs($item, ['example']);

        $this->assertStringStartsWith('example', $result);
    }
}