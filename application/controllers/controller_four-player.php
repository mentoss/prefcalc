<?php

class Controller_four_player extends Controller {

    function __construct() {
        $this->model = new Model_four_player ();
        $this->view = new View();
    }

    function action_index() {
        $data = $this->model->get_data();
        $this->view->generate('view_four-player.php', 'template.php', 'inner_header.php', $data);
    }
}