<?php

class ShowForm extends Controller {

    public function __construct()
    {
   
        Session::checkAccess();
    }

    public function index()
    {
        # code...
        $this->data['content'] = "form_layout/form.php";   //$this->includeFile('index/actions.php');
        $this->render('index/index.php' , $this->data);
    }

}