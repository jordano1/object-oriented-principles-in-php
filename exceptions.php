<?php

function sum($n1, $n2)
{
    if(! is_float($n1) || ! is_float($n2)){
        throw new InvalidArgumentException('provide a float!');
    }
    return $n1 + $n2;
}

try {
    echo sum(5, []);
} catch (InvalidArgumentException $e) {
    echo 'dang';
}

class Video
{
    # code...
}
class User
{
    public function download(Video $video)
    {
        if(! $this->subscribed()){
            throw new Exception('you must be subscribed to download');
        }
    }
    public function subscribed()
    {
        return false;
    }
}

class UserDownloadsController
{
    public function show()
    {
        // (new User)->download(new Video);
    }
}



// team / members

class TeamException extends Exception
{
    public static function fromTooManyMembers()
    {
        return new static('no more than 3 team members!');
    }
}

class Member
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Team
{
    protected $members = [];
    public function add(Member $member)
    {
        if(count($this->members) === 3){
            throw TeamException::fromTooManyMembers();
        }
        $this->members[] = $member;
    }
    public function members()
    {
        return $this->members;
    }
}

class TeamMemberscontroller
{
    public function store()
    {
        $team = new Team;
            
        try
        {
            $team->add(new member('john'));
            $team->add(new member('john'));
            $team->add(new member('john'));
            $team->add(new member('john'));
            echo("<pre>");
            var_dump($team->members());
            echo("</pre>");
        }catch(TeamException $e){
            echo("<pre>");
            var_dump($e->getMessage());
            echo("</pre>");
        } //can add more catches
    }
}

(new TeamMemberscontroller())->store();

