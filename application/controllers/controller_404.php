<?php

class Controller_404 extends Controller {
    function action_index() {	
        $this->view->generate('view_404.php', 'template.php', 'inner_header.php');
    }
}