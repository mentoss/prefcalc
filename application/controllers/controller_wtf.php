<?php

class Controller_wtf extends Controller {

    function __construct() {
        $this->model = new Model_wtf  ();
        $this->view = new View();
    }

    function action_index() {
        $data = $this->model->get_data();
        $this->view->generate('view_wtf.php', 'template.php', 'inner_header.php', $data);
    }
}