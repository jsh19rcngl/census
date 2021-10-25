<?php
class Certificate extends Controller  
{
    public function __construct(){
        Session::checkAccess();
    }
    public function index()
    {
       
       $this->showCertificateTempalte();
    }

    public function showCertificateTempalte()
    {
        $this->data['content'] = "certificate/certificate_template.php"; 
        $this->render('index/index.php' , $this->data);
    }
}
