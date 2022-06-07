<?php

class Tableau
{
        public const MAX_ITEMS =  5;

        private $tab = [];

        /**
         * @throws TabException if item in tab exceeds MAX_ITEMS 
         */
        public function fillArray($item)
        {
                if($this->countArray() == static::MAX_ITEMS){
                        throw new TabException("tab is full");
                }
                $this->tab[] = $item;
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