<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{   
    
    public function testAddition()
    {
        require_once('function.php');

        $this->assertEquals(4, add(2,2)); // doc : https://phpunit.readthedocs.io/en/9.5/assertions.html#assertequals
    }
    
    public function testFailAddition()
    {
        $this->assertNotEquals(5, add(2,2));
    }
   

}
