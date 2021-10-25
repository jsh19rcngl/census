<?php

class Survey_Model 
{
    private  $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addHousingInfo($post)
    {
        $f = "";
        $v = "";
        $d = array();
        $c = 0;
        foreach ($post as $fields => $value) {
            if ($c > 0) {
                $f .= " , ";
                $v .= " , ";
            }
            $f .=  "`$fields`" ;
            $varValues = str_replace(' ', '_' , $fields);
            $v .= ":$varValues"; 
            $d[":".$varValues] = $value;
            $c++;
        }

        $sql = "INSERT INTO `household information` ( $f ) VALUES ( $v ) ";

        $test = array($sql , $d);

        $isAdded = $this->db->setSqlData($sql , $d)-> Execute();
        if ($isAdded) {
            return true;
        }

        return false;
    }


    
    public  function CreateNewForm()
    {
        $date = date('y-m-d');
        $randId = Tools::randomStr(6);
        $formTitle = "Form-".$randId;
        $formId = "ID-".$date."-".$randId;

        $isCreated = $this->db->setSqlData("INSERT INTO forms (form_id , form_title) VALUES (:id , :title) " , array(':id' =>$formId , ':title' => $formTitle )) -> Execute();

        if ($isCreated) {
            return Crypt::encryptStr($formId);
        }

        return false;
    }

    public function getFormData($id)
    {
        $fid = Crypt::decryptStr($id);
        $sql = "SELECT * FROM `household information` WHERE `form_id` = :id ";
        $data = array(':id' => $fid);
        $this->db->setSqlData($sql , $data)-> Execute();

        $datas =  $this->db->Fetch();

        return (count($datas) > 0)? $datas :  NULL;
 
        
    }
}


