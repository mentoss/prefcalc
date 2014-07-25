<?php

class Controller_four_player extends Controller {
    function action_index() {	
        $this->view->generate('view_four-player.php', 'template.php', 'inner_header.php');
    }
}