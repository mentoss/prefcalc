<?php

class Controller {
    
    public $model;
    public $view;
    public $header;
    
    function __construct() {
        $this->view = new View();
    }
    
    function action_index() {
        // действие, вызываемое по умолчанию, перекрывается при реализации классов потомков
    }
}