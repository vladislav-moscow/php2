<?php

namespace Blog;

class User
{
    public int $id;
    public string $firstName;
    public string $lastName;

    public function __toString()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}