<?php

class Controller_contracts extends Controller {
    function action_index() {	
        $this->view->generate('view_contracts.php', 'template.php', 'inner_header.php');
    }
}