<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 15.10.15
 * Time: 19:04
 * Homework2
 */
class number{
    public $i = 0;
    public $o = 0;
    public $p = 0;
    function create_number()
    {
        $this->i = rand (1,8);
    }
    function finding()
    {
        //echo $this->i;
        $this->o=$this->i%2;
        //echo $this->o;
        if($this->o==0){
            echo $this->i.'- парное число';
        } else {
            echo $this->i.'- непарное число';
        }
    }
}
$number = new number();
$number->create_number();
$number->finding();
