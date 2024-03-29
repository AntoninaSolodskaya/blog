<?php

namespace vendor\core\base;

abstract class Controller
{
    public $route = [];

    public $view;

    public $layout;

    public $date = [];
   
    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route['action'];
    }

    public function getView()
    {
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render($this->date);
    }

    public function set($date)
    {
        $this->date = $date;
    }

}