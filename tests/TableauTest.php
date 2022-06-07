<?php

namespace App\Tests;

use Tableau;
use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__).'/src/TabException.php';
require_once 'Tableau.php';
class TableauTest extends TestCase
{ 
        protected $tab;

        protected function setUp(): void
        {       
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

        public function testMaxNumberOfItemsCanBeAdd()
        {
                for($i =0; $i < Tableau::MAX_ITEMS; $i++){
                        $this->tab->fillArray($i);
                }

                $this->assertEquals(Tableau::MAX_ITEMS, $this->tab->countArray());
        }
       
        public function testThrowException()
        {
                for($i =0; $i < Tableau::MAX_ITEMS; $i++){
                        $this->tab->fillArray($i);
                }
                
                $this->tab->fillArray("qfjqio");
                
                
        }
}