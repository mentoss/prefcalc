<?php

class Controller_four-player extends Controller {
    function action_index() {	
        $this->view->generate('view_four-player.php', 'template.php', 'inner_header.php');
    }
}