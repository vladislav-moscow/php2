<?php

namespace Blog;

class Post
{
    public int $id;
    public int $userId;
    public string $title;
    public string $text;

    public function __toString()
    {
        return  $this->title . ' >>> ' . $this->text;
    }
}