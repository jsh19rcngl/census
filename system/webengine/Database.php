<?php

class Database 
{
    protected $Server;
    protected $User;
    protected $Password;
    protected $Database;
    protected $Connection;

    private  $statement;

    public $sql;
    public $data;

    var $config = [
            "host" => DB_HOSTNAME,
            "username" => DB_USERNAME,
            "password" => DB_PASSWORD,
            "database" => DB_NAME
    ];

    public function __construct()
    {
        
        $this->hostName = $this->config["host"];
        $this->userName = $this->config["username"];
        $this->passWord = $this->config["password"];
        $this->dataBase = $this->config["database"];

        

        try {
            //code...

            $this->Connection = new PDO("mysql:host=$this->hostName;dbname=$this->dataBase;charset=utf8mb4" , $this->userName , $this->passWord);

            $this->Connection->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

        }catch (PDOException $th) {

            echo "Connection failed: " . $e->getMessage();

            die();
        }

    }

    function __destruct(){
        if (!empty($this->Connection)) {
            $this->Connection = null;
        }
    }


    /**
     * Execute sql 
     * 
     * PREPARE STAMENTs
     */
    public function PREPARE_STATEMENT($PREPARED_SQL)
    {
       return $this->statement = $this->Connection->prepare($PREPARED_SQL);
    }

    /**
     * Execute Prepared statement
     * return bool();
    */
    public function EXECUTE_STATEMENT($PREPARED_STATEMENT)
    {
       return  $PREPARED_STATEMENT->execute($this->data);
    }


    /**Quick command to execute query 
     * RETURN - bool(true , false)
    */
    public function Execute()
    {
        $this->PREPARE_STATEMENT($this->sql);
        return $this->EXECUTE_STATEMENT($this->statement);
       
    }


    /**
     * Fetch all SELECT sql
     * SELECT STATEMENT
     * @ @PDO::FETCH_ASSOC  var Description
     * @ PDO::FETCH_CLASS 
     * @ PDO::FETCH_GROUP
     */
    public function Fetch($style = PDO::FETCH_ASSOC)
    {   
        if ($style) {
           return $this->statement->fetchAll($style);
        }else{
            return $this->statement->fetchAll();
        }
        
       
    }

    /**
     * Returning sql statment
     * 
     * user can be used this function to fecth data , etc.
     */
    public function GET_STATEMENT()
    {
        # code...
        return $this->statement;
    }
    
    public  function setSqlData($sql , $data)
    {
        $this->sql = $sql;
        $this->data = $data;
        return $this;
    }

}
