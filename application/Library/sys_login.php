<?php
class Sys_login extends Database
{
    private static $db ;
    public function __construct()
    {
       self::$db = new Database;
    }   

    public function index()
    {
        self::$db->sql = "SELECT * FROM employee_user";
        self::$db->Execute();

        
        $data = self::$db->Fetch();
        if ($stmt->rowCount() > 0) {
             Tools::showArray($data);
        }else{
            echo "no data";
        }
       
    }

    public function dbGetUserByUsername($username)
    {
        self::$db->sql = "SELECT * FROM employee_user WHERE username = :username ";
        
        self::$db->data = array(":username" => $username);
        
        self::$db->Execute();
        
        $stmt = self::$db->GET_STATEMENT();
        
        $data = self::$db->Fetch();
        
        if ($stmt->rowCount() > 0) {
            return $data;
        }else{
           return false;
        }
    }

    protected function setRoleUser($userID , $role)
    {
        $id = Crypt::encrypt($userID);
        $role = Crypt::encrypt($role);
        
        $userRole = array(
            'account_id' => $id , 
            'account_access' => $role,
            'log' => date('Y-m-d h:i:sa')
        );

        Session::setSession('role' , json_encode($userRole));
        Tools::writeLog(json_encode($userRole));
        return true;
    }

    public function login($userNpass)
    {
        $response = array('status'=> false , 'message' => 'Invalid username or password' );

        $ac = $userNpass;
        if ($ac['username'] == 'admin') {
            if ($ac['password'] == '@dm1n123') {
                //set role
                $this->setRoleUser('super admin' , 'super admin');
                $response['status'] = true;
                $response['message'] = null;
            }
        }else{
            $data = $this->dbGetUserByUsername($ac['username']);

            if ($data) {
                //compare login password

                $password = $ac['password'];

                $pass = Crypt::encrypt($password);

                $dbPassword = $data['password'];

                $isValid = password_verify($pass , $dbPassword);

                if ($isValid) {
                    # set Role
                    // userid , role
                    $this->setRoleUser($data['employee_id'] , $data['access']);

                    $response['status'] = true;
                    $response['message'] = null;
                }

            }
        }

        return $response;
    }
}
