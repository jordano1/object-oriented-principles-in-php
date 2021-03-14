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
        // new arr of values in collection
        return array_sum(array_map(fn($item) => $item->$key, $this->items));

    }
}

class VideosCollection extends Collection
{
    public function length()
    {
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