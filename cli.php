<?php

use Blog\Comment;
use Blog\Post;
use Blog\User;

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('ru_RU');

switch ($argv[1]) {
    case 'user':
        $user = new User();
        $user->firstName=$faker->firstName;
        $user->lastName=$faker->lastName;
        echo $user;
        break;
    case 'post':
        $post = new Post();
        $post->title=$faker->text(15);
        $post->text=$faker->text(150);
        echo $post;
        break;
    case 'comment':
        $comment = new Comment();
        $comment->postId=$faker->numberBetween(1, 115);
        $comment->text=$faker->text(150);
        echo $comment;
        break;
}