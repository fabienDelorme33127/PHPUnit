<?php

use PHPUnit\Framework\TestCase;

require_once 'Doctor.php';

class AbstractPersonTest extends TestCase
{
        public function testNameAndTitleIsReturned()
        {
                $doctor = new Doctor('Green');
                
                $this->assertEquals('Dr. Green', $doctor->getNameAndTitle());
        }
        
        public function testNameAndTitleIsReturnedIncludesValueFromGetTitle()
        {
                $mock = $this->getMockBuilder(AbstractPerson::class)
                        ->setConstructorArgs(['Green'])
                        ->getMockForAbstractClass();

                $mock->method('getTitle')
                        ->willReturn('Dr.');

                $this->assertEquals('Dr. Green', $mock->getNameAndTitle());
        }
     
}