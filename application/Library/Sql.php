<?php

class Sql extends Database
{   
    private  $db;

    public function __construct()
    {

        parent::__construct();
       $this->db = new Database;
        

    }
    
}
