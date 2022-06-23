<?php

use PHPUnit\Framework\TestCase;

require_once 'UserCallStaticMailer.php';
require_once 'StaticMailer.php';


class UserTest extends TestCase
{
        public function tearDown(): void
        {
            Mockery::close();
        }
        
        public function testNotifyReturnsTrue()
        {
            $user = new UserAndStaticMailer('dave@example.com');
            
            $mock = Mockery::mock('alias:StaticMailer');
            
            $mock->shouldReceive('send')
                 ->once()
                 ->with($user->email, 'Hello!')
                 ->andReturn(true);
                 
            $this->assertTrue($user->notify('Hello!'));       
        }
}