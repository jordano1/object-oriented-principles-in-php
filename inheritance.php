<?php
class Collection
{
    protected array $items;
    
    public function __construct($items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        //  $key passed in through line 23, as "length" which is the key for the numeric value we're summing
        return array_sum(array_column($this->items, $key));

    }
}

class VideosCollection extends Collection
{
    public function length()
    {
        //  passing length as key line 11
        return $this->sum('length');
    }
}


class Video
{
    public $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}


$videos = new VideosCollection([
    new Video('some video', 100),
    new Video('some video', 200),
    new Video('some video', 300),
]);


echo $videos->length();
?>