<?php

namespace App\Tests;

use User;
use Mailer;
use PHPUnit\Framework\TestCase;

require_once 'Mailer.php';
require_once 'User.php';

class Mocktest extends TestCase
{ 
        public function testMock()
        {       
                $mock = $this->createMock(Mailer::class);
                
                $mock->method('sendMessage')
                        ->willReturn(true);

                $result = $mock->sendMessage('bob@gmail.com', 'hello world');

                $this->assertTrue($result);
        }

        public function testNotifyIsSent()
        {
                $user = new User();

                $mock_mailer = $this->createMock(Mailer::class);

                $mock_mailer->expects($this->once())
                                ->method('sendMessage')
                                ->with($this->equalTo('testouille@gmail.com'), $this->equalTo('msg sent'))
                                ->willReturn(true);

                $user->setMailer($mock_mailer);              

                $user->email = 'testouille@gmail.com';

                $this->assertTrue($user->notify('msg sent'));
        }
}