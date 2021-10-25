<?php
class Logout 
{
    public function __construct()
    {
        Session::unset();
        Session::destroy();
    }

    public function index()
    {
        if (!Session::checkSession()) {
          header('location:'.base_url('login'));
        }
    }
}
