<?php


class Comment
{
    public $author = null;
    public $text = null;
    public $created_at = null;


    function fillFromArray(&$array)
    {
        $array = [];
        
        $array = [
            $this->author = "author",
            $this->text = "text",
        ];

    }

    function save()
    {
        $this->created_at = date('Y-m-d H:i:s');
        insert((array)$this);
    }
}

