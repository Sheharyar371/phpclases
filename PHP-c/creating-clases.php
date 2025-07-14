<?php
class student{
    public $name= "ali akram khan";
    public $price=100;
    public function grades(){ 
        $pricenew= $this->price;
        $pricenew=$pricenew/2;
        return $pricenew;
    }

}
$umair =new student();
$umair->price=300;
$output=$umair->grades();
var_dump($umair->name); 