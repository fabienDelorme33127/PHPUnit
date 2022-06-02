<?php

class User
{
        public $fistName;
        public $surname;

        public function getFullName()
        {
                return trim($this->fistName . ' ' . $this->surname);
        }
}