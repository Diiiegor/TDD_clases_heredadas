<?php


namespace App;


class Post
{
    protected $commets=[];

    public function addComment(Comment $comment){
        $this->commets=$comment;
    }

    public function countComments(){
        return count($this->commets);
    }

    public function getComments(){
        return $this->commets;
    }

}