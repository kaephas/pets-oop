<?php

// pet.php

class Pet
{
    private $_name;
    private $_color;

    function eat()
    {
        return '<p>' . $this->_name . ' is eating.</p>';
    }

    function talk()
    {
        return '<p>'.$this->_name . ' says, "Hello World!"</p>';
    }

    function sleep()
    {
        return '<p>' . $this->_name . ' goes to sleep.';
    }


    function __construct($name = 'unknown', $color = '?')
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    function setName($name)
    {
        $this->_name = $name;
    }

    function setcolor($color)
    {
        $this->_color = $color;
    }
}