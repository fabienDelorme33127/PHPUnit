<?php

namespace App\Tests;

use Mailer;
use PHPUnit\Framework\TestCase;

require_once 'Mailer.php';

class Mocktest extends TestCase
{ 
        public function testMock()
        {       
                $mock = $this->createMock(Mailer::class);
                
                $mock->method('sendMessage')
                        ->willReturn(true);

                $result = $mock->sendMessage('bob@gmail.com', 'hello wolrd');

                $this->assertTrue($result);
        }
}