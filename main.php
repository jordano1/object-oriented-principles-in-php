<?php

class Team
{
    protected $name;
    protected $members = [];

    //  initializes an objects properties
    public function __construct($name, $members =[])
    {
        $this->name = $name;
        $this->members = $members;
    }

    //  global, be cautious
    public static function start($name, $members = [])
    {
        return new static($name, $members);
    }
    public function name()
    {
        return $this->name;
    }

    public function members()
    {
        return $this->members;
    }

    public function add($name)
    {
        echo('<br>added '.$name.'<br>');

        $this->members[] = $name;
    }

    public function cancel()
    {
        
    }
    
}
$acme = Team::start('Acme', [
    'john',
    'james',
]);
$acme->add('jordan');
$acme->add('jane');
var_dump($acme->members());

?>