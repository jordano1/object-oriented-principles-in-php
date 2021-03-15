<?php
// mutable
// object who's internal state can be changed
//immutable
// object who's internal state cannot be changed
//
class Age
{
    private $age;

    public function __construct($age)   
    {
        if($age < 0 || $age >= 120){
            throw new InvalidArgumentException(('that makes no sense'));
        }
        $this->age = $age;
    }
    public function increment()
    {
        return new self($this->age + 1);
    }
    public function get()
    {
        return $this->age;
    }
}


$age = new Age(35);
$age = $age->increment();
var_dump($age->get());
// $age = new Age(36);
// register('jordan o', $age);