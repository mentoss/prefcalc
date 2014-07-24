<?php

class Controller_codex extends Controller {
    function action_index() {	
        $this->view->generate('view_codex.php', 'template.php', 'inner_header.php');
    }
}