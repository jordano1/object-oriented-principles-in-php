<?php
// mutable
// object who's internal state can be changed
//immutable
// object who's internal state cannot be changed

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


class Coordinates
{

    public $x;
    public $y;

    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

function pin(Coordinates $coordinates)
{
    $coordinates->x;
}


function distance(Coordinates $begin, Coordinates $end)
{

}

// if you keep passing parameters then they're connected, if that's the case, create a class
class DateSpan
{
    private $begin;
    private $depart;

}
// function scheduleVacation($arrive, $depart)
// {

// }