<?php

class Controller_contracts extends Controller {

    function __construct() {
        $this->model = new Model_contracts  ();
        $this->view = new View();
    }

    function action_index() {
        $data = $this->model->get_data();
        $this->view->generate('view_contracts.php', 'template.php', 'inner_header.php', $data);
    }
}