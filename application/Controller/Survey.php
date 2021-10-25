<?php
class Survey extends Controller
{
    
    public function index()
    {
        $this->CreateForm();
    }

    public function CreateForm()
    {
        $sql = new Survey_Model();
        $formId = $sql->CreateNewForm();
        
        if ($formId) {
            header('location:'.base_url('Survey/Form/'.$formId));
        }
    }

    public function Form($formId)
    {
        $this->data['Form_ID']  = $formId; // Crypt::decryptStr($formId);
        $this->data['content'] = "form_layout/form.php"; 
        $this->render('index/index.php' , $this->data);
    }

    /**Housing information */

    public $fields = array(
        'firstName' => 'firstname',
        'middleName' => 'middlename',
        'lastName' => 'lastname',
        'age' => 'age',
        'sex' => 'sex',
        'nationality' => 'nationality',
        'civil_stat' => 'Civil Status',
        'migrate' => 'migrated_from',
        'educationalAttainment' => 'education_attainment',
        'schoolAttended' => 'School Attended',
        'osy' => 'OSY',
        'crw' => 'Can Read Write',
        'employmentArr' => 'Employement',
        'income' => 'Combined Monthly Income',
        'dialect' => 'Major Dialect',
        'religion' => 'Main Religion',
    );

    public function housingInformation()
    {
        $filteredData = array();

        //FormId
        $filteredData['h_i_prim'] = "HI_".Tools::randomStr(8);
        $filteredData['form_id'] = Crypt::decryptStr($_POST['formID']);

        $fields = $this->fields;
        foreach ($_POST as $key => $value) {
            if (array_key_exists($key , $fields)) {
               $filteredData[$fields[$key]] = Tools::CleanStr($value);
            }
        }

        /**Employment */
        $emp = Tools::CleanStr($_POST['employment']);
        $work = Tools::CleanStr($_POST['work']);
        $ftpt = Tools::CleanStr($_POST['ftpt']);
        $employmentDetails = array(
            'employ' =>($emp)? $emp  : NULL,
            'work' => ($work)? $work : NULL,
            'type' => ($ftpt)? $ftpt : NULL     
        );

        $filteredData['Employement'] = json_encode($employmentDetails);

       

        
        $sql = new Survey_Model;
        $rt = $sql->addHousingInfo($filteredData);
        if($rt){
            echo TRUE;
        }else{
            echo FALSE;
        }

    }


    public function getDataFromFormId($id)
    {
        $s = new Survey_Model;
        echo json_encode($s->getFormData($id));
        // Tools::showArray();
    }

    //test
    public function ff( $var = null)
    {
        //return "http://".$_SERVER['SERVER_NAME'].FOLDER_PATH.$url;SERVER_PROTOCOL
        // $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http';

        // $protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
        echo $_SERVER['SERVER_NAME'] . "<hr>";
        echo $_SERVER['HTTP_HOST'] . "<hr>";
        echo $_SERVER['SERVER_PROTOCOL'] . "<hr>";
        echo $protocol. "<hr>";
        echo base_url('public/img/icon.ico');
    }

}
