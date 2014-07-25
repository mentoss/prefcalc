<?php

class Controller_three_player extends Controller {
    function action_index() {	
        $this->view->generate('view_three-player.php', 'template.php', 'inner_header.php');
    }
}