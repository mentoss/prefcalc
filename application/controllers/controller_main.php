<?php

class Controller_Main extends Controller {
    function action_index() {	
        $this->view->generate('view_main.php', 'template.php', 'index_header.php');
    }
}