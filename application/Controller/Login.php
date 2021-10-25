<?php
class Login extends Controller
{

    
    public $allowedFields = array(
        'username' , 'password'
    );

    public $requiredFields = array(
         'username' => 'Username is required' , 'password'=> 'Password is required'
    );

    protected $formDatas = array();

    public $loginStatus = array();
    
    public function __construct()
    {
        $isLogin = Session::checkSession('user');
    }



    public function validate($post)
    {
        $vData = array();
        $isValid = true;
        $err = null;
        $validFields = $this->requiredFields;
        foreach ($validFields as $key => $value) {
            $v = Tools::CleanStr($post[$key]);
            if ($v && $v != '') {
                $vData[$key] = $v; 
            }else{
                $err = $value;
                $isValid = false;
                break;
            }
        }
       
       $this->formDatas = $vData;

      
       $this->loginStatus =  array('status' => $isValid , 'message' =>$err );
        return $this;
    }

    public function login()
    {

        if ($this->loginStatus['status']) {
            $l = new Sys_login;
            return $l->login($this->formDatas);

        }else{
            return $this->loginStatus;
        }
    }


    public function index()
    {
       // echo "OK";
       $this->withTemplate();
    }

    public function withTemplate()
    {
        $db = new Database();

        $db->sql = "SELECT * FROM employee_user";

        $db->Execute();

        $data = $db->Fetch();

        $this->data['users'] = $data;

        $this->render('login/login.php' , $this->data);
     
    }

    public function s()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $res = $this->validate($_POST)->login();
            echo json_encode($res);
        }
       
    }
    
}
