<?php

namespace app\controllers;

class PostsNewController extends App
{
    
    public function indexAction()
    {
        echo 'PostsNew::index';
    }

    public function testAction()
    {
        echo 'PostsNew::test';
    }

    public function testPageAction()
    {
        echo 'PostsNew::testPage';
    }

    public function before()
    {
        echo 'PostsNew::before';
    }
    
}