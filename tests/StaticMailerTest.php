<?php

use PHPUnit\Framework\TestCase;

require_once 'StaticMailer.php';

class StaticMailerTest extends TestCase
{
    public function testSendMessageReturnsTrue()
    {
        $this->assertTrue(StaticMailer::send('dave@example.com', 'Hello!'));
    }
    
    public function testInvalidArgumentExceptionIfEmailIsEmpty()
    {
        $this->expectException(InvalidArgumentException::class);
            
        StaticMailer::send('', '');
    }      
}