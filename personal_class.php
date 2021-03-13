<?php

class Team
{
    protected $name;
    protected $members = [];

    //initializes an objects properties
    public function __construct($name)
    {
        $this->name = $name;
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
    public function removeMember($name)
    {
        if(in_array($name, $this->members))
        {
            echo("<br>found ".$name."!<br>");
            
            unset($this->members[array_search($name, $this->members)]);
            print_r($this->members);
        }else{
            echo("<pre>");
            echo "<br>could not find ".$name." in ";
            print_r($this->members);
            echo("</pre>");
        }
    }

    public function emptyMember()
    {
        echo('<br>emptied!<br>');
        return $this->members = $members = [];
    }
}
$acme = new Team('Acme');
$acme->add('jordan');
$acme->add('jane');
var_dump($acme->members());
$acme->emptyMember();
var_dump($acme->members());
$acme->add('jane');
$acme->add('jordan');
var_dump($acme->members());
$acme->removeMember('obama');
var_dump($acme->members());
?>