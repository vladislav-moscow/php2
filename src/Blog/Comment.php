<?php

namespace Blog;

class Comment
{
    public int $id;
    public int $userId;
    public string $postId;
    public string $text;

    public function __toString()
    {
        return  $this->postId . '. ' . $this->text;
    }
}