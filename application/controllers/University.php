<?php 
class University extends MY_Controller {
    
    function __construct() {
        parent::__construct();
    }

    function create()
    {
        $this->title  = "Create University";
        $this->page = "university/createUniversity";
        $this->layout();
    }
}

?>