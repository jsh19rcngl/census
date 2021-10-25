<?php
class Login extends Controller
{

    public function index()
    {
       $this->render('login/login.html');
    }

    public function showLogin()
    {
        $this->setTemplate('template/template.php');
        $this->render('login/login.php');
    }
}