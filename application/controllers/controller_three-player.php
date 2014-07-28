<?php

class Controller_three_player extends Controller {

    function __construct() {
        $this->model = new Model_three_player ();
        $this->view = new View();
    }

    function action_index() {
        $data = $this->model->get_data();
        $this->view->generate('view_three-player.php', 'template.php', 'inner_header.php', $data);
    }
}