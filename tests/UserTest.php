<?php

namespace App\Tests;

use User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{ 
        public function testReturnFullname()
        {
                require 'User.php';

                $user = new User();

                $user->fistName = 'fab';
                $user->surname = 'del';

                $this->assertEquals('fab del', $user->getFullName());
        }
       
        public function testReturnEmptyFullname()
        {
                $user = new User();

                $this->assertEquals('', $user->getFullName());
        }

        public function testHasFirstName()
        {
                $user = new User();

                $user->firstName = 'fab';

                $this->assertEquals('fab', $user->firstName);
        }
}