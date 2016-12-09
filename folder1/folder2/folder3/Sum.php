<?php
namespace folder1\folder2\folder3;

class Sum
{
    public $a ;
    public $b ;
    function add($so1, $so2)
    {
        $this->a = $so1;
        $this->b = $so2;
        return $so1 + $so2;
    }
}
