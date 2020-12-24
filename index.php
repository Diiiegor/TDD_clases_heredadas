<?php
require_once __DIR__.'/vendor/autoload.php';
use App\Post;
use App\Comment;


$post = new Post();
$comment = new Comment();

$post->addComment($comment);
print_r($post->countComments());
print_r($post->getComments());