<?php
class Sample extends Controller 
{
    public function index()
    {
        echo $_POST['username'];
    }
    public function tr()
    {
    //     $c = 0;
    //    for ($i=0; $i < $p1; $i++) { 

    //       echo " this is test $name <br>";
    //       if ($c > 10) {
    //           echo "loop exceed";
    //           break;
    //       }
    //       $c++;
    //    }

        $this->data['data'] = 'ok';

        $this->Template('template/template.php' , $this->data);  

       //echo($r);
    }
}


?>