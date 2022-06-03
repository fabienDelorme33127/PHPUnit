<?php

namespace App\Tests;


use Tableau;
use PHPUnit\Framework\TestCase;

class TableauTest extends TestCase
{ 
        protected $tab;

        protected function setUp(): void
        {
                require_once 'Tableau.php';

                $this->tab = new Tableau();
        }

        public function testArrayEmpty()
        {
                $this->assertEquals(0, $this->tab->countArray());
        }
       
        public function testArrayPush()
        {
                $this->tab->fillArray(2);

                $this->assertEquals(1, $this->tab->countArray());
        }

        public function testPopArray()
        {
                $this->tab->popArray();
                
                $this->assertEquals(0, $this->tab->countArray());
        }
}