<?php

class Controller_wtf extends Controller {
    function action_index() {	
        $this->view->generate('view_wtf.php', 'template.php', 'inner_header.php');
    }
}