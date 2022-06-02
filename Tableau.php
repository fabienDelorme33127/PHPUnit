<?php

class Tableau
{
        private $tab = [];

        public function fillArray($val)
        {
                $this->tab[] = $val;
        }

        public function popArray()
        {
                return array_pop($this->tab);
        }
        
        public function countArray()
        {
                return count($this->tab);
        }
}