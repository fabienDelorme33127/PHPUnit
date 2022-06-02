<?php

namespace App\Tests;

use Tableau;
use PHPUnit\Framework\TestCase;

class TableauTest extends TestCase
{ 
        public function testArrayEmpty()
        {
                require 'Tableau.php';

                $tab = new Tableau();

                $this->assertEquals(0, $tab->countArray());

                return $tab;
        }
       
        /**
         * @depends testArrayEmpty
         */
        public function testArrayPush(Tableau $tab)
        {
                $tab->fillArray(2);

                $this->assertEquals(1, $tab->countArray());

                return $tab;
        }

        /**
         * @depends testArrayPush
         */
        public function testPopArray(Tableau $tab)
        {
                $tab->popArray();
                
                $this->assertEquals(0, $tab->countArray());
        }
}