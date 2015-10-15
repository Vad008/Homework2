<?php

/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 15.10.15
 * Time: 19:04
 * Homework2
 */
class number
{
    public $i = 0;
    public $o = 0;
    public $p = 0;

    function create_number()
    {
        $this->i = rand(1, 8);
    }

    function finding()
    {
        //echo $this->i;
        $this->o = $this->i % 2;
        //echo $this->o;
        if ($this->o == 0) {
            echo $this->i . '- парное число';
        } else {
            echo $this->i . '- непарное число';
        }
    }

    function finding_number()
    {
        switch ($this->i) {
            case 0:
                echo ", равно 0";
                break;
            case 1:
                echo ", равно 1";
                break;
            case 2:
                echo ", равно 2";
                break;
            case 3:
                echo ", равно 3";
                break;
            case 4:
                echo ", равно 4";
                break;
            case 5:
                echo ", равно 5";
                break;
            case 6:
                echo ", равно 6";
                break;
            case 7:
                echo ", равно 7";
                break;
            case 8:
                echo ", равно 8";
                break;
        }
    }
}

$number = new number();
$number->create_number();
$number->finding();
$number->finding_number();