<?php

class Controller_codex extends Controller {

    function __construct() {
        $this->model = new Model_codex  ();
        $this->view = new View();
    }

    function action_index() {
        $data = $this->model->get_data();
        $this->view->generate('view_codex.php', 'template.php', 'inner_header.php', $data);
    }
}