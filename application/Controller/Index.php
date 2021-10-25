<?php
class Index extends Controller 
{
    public function __construct()
    {
    //    if (!Session::checkSession()) {
    //       header('location:login');
    //    }
        Session::checkAccess();
    }
    public function index()
    {
         $db = new Database();

        $db->sql = "SELECT * FROM employee_user";

        $db->Execute();

        $data = $db->Fetch();

        $this->data['users'] = $data;
        $this->data['content'] = "index/actions.php" ;//$this->includeFile('index/actions.php');
        $this->render('index/index.php' , $this->data);
    }

    

}
