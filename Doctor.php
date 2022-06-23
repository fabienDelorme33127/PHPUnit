<?php

require_once 'AbstractPerson.php';

class Doctor extends AbstractPerson
{
    protected function getTitle()
    {
        return 'Dr.';
    }
}