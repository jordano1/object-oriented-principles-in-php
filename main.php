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

    //  global, be cautious (... variadic parameter so we don't need to repeat what's in the construct)
    public static function start(... $params)
    {
        return new static(... $params);
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
class Member
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function lastViewed()
    {

    }
}
$acme = Team::start('Acme', [
    new Member('Jordan'),
    new Member('Jane'),
]);
$warner = Team::start('warner');
print_r($warner);
$warner->add();
$acme->add('jordan');
var_dump($acme->members());

?>