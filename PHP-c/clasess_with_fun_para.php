<?php

class Gun{
    public $caliber=0.3;
    public $year='2017';
    public function __construct($caliber =0.1,$year='1999')
    {
        $this->year=$year;
        $this->caliber=$caliber;
    }
}
$pistol= new Gun(year:'2025');
var_dump($pistol);
