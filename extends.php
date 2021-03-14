<?php

abstract class AchievementType
{
    public function name()
    {
        // getting classname
        $class = (new ReflectionClass($this))->getShortName();
        
        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }
    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name())).'.png';
    } 
    // required if other classes extend AchievementType
    abstract public function qualifier($user);

}

class FirstThousandPoints extends AchievementType
{
    
    public function qualifier($user)
    {
        
    }
}


class FirstBestAnswer extends AchievementType
{
    public function qualifier($user)
    {
        # code...
    }
}


class Top50 extends AchievementType
{
    public function qualifier($user)
    {
        # code...
    }
}

$achievement = new Top50();
echo $achievement->qualifier('buh');