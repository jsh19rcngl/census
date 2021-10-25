<!-- 
<div class="row">
    <div class="col-12 col-md-4">
        <a href="">
            <div class="card text-center bg-primary text-light">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-user-plus fs-1"></i></h5>
                    <p class="card-text">Add new employee</p>
                </div>
            </div>
        </a>
        
    </div>
</div> -->


<style>
    html , body{
        background: #98e698;
    }
    .form-tables th , .form-tables th .th , .form-tables th.th{
        margin:auto;
        margin-top: auto;
       text-align:center;
       font-size:10pt;
    }
    

    a.edit-link:not(:hover){
        text-decoration:none
    }
    a.edit-link{
        white-space: nowrap;
        font-style:italic;
    }
    table , tr , td{
        border-color:black;
    }

    .input-transparent , .input-transparent:focus{
        background-color:transparent;
        border-color:grey;
    }
    .input-underline, .input-underline:focus{
        border-top-color:transparent;
        border-left-color:transparent;
        border-right-color:transparent;
        border-radius:0px;
    }

   
    
      
</style>


<hr>

<div class="card border-0 m-0" style="background:#98e698" >
    <div class="card-body" style="width:100%">
    
   
		
	<table width="100%" cellspacing="0" cellpadding="0">
        <tbody>
            <tr class="row">

                <td class="col-4 ms-1">

                    <div class="row">
                        <label for="houseNo" class="col-sm-3 col-form-label  "><code class="text-dark">House No. </code></label>
                        <div class="col-sm-9 mt-auto">
                        <input type="text" class="form-control form-control-sm w-50 input-transparent input-underline" id="houseNo">
                        </div>
                    </div>

                    <div class="row">
                        <label for="doe" class="col-sm-4 col-form-label  "><code class="text-dark">Date of Survey: </code></label>
                        <div class="col-sm-8 mt-auto">
                        <input type="date" class="form-control form-control-sm w-75 input-transparent input-underline" id="doe">
                        </div>
                    </div>

                    <div class="row">
                        <label for="int" class="col-sm-3 col-form-label  "><code class="text-dark">Informant: </code></label>
                        <div class="col-sm-9 mt-auto">
                        <input type="text" class="form-control form-control-sm w-50 input-transparent input-underline" id="int">
                        </div>
                    </div>

                    <div class="row">
                        <label for="sb" class="col-sm-4 col-form-label  "><code class="text-dark">Surveyed by: </code></label>
                        <div class="col-sm-8 mt-auto">
                        <input type="text" class="form-control form-control-sm w-50 input-transparent input-underline" id="sb">
                        </div>
                    </div>

                </td>
                
                <td class="col-6">
                  
                  	<div class=" text-dark ">
                        <div class="row m-auto ">
                            <div class="col-5  text-center">
                                <code class="text-dark ">
                                Republic of the Philippines <br>
                                        Province of Pangasinan <br>
                                    MUNICIPALITY OF CALASIAO <br>
                            </code>
                            </div>
                        </div>
                     

                        <div class="row m-auto ">
                            <label for="brgy" class="col-sm-2 col-form-label  "><code class="text-dark">Barangay:</code></label>
                            <div class="col-sm-5 mt-auto">
                                <select class="form-select form-select-sm input-transparent input-underline" id="brgy">

                                     <?php
                                        $brgys = array('Ambonao' ,'Ambuetel' ,'Banaoang' ,'Bued' ,'Buenlag' ,'Cabilocaan' ,'Dinalaoan' ,'Doyong' ,'Gabon' ,'Lasip' ,'Longos' ,'Lumbang' ,'Macabito' ,'Malabago' ,'Mancup' ,'Nagsaing' ,'Nalsian' ,'Poblacion East' ,'Poblacion West' ,'Quesban' ,'San Miguel' ,'San Vicente' ,'Songkoy' ,'Talibaew' );
                                        $bCount = count($brgys);
                                        for ($i = 0 ; $i < $bCount; $i++) {
                                            $brgy = $brgys[$i];
                                        ?>
                                            <option value="<?php echo $brgy; ?>"><?php echo $brgy; ?></option>
                                        <?php
                                        }

                                        
                                    ?>


                                </select>
                            </div>
                        </div>


                       
                        <div class="row m-auto mt-1">
                            <label for="st" class="col-sm-2 p-0  col-form-label  "><code class="text-dark p-0 m-0"><small>Sitio/Purok:</small></code></label>
                            <div class="col-sm-5 mt-auto ">
                                <input type="text" class="form-control form-control-sm ms-n1 input-transparent input-underline" id="st">
                            </div>
                        </div>
                        

                    </div>
                </td>
            </tr>
                
        </tbody>
    </table>
	
    <hr> 
    <!-- remove hr in output -->
	<p class="fw-bold m-1" style="font-style:italic">HOUSEHOLD INFORMATION  <button class="btn btn-primary btn-sm pt-0 pb-0 " data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <i class="fa fa-plus"></i> Add Data</button></p>
    <div class="table-responsive">
        <table class="table table-sm table-bordered form-tables " >
            <thead>
                <tr class="align-top ">
                    <th rowspan="3">No.</th>
                    <th rowspan="3" >Name</th>
                    <th rowspan="3">Age</th>
                    <th rowspan="3">Sex</th>
                    <th rowspan="3">Nationality</th>
                    <th rowspan="3">Civil Status</th>
                    <th rowspan="3" class="w-auto "><small>Migrated from other place(2005 to present)</small></th>

                    <th rowspan="3"><small>Highest/Latest Educational Attainment (Use Code)</small></th>
                    <th colspan="2">School Attended</th>
                    <th rowspan="3"><small><span class="d-block">OSY?</span> (for 6 to 21 years old)</small></th>
                    <th colspan="2"><small>Can Read & Write?</small></th>
                    <th colspan="4">Employement</th>
                    <th rowspan="3">Combined
                        Monthly Family Income
                    </th>
                    <th rowspan="3">Major  Dialect (Use Code)</th>
                    <th rowspan="3">Main  Religion (Use Code)</th>
                </tr>

                <tr>
                    <th rowspan="2" class="align-top ">Public</th>
                    <th rowspan="2" class="align-top ">Private</th>
                    <th rowspan="2" class="align-top ">Yes</th>
                    <th rowspan="2" class="align-top ">No</th>
                    <th rowspan="2" class="align-top ">Govt.</th>
                    <th colspan="3">Private</th>
                </tr>

                <tr>
                    <th><small class="p-0">Type of Work (Use Code)</small></th>
                    <th class="align-top ">FT</th>
                    <th class="align-top ">PT</th>
                </tr>
            </thead>
            <tbody id="householdInfo">
                

                <tr >
                    <td  > <span class="d-flex fw-bold"><span class="m-auto">1</span></span></td>
                    <td  >  <span class="d-flex"><span class="m-auto "> <a href="" class="edit-link pe-1 ps-1"  data-bs-toggle="tooltip" data-bs-placement="top" title="Click to edit" >Einstein, Albert </a> </span></span></td>
                    <td>142</td>
                    <td>Male</td>
                    <td>German</td>
                    <td>Married</td>
                    <td ></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><span class="d-flex "><span class="m-auto"><i class="fa fa-check-square-o m-auto " ></i></span></span></i></td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td><span class="d-flex "><span class="m-auto"><i class="fa fa-check-square-o m-auto " ></i></span></span></i></td>
                    <td>&nbsp;</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                
                </tr>
            
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
        
            </tbody>
        </table>
    </div>
 
	
	<span class="mb-1 mt-3 ms-3">
        <i>
            <b class="w-100 d-flex "> 
                <span class="w-auto"><pre>Check the appropriate box:  <button class="btn btn-primary btn-sm pt-0 pb-0 " data-bs-toggle="modal" data-bs-target="#staticBackdrop1"> <i class="fa fa-edit"></i> Edit Data</button></pre></span>
                <span class="m-auto">
                    <span  class="d-inline-flex"><pre>Business at Home:___________________ </pre></span>
                    <span class="d-inline-flex"><pre> Floor Area(Sq. M.) _______ </pre></span>
                    <span class="d-inline-flex"><pre> No. of Employees: ________</pre></span>
                </span>
            </b>
        </i>
    </span>


    <div class="row">
        <div class="col-4">
            <table border="1" cellspacing="0" cellpadding="0" class="table table-bordered form-tables">
                <tr>
                    <td colspan="4"><b>Housing</b> </td>
                </tr>
                <tr>
                    <th><small>House</small></th>
                    <th><small>Lot</small></th>
                    <th><small>Type</small></th>
                    <th><small>Materials</small></th>
                </tr>
            
                <tr>
                    <td class="p-1">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> owned</small></i>
                            <!-- <i class="bi bi-check-square"><small> owned</small></i> -->

                        </div>

                        <!-- <div class="form-check form-check-inline m-0">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1"><small>owned</small></label>
                        </div> -->
                    
                    </td>

                    <td class="p-1">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> owned</small></i>
                        </div>
                        <!-- <div class="form-check form-check-inline m-0"">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1">
                            <label class="form-check-label" for="inlineCheckbox2"><small>owned</small></label>
                        </div> -->
                    </td>

                    <td class="p-1">
                         <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Single</small></i>
                        </div>
                        <!-- <div class="form-check form-check-inline  m-0">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
                            <label class="form-check-label" for="inlineCheckbox3"><small>Single</small></label>
                        </div> -->
                    </td>

                    <td class="p-1">
                         <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Concrete</small></i>
                        </div>
                         <!-- <div class="form-check form-check-inline  m-0">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
                            <label class="form-check-label" for="inlineCheckbox3"><small>Concrete</small></label>
                        </div> -->
                    </td>

                </tr>

                <tr>
                    <td class="p-1">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> rented</small></i>
                        </div>
                         <!-- <div class="form-check form-check-inline  m-0">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                            <label class="form-check-label" for="inlineCheckbox4"><small>rented</small></label>
                        </div> -->
                    </td>

                    <td class="p-1">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> rented</small></i>
                        </div>
                         <!-- <div class="form-check form-check-inline  m-0">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1">
                            <label class="form-check-label" for="inlineCheckbox5"><small>rented</small></label>
                        </div> -->
                    </td>

                    <td class="p-1">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Single,Duplex</small></i>
                        </div>
                         <!-- <div class="form-check form-check-inline m-0 ">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option1">
                            <label class="form-check-label" for="inlineCheckbox6"><small>Single,Duplex</small></label>
                        </div> -->
                    </td>

                    <td class="p-1">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Wood</small></i>
                        </div>
                         <!-- <div class="form-check form-check-inline  m-0">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option1">
                            <label class="form-check-label" for="inlineCheckbox7"><small>Wood</small></label>
                        </div> -->
                    </td>

                </tr>

                <tr>
                    <td class="p-1">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> caretaker</small></i>
                        </div>
                         <!-- <div class="form-check form-check-inline m-0">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option1">
                            <label class="form-check-label" for="inlineCheckbox8"><small>caretaker</small></label>
                        </div> -->
                    </td>

                    <td class="p-1">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> caretaker</small></i>
                        </div>
                         <!-- <div class="form-check form-check-inline m-0">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option1">
                            <label class="form-check-label" for="inlineCheckbox9"><small>caretaker</small></label>
                        </div> -->
                    </td>

                    <td class="p-1">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Two Storey, Duplex</small></i>
                        </div>
                         <!-- <div class="form-check form-check-inline m-0">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="option1">
                            <label class="form-check-label" for="inlineCheckbox10"><small>Two Storey, Duplex</small></label>
                        </div> -->
                    </td>

                    <td class="p-1">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Mixed</small></i>
                        </div>
                         <!-- <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="option1">
                            <label class="form-check-label" for="inlineCheckbox11"><small>Mixed</small></label>
                        </div> -->
                    </td>
                
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>

                    <td class="p-1">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Two Storey</small></i>
                        </div>
                         <!-- <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="option1">
                            <label class="form-check-label" for="inlineCheckbox12"><small>Two Storey</small></label>
                        </div> -->
                    </td>

                    <td class="p-1">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Nipa</small></i>
                        </div>
                         <!-- <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox13" value="option1">
                            <label class="form-check-label" for="inlineCheckbox13"><small>Nipa</small></label>
                        </div> -->
                    </td>

               
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>

                    <td class="p-1">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> OthersR</small></i>
                        </div>
                         <!-- <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox14" value="option1">
                            <label class="form-check-label" for="inlineCheckbox14"><small>Others:</small></label>
                        </div> -->
                    </td>

                    <td class="p-1">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Shanty</small></i>
                        </div>
                         <!-- <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox15" value="option1">
                            <label class="form-check-label" for="inlineCheckbox15"><small>Shanty</small></label>
                        </div> -->
                    </td>
              
                </tr>

                <tr>
                    <th colspan="4">Housing Risk Factors</th>
                </tr>

                <tr>
                    <td class="p-1">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Along PNR</small></i>
                        </div>
                         <!-- <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox16" value="option1">
                            <label class="form-check-label" for="inlineCheckbox16"><small>Along PNR</small></label>
                        </div> -->
                    </td>

                    <td class="p-1">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small>Along Highway</small></i>
                        </div>
                         <!-- <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox17" value="option1">
                            <label class="form-check-label" for="inlineCheckbox17"><small>Along Highway</small></label>
                        </div> -->
                    </td>

                    <td class="p-1" colspan="2">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Flood Prone Area</small></i>
                        </div>
                         <!-- <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox18" value="option1">
                            <label class="form-check-label" for="inlineCheckbox18"><small>Flood Prone Area</small></label>
                        </div> -->
                    </td>
                </tr>

                <tr>
                    <td class="p-1">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Along riverbanks </small></i>
                        </div>
                         <!-- <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox19" value="option1">
                            <label class="form-check-label" for="inlineCheckbox19"><small>Along riverbanks</small></label>
                        </div> -->
                    </td>

                    <td class="p-1">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Squatters Area </small></i>
                        </div>
                         <!-- <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox20" value="option1">
                            <label class="form-check-label" for="inlineCheckbox20"><small>Squatters Area</small></label>
                        </div> -->
                    </td>

                    <td class="p-1" colspan="2">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Others </small></i>
                        </div>
                         <!-- <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox21" value="option1">
                            <label class="form-check-label" for="inlineCheckbox21"><small>Others</small></label>
                        </div> -->
                    </td>
                </tr>
            </table>
        </div>


        <div class="col-8">
             <table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-bordered">
                <tr>
                    <td colspan="1"><b><small>Electricity:</small></b></td>
                    <td colspan="2">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> DECORP </small></i>
                        </div>
                         
                        
                    </td>
                    <td colspan="2">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> CENPELCO </small></i>
                        </div>
                       
                    </td>
                    
                    <td colspan="2">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> None </small></i>
                        </div>
                        
                    </td>
                    <td rowspan="4" width="2%"></td>
                    <td colspan="6"><b><small>Water Supply</small><b></td>
                </tr>

                <tr>
                <td colspan="7"><b><small>Telecommunications:</small></b></td>
                <td colspan="2"><small>Deep Well</small></td>
                <td colspan="2"><small>Shallow Well</small></td>
                <td rowspan="2"><small>Pressure Pump(Jet Matic)</small></td>
                    <td rowspan="2"><small>Individual Connection(Water District)</small></td>
                </tr>
                <tr>
                <td>
                     <div class="d-inline-flex">
                        <i class="bi bi-square"><small> PLDT </small></i>
                    </div>
                    
                </td>

                <td>
                    <div class="d-inline-flex">
                        <i class="bi bi-square"><small> DIGITAL </small></i>
                    </div>
                    
                </td>

                <td>
                    <div class="d-inline-flex">
                        <i class="bi bi-square"><small> SMART </small></i>
                    </div>
                   
                </td>
                
                <td>
                    <div class="d-inline-flex">
                        <i class="bi bi-square"><small> GLOBE </small></i>
                    </div>
                   
                </td>
                
                <td>
                    <div class="d-inline-flex">
                        <i class="bi bi-square"><small> SUN </small></i>
                    </div>
                   
                </td>
                
                <td>
                    <div class="d-inline-flex">
                        <i class="bi bi-square"><small> Others </small></i>
                    </div>
                    
                </td>
                
                <td>
                    <div class="d-inline-flex">
                        <i class="bi bi-square"><small> None </small></i>
                    </div>
                   
                </td>


                <td><small>Pub.</small></td>
                <td><small>Priv.</small></td>
                <td><small>Pub</small>.</td>
                <td><small>Priv.</small></td>
                </tr>
                <tr>
                <td><b><small>Toilet Facilities:</small></b></td>
                <td><span class="d-flex">No.: <pre> ____</pre></span></td>
                <td>Type:</td>
                <td>
                    <div class="d-inline-flex">
                        <i class="bi bi-square"><small> WS </small></i>
                    </div>
                    
                </td>
                
                <td>
                    <div class="d-inline-flex">
                        <i class="bi bi-square"><small> AT </small></i>
                    </div>
                    
                </td>
                
                <td>
                    <div class="d-inline-flex">
                        <i class="bi bi-square"><small> OP </small></i>
                    </div>
                    
                </td>
                
                <td>
                    <div class="d-inline-flex">
                        <i class="bi bi-square"><small> None </small></i>
                    </div>
                     
                </td>
                
                <td></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><b><small>Refuse Disposal:</small></b></td>
                    <td>Type:</td>
                    <td>
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Burning</small></i>
                        </div>
                    </td>

                    <td colspan="1">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Dumping</small></i>
                        </div>
                    </td>

                    <td>
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Burying</small></i>
                        </div>
                    </td>

                    <td colspan="2">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Composting </small></i>
                        </div>
                      
                    </td>

                    <td colspan="4">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Animal Feeds </small></i>
                        </div>
                       
                    </td>

                    <td colspan="3">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Garbage Truck Collection </small></i>
                        </div>
                        
                    </td>
                    
                </tr>
                <tr>
                    <td><b><small>Personal Transporatation:</small></b></td>
                    <td colspan="14" class="small">Instead of checking, write the number of vehicle types owned, if any, in their appropriate box/es</td>
                </tr>

                <tr>
                    <td>
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> GCar </small></i>
                        </div>
                        
                    </td>

                    <td colspan="2">
                         <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Wagon/Van Pick-up </small></i>
                        </div>
                       
                    </td>

                    <td>
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Truck/Bus </small></i>
                        </div>
                       
                    </td>

                    <td colspan="2">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Mini Bus </small></i>
                        </div>

                        
                    </td>

                    <td colspan="2">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Jeepney </small></i>
                        </div>                       
                    </td>

                    <td colspan="3">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Owner Jeep </small></i>
                        </div>   

                       
                    </td>

                    <td colspan="2">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Tricycle </small></i>
                        </div>  
                        
                    </td>

                    <td colspan="3">
                         <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Motorcycle </small></i>
                        </div>  
                       
                    </td>

                </tr>

                <tr>
                    <td><b>Fuel:</b></td>

                    <td>
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> LPG </small></i>
                        </div>  
                        
                    </td>

                    <td colspan="2">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Wood </small></i>
                        </div> 
                        
                    </td>

                    <td colspan="2">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Electric </small></i>
                        </div> 
                        
                    </td>

                    <td colspan="2">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Charcoal </small></i>
                        </div> 
                        
                    </td>

                    <td colspan="6">
                        <div class="d-inline-flex">
                            <i class="bi bi-square"><small> Others Specify: </small></i>
                        </div> 
                       
                    </td>

                </tr>

            </table>
        </div>
    </div>




	<table width="100%" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
            <td><b><u>Educational Attainment:</u></b><br>
                DC = Daycare<br>
                K = Kindergarten<br>
                Gr1 to Gr6 = Elementary Student<br>
                EG 		= Elementary Graduate<br>
                HS1 to HS4  	= High School Student<br>
                HG      	= High School Graduate<br>
                C1 to C or C5 	= College Student<br>
                CG 		= College Graduate/Course<br>
                VT		= Vocational/Technical Student<br>
                VTG		= Vocational/Technical Graduate/Course<br></td>
            <td><b><u>Dialect</u></b> <br>
                P = Pangasinan<br>
                I = Ilocano <br>
                T = Tagalog <br>
                C = Pampango <br>
                V = Viscaya/Cebuano <br>
                <b><u>Toilet Facility</u></b> <br>
                WS = Water Sealed Closet <br>
                AT = Antipolo Type <br>
                OP = Open Pit <br>
                </td>
            <td><b><u>Religion:</u></b><br>
                RC = Roman Catholic <br>
                INC = Iglesia ni Cristo <br>
                I = Islam <br>
                LS = Latter Day Saints <br>
                M = Metodists <br>
                CH = Christian <br>
                JW = Jehovah's Witness <br>
                H = Hinduism <br>
                B = Baptist <br>
                SDA = Seven Day Adventist<br>
                MN = Mennonites 
                </td>
            <td><b><u>Type of Work:</u></b> <br>
                A = Animal Raising <br>
                B = Blacksmithing/Bolo Making <br>
                C = Constraction <br>
                D = Driving <br>
                F = Farming <br>
                H = Handcrafting/Weaving <br>
                L = Labor/Helper <br>
                N = NativeCake Production <br>
                O = Overseas Filipino Worker <br>
                P = Professional <br>
                R = Retail <br>
                S = Services <br>
                T = Tailoring/Dressmaking <br>
                V = Vendor </td>
            <td>PT = Part Time <br>
                FT = full Time <br>
                <br>
                
                Fuel:<br>
                *Charcoal <br>
                *Gas/ Kerosene <br>
                *Saw Dust <br>
                * Rice Husk
                </td>
            </tr>
        </tbody>
    </table>

				<div class="form-group">
                  <button onclick="window.print()"  class="btn btn-success">Print </button>
                </div>


	

 </div>
</div>



<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header  ">
        <h5 class="modal-title p-0" id="staticBackdropLabel">HOUSEHOLD INFORMATION</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="<?php echo base_url('Survey/housingInformation')?>" class="" method="post" id="housingInfoForm">
            <input type="hidden" name="formID" value="<?php echo $Form_ID; ?>">

                <div class="row g-3 mb-3">
                    <!-- Name -->
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Name</label>
                        <input type="text" class="form-control form-control-sm" name="firstName" id="formGroupExampleInput" placeholder="First Name">
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">&nbsp;</label>
                        <input type="text" class="form-control form-control-sm" name="middleName" id="formGroupExampleInput" placeholder="Middle Name">
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">&nbsp;</label>
                        <input type="text" class="form-control form-control-sm" name="lastName" id="formGroupExampleInput" placeholder="Last Name">
                    </div>

                </div>

                <div class="row g-3 mb-3">
                    <!-- Age Sex Nationality  Civil Status-->

                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Age</label>
                        <input type="text" class="form-control form-control-sm" name="age" id="formGroupExampleInput" placeholder="Age">
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Sex</label>
                        <select class="form-select form-select-sm" name="sex" aria-label="Select Options">
                            <option  selected disabled>Select Options</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Nationality</label>
                        <input type="text" class="form-control form-control-sm" name="nationality" id="formGroupExampleInput" value="Filipino" placeholder="Nationality">
                    </div>

                    

                </div>


                <div class="row g-3 mb-3">
                    <!-- Migrated from other place,  Highest/Latest Educational Attainment, School Attended-->

                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label" >Civil Status</label>
                        <select class="form-select form-select-sm" name="civil_stat" aria-label="Select Options">
                            <option selected disabled>Select Options</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Separated">Separated</option>
                            <option value="Divorced">Divorced</option>
                        </select>
                    </div>


                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Migrated from other place(2005 to present)</label>
                        <select class="form-select form-select-sm" name="migrate" aria-label="Select Options">
                            <option selected disabled>Select Options</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          
                        </select>
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Highest/Latest Educational Attainment</label>
                        <select class="form-select form-select-sm" name="educationalAttainment" aria-label="Select Options">
                            <option value="" selected > </option>
                            <option value="DC">DC = Daycare</option>
                            <option value="K">K = Kindergarten</option>
                            <option value="Gr1">Gr1 = Elementary Student</option>
                            <option value="Gr2">Gr2 = Elementary Student</option>
                            <option value="Gr3">Gr3 = Elementary Student</option>
                            <option value="Gr4">Gr4 = Elementary Student</option>
                            <option value="Gr5">Gr5 = Elementary Student</option>
                            <option value="Gr6">Gr6 = Elementary Student</option>
                            <option value="EG">EG = Elementary Graduate</option>
                            <option value="HS1">HS1	= High School Student</option>
                            <option value="HS2">HS2	= High School Student</option>
                            <option value="HS3">HS3	= High School Student</option>
                            <option value="HS4">HS4 = High School Student</option>
                            <option value="HG">HG   = High School Graduate</option>
                            <option value="C1"> C1  = College Student</option>
                            <option value="C2"> C2	= College Student</option>
                            <option value="C3"> C3 	= College Student</option>
                            <option value="C4"> C4  = College Student</option>
                            <option value="C5"> C5 	= College Student</option>
                            <option value="CG">CG = College Graduate/Course</option>
                            <option value="VT">VT = Vocational/Technical Student</option>
                            <option value="VTG">VTG	= Vocational/Technical Graduate/Course</option>
                        </select>
                    </div>
                   
                    

                </div>


                <div class="row g-3 mb-3">
                    <!--OSY?(for 6 to 21 years old), Can Read & Write? , -->

                     <div class="col">
                        <label for="formGroupExampleInput" class="form-label">School Attended</label>
                        <select class="form-select form-select-sm" name="schoolAttended" aria-label="Select Options">
                            <option value="" selected > </option>
                            <option value="public">Public</option>
                            <option value="private">Private</option>
                            <option value="both">Both Public and Private</option>
                        </select>
                    </div>


                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">OSY? (for 6 to 21 years old)</label>
                        <input type="text" class="form-control form-control-sm" name="osy" id="formGroupExampleInput" placeholder="OSY">
                    </div>

                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Can Read & Write?</label>
                        <select class="form-select form-select-sm" name="crw" aria-label="Select Options">
                            <option value="yes" selected>Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    

                </div>

                <div class="row g-3 mb-3">
                    <!--Employement -->

                     <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Employement</label>
                        <select class="form-select form-select-sm" name="employment" aria-label="Select Options">
                            <option  value="" selected > </option>
                            <option value="government" >Government</option>
                            <option value="private">Private</option>
                        </select>
                    </div>

                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Type of Work <i class="text-muted"><small>(For non goverment employee )</small></i></label>
                            <select class="form-select form-select-sm" name="work" aria-label="Select Options">
                                <option value="" selected > </option>
                                <option value="A">A = Animal Raising</option>
                                <option value="B">B = Blacksmithing/Bolo Making</option>
                                <option value="C">C = Constraction</option>
                                <option value="D">D = Driving</option>
                                <option value="F">F = Farming</option>
                                <option value="H">H = Handcrafting/Weaving</option>
                                <option value="L">L = Labor/Helper</option>
                                <option value="N">N = NativeCake Production</option>
                                <option value="O">O = Overseas Filipino Worker</option>
                                <option value="P">P = Professional</option>
                                <option value="R">R = Retail</option>
                                <option value="S">S = Services</option>
                                <option value="T">T = Tailoring/Dressmaking</option>
                                <option value="V">V = Vendor</option>
                            </select>
                    </div>

                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">&nbsp;</label>
                        <select class="form-select form-select-sm" name="ftpt" aria-label="Select Options">
                            <option value="" selected> </option>
                            <option value="FT" >Full Time</option>
                            <option value="PT" >Part Time</option>
                        </select>
                    </div>

                   

                </div>



                <div class="row g-3 mb-3">
                    <!--Combined Monthly Family Income ,  Major Dialect , Main Religion-->

                     <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Combined Monthly Family Income</label>
                        <input type="text" class="form-control form-control-sm" name="income" id="formGroupExampleInput" placeholder="">

                    </div>

                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Major Dialect</label>
                            <select class="form-select form-select-sm" name="dialect" aria-label="Select Options">
                                <option selected disabled>Select Options</option>
                                <option value="P">P = Pangasinan</option>
                                <option value="I">I = Ilocano </option>
                                <option value="T">T = Tagalog </option>
                                <option value="C">C = Pampango </option>
                                <option value="V">V = Viscaya/Cebuano </option>
                            </select>
                    </div>

                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Main Religion</label>
                        <select class="form-select form-select-sm" name="religion" aria-label="Select Options">
                            <option  selected disabled>Select Options</option>
                            <option value="RC">RC = Roman Catholic </option>
                            <option value="INC">INC = Iglesia ni Cristo </option>
                            <option value="I">I = Islam </option>
                            <option value="LS">LS = Latter Day Saints </option>
                            <option value="M">M = Metodists </option>
                            <option value="CH">CH = Christian </option>
                            <option value="JW">JW = Jehovah's Witness </option>
                            <option value="H">H = Hinduism </option>
                            <option value="B">B = Baptist </option>
                            <option value="SDA">SDA = Seven Day Adventist</option>
                            <option value="MN">MN = Mennonites </option>
                        </select>
                    </div>

                   

                </div>


        </form>


        
 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn " data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="housingSubmit()">Add data</button>
      </div>
    </div>
  </div>
</div>








<!-- Modal -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header  ">
        <h5 class="modal-title p-0" id="staticBackdropLabel">HOUSING</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        
        <form action="" class="" method="post" >

            <!-- 
            <div class="row g-3 mb-3">
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">House</label>
                        <select class="form-select form-select-sm" aria-label="Select Options">
                            <option  selected disabled>Select Options</option>
                            <option value="owned">Owned</option>
                            <option value="rented">Rented</option>
                            <option value="caretaker">Caretaker</option>
                        </select>
                    </div>


                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Lot</label>
                        <select class="form-select form-select-sm" aria-label="Select Options">
                            <option  selected disabled>Select Options</option>
                            <option value="owned">Owned</option>
                            <option value="rented">Rented</option>
                            <option value="caretaker">Caretaker</option>
                        </select>
                    </div>

                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Type</label>
                        <select class="form-select form-select-sm" aria-label="Select Options">
                            <option  selected disabled>Select Options</option>
                            <option value="Single">Single</option>
                            <option value="Single-Duplex">Single, Duplex</option>
                            <option value="Two-Storey-Duplex">Two Storey, Duplex</option>
                            <option value="Two-Storey">Two Storey</option>
                            <option value="others">Others</option>
                        </select>
                    </div>

                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Materials</label>
                        <select class="form-select form-select-sm" aria-label="Select Options">
                            <option  selected disabled>Select Options</option>
                            <option value="Concrete">Concrete</option>
                            <option value="Wood">Wood</option>
                            <option value="Mixed">Mixed</option>
                            <option value="Nipa">Nipa</option>
                            <option value="Shanty">Shanty</option>
                        </select>
                    </div>

            </div>

            <div class="row g-3 mb-3">

                <div class="col">
                    <label for="formGroupExampleInput" class="form-label">Housing Risk Factors</label>
                    <select class="form-select form-select-sm" aria-label="Select Options">
                        <option  selected disabled>Select Options</option>
                        <option value="Along PNR">Along PNR</option>
                        <option value="Along High Way">Along High Way</option>
                        <option value="Flood Prone Area">Flood Prone Area</option>
                        <option value="Along Riverbanks">Along Riverbanks</option>
                        <option value="Squatters Area">Squatters Area</option>
                        <option value="Others">Others</option>
                    </select>
                </div>   

                <div class="col">
                    <label for="formGroupExampleInput" class="form-label">Electricity</label>
                    <select class="form-select form-select-sm" aria-label="Select Options">
                        <option  selected disabled>Select Options</option>
                        <option value="DECORP">DECORP</option>
                        <option value="CENPELCO">CENPELCO</option>
                        <option value="NONE">NONE</option>
                    </select>
                </div>

                <div class="col">
                    <label for="formGroupExampleInput" class="form-label">Telecommunications</label>
                    <select class="form-select form-select-sm" size="6" multiple aria-label="multiple select example" aria-label="Select Options">
                        <option value="PLDT">PLDT</option>
                        <option value="DIGITAL">DIGITAL</option>
                        <option value="SMART">SMART</option>
                        <option value="GLOBE">GLOBE</option>
                        <option value="SUN">SUN</option>
                        <option value="Others">Others</option>
                        <option value="None">None</option>
                    </select>
                </div>

                   


            </div>


            <div class="row g-3 mb-3">

                <div class="col">
                    <label for="formGroupExampleInput" class="form-label">Toilet Facilitie</label>
                    <div class="col row">
                        <div class="col-6">
                            <label for="staticNo" class="col-sm-2 col-form-label">No.:</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control form-control-sm" id="staticNo" >
                            </div>
                        </div>

                        <div  class="col-6">
                            <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-10">
                                <select class="form-select form-select-sm" aria-label="Select Options">
                                    <option  selected disabled>Select Options</option>
                                    <option value="DECORP">DECORP</option>
                                    <option value="CENPELCO">CENPELCO</option>
                                    <option value="NONE">NONE</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>   

                

                <div class="col d-none">
                    <label for="formGroupExampleInput" class="form-label">Telecommunications</label>
                    <select class="form-select form-select-sm" size="6" multiple aria-label="multiple select example" aria-label="Select Options">
                        <option value="PLDT">PLDT</option>
                        <option value="DIGITAL">DIGITAL</option>
                        <option value="SMART">SMART</option>
                        <option value="GLOBE">GLOBE</option>
                        <option value="SUN">SUN</option>
                        <option value="Others">Others</option>
                        <option value="None">None</option>
                    </select>
                </div>

                   


            </div> -->

            <div class="container">
                 <div class="row g-3 mb-3">

                    
                    <!-- Name -->
                    <div class="col ">
                            <label for="formGroupExampleInput" class="form-label w-auto m-0 p-0 fw-bold">Business at Home</label>
                            <input type="text" class="form-control form-control-sm input-underline w-50" id="formGroupExampleInput" >

                    </div>

                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label w-auto m-0 p-0 fw-bold">Floor Area(Sq. M.)</label>
                        <input type="text" class="form-control form-control-sm input-underline  w-50" id="formGroupExampleInput" >
                    </div>

                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label w-auto m-0 p-0 fw-bold">No. of Employees:</label>
                        <input type="text" class="form-control form-control-sm input-underline w-50" id="formGroupExampleInput" >
                    </div>

                </div>
            </div>

            <table class="table  table-bordered container">
                <thead>
                    <tr>
                        <th colspan="4">
                            <h4>Housing</h4>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>House</th>
                        <th>Lot</th>
                        <th>Type</th>
                        <th>Materials</th>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="h-owned" value="option1">
                                <label class="form-check-label" for="h-owned"><small>Owned</small></label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="l-owned" value="option1">
                                <label class="form-check-label" for="l-owned"><small>Owned</small></label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="t-single" value="option1">
                                <label class="form-check-label" for="t-single"><small>Single</small></label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="m-concrete" value="option1">
                                <label class="form-check-label" for="m-concrete"><small>Concrete</small></label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="h-Rented" value="option1">
                                <label class="form-check-label" for="h-Rented"><small>Rented</small></label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="l-Rented" value="option1">
                                <label class="form-check-label" for="l-Rented"><small>Rented</small></label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="t-single-Duplex" value="option1">
                                <label class="form-check-label" for="t-single-Duplex"><small>Single, Duplex</small></label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="m-Wood" value="option1">
                                <label class="form-check-label" for="m-Wood"><small>Wood</small></label>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="h-Caretaker" value="option1">
                                <label class="form-check-label" for="h-Caretaker"><small>Caretaker</small></label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="l-Caretaker" value="option1">
                                <label class="form-check-label" for="l-Caretaker"><small>Caretaker</small></label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="t-two-storey-Duplex" value="option1">
                                <label class="form-check-label" for="t-two-storey-Duplex"><small>Two Storey, Duplex</small></label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="m-Mixed" value="option1">
                                <label class="form-check-label" for="m-Mixed"><small>Mixed</small></label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td></td>

                        <td></td>

                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="t-two-storey" value="option1">
                                <label class="form-check-label" for="t-two-storey"><small>Two Storey</small></label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="m-Nipa" value="option1">
                                <label class="form-check-label" for="m-Nipa"><small>Nipa</small></label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td></td>

                        <td></td>

                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="t-Others" value="option1">
                                <label class="form-check-label" for="t-Others"><small>Others</small></label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="m-Shanty" value="option1">
                                <label class="form-check-label" for="m-Shanty"><small>Shanty</small></label>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <th colspan="4">
                            <h4>Housing Risk Factors</h4>
                        </th>
                    </tr>

                    <tr>
                        <td colspan="1">
                             <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="hrf-Along-PNR" value="option1">
                                <label class="form-check-label" for="hrf-Along-PNR"><small>Along PNR</small></label>
                            </div>
                        </td>

                        <td colspan="1">
                             <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="hrf-Along-Highway" value="option1">
                                <label class="form-check-label" for="hrf-Along-Highway"><small>Along Highway</small></label>
                            </div>
                        </td>

                        <td colspan="1">
                             <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="hrf-Along-Riverbanks" value="option1">
                                <label class="form-check-label" for="hrf-Along-Riverbanks"><small>Along Riverbanks</small></label>
                            </div>
                        </td>

                        <td colspan="1">
                             <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="hrf-Flood-Prone-area" value="option1">
                                <label class="form-check-label" for="hrf-Flood-Prone-area"><small>Flood Prone Area</small></label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1">
                             <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="hrf-Squatters-Area" value="option1">
                                <label class="form-check-label" for="hrf-Squatters-Area"><small>Squatters Area</small></label>
                            </div>
                        </td>

                         <td colspan="1">
                             <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="hrf-Others" value="option1">
                                <label class="form-check-label" for="hrf-Others"><small>Others</small></label>
                            </div>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>


                </tbody>
            </table>


            <table  class="table  table-bordered container">
                <tbody>
                    <tr>
                        <th colspan="2">Electricity:</th>
                        <td colspan="2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="ecl-DECORP" value="option1">
                                <label class="form-check-label" for="ecl-DECORP"><small>DECORP</small></label>
                            </div>
                        </td>

                        <td colspan="2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="ecl-CENPELCO" value="option1">
                                <label class="form-check-label" for="ecl-CENPELCO"><small>CENPELCO</small></label>
                            </div>
                        </td>

                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="ecl-None" value="option1">
                                <label class="form-check-label" for="ecl-None"><small>None</small></label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                         <th colspan="7">Telecommunications:</th>
                    </tr>
                    <tr>
                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="tel-PLDT" value="option1">
                                <label class="form-check-label" for="tel-PLDT"><small>PLDT</small></label>
                            </div>
                        </td>

                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="tel-DIGITAL" value="option1">
                                <label class="form-check-label" for="tel-DIGITAL"><small>DIGITAL</small></label>
                            </div>
                        </td>

                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="tel-SMART" value="option1">
                                <label class="form-check-label" for="tel-SMART"><small>SMART</small></label>
                            </div>
                        </td>

                         <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="tel-GLOBE" value="option1">
                                <label class="form-check-label" for="tel-GLOBE"><small>GLOBE</small></label>
                            </div>
                        </td>

                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="tel-SUN" value="option1">
                                <label class="form-check-label" for="tel-SUN"><small>SUN</small></label>
                            </div>
                        </td>

                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="tel-OTHER" value="option1">
                                <label class="form-check-label" for="tel-OTHER"><small>OTHER</small></label>
                            </div>
                        </td>

                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="tel-None" value="option1">
                                <label class="form-check-label" for="tel-None"><small>None</small></label>
                            </div>
                        </td>

                    </tr>


                    <tr>
                        <th colspan="7">Toilet Facilities</th>
                    </tr>
                    <tr>
                        <td colspan="2">
                             <div class="col d-flex">
                                <label for="formGroupExampleInput" class="form-label">No.:</label>
                                <input type="text" class="form-control form-control-sm w-50 ms-2" id="formGroupExampleInput" >
                            </div>
                        </td>

                        <td colspan="1">
                            Type: 
                        </td>

                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="TF-WS" value="option1">
                                <label class="form-check-label" for="TF-WS"><small>WS</small></label>
                            </div>
                        </td>

                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="TF-AT" value="option1">
                                <label class="form-check-label" for="TF-AT"><small>AT</small></label>
                            </div>
                        </td>

                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="TF-OP" value="option1">
                                <label class="form-check-label" for="TF-OP"><small>OP</small></label>
                            </div>
                        </td>

                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="TF-NONE" value="option1">
                                <label class="form-check-label" for="TF-NONE"><small>NONE</small></label>
                            </div>
                        </td>

                    </tr>

                    <tr>
                        <th colspan="7">Refuse Disposal</th>
                    </tr>
                    <tr>
                        <td colspan="1">
                            Type: 
                        </td>

                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="RD-Burning" value="option1">
                                <label class="form-check-label" for="RD-Burning"><small>Burning</small></label>
                            </div>
                        </td>

                        

                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="RD-Dumping" value="option1">
                                <label class="form-check-label" for="RD-Dumping"><small>Dumping</small></label>
                            </div>
                        </td>

                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="RD-Burying" value="option1">
                                <label class="form-check-label" for="RD-Burying"><small>Burying</small></label>
                            </div>
                        </td>

                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="RD-Composting" value="option1">
                                <label class="form-check-label" for="RD-Composting"><small>Composting</small></label>
                            </div>
                        </td>

                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="RD-Animal-Feeds" value="option1">
                                <label class="form-check-label" for="RD-Animal-Feeds"><small>Animal Feeds</small></label>
                            </div>
                        </td>

                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="RD-Garbage Truck Collection" value="option1">
                                <label class="form-check-label" for="RD-Garbage Truck Collection"><small>Garbage Truck Collection</small></label>
                            </div>
                        </td>

                    </tr>



                    <tr>
                        <th colspan="7">Personal Transporatation <i class="text-muted"><small>(write the number of vehicle types owned, if any, in their appropriate box/es)</small></i></th>
                    </tr>
                    <tr>
                        <td colspan="2">
                             <div class="col d-flex">
                                <label for="formGroupExampleInput" class="form-label">GCar</label>
                                <input type="text" class="form-control form-control-sm w-50 ms-2" id="formGroupExampleInput" >
                            </div>
                        </td>

                        <td colspan="2">
                            <div class="col d-flex">
                                <label for="formGroupExampleInput" class="form-label">Wagon/Van Pick-up</label>
                                <input type="text" class="form-control form-control-sm w-50 ms-2" id="formGroupExampleInput" >
                            </div>
                        </td>

                        

                        <td colspan="2">
                            <div class="col d-flex">
                                <label for="formGroupExampleInput" class="form-label">Truck/Bus</label>
                                <input type="text" class="form-control form-control-sm w-50 ms-2" id="formGroupExampleInput" >
                            </div>
                        </td>

                        <td colspan="1">
                            <div class="col d-flex">
                                <label for="formGroupExampleInput" class="form-label">Mini Bus</label>
                                <input type="text" class="form-control form-control-sm w-50 ms-2" id="formGroupExampleInput" >
                            </div>
                        </td>

                       

                    </tr>
                     <tr>
                        <td colspan="2">
                             <div class="col d-flex">
                                <label for="formGroupExampleInput" class="form-label">Jeepney</label>
                                <input type="text" class="form-control form-control-sm w-50 ms-2" id="formGroupExampleInput" >
                            </div>
                        </td>

                        <td colspan="2">
                            <div class="col d-flex">
                                <label for="formGroupExampleInput" class="form-label">Owner Jeep</label>
                                <input type="text" class="form-control form-control-sm w-50 ms-2" id="formGroupExampleInput" >
                            </div>
                        </td>

                        

                        <td colspan="2">
                            <div class="col d-flex">
                                <label for="formGroupExampleInput" class="form-label">Tricycle</label>
                                <input type="text" class="form-control form-control-sm w-50 ms-2" id="formGroupExampleInput" >
                            </div>
                        </td>

                        <td colspan="1">
                            <div class="col d-flex">
                                <label for="formGroupExampleInput" class="form-label">Motorcycle</label>
                                <input type="text" class="form-control form-control-sm w-50 ms-2" id="formGroupExampleInput" >
                            </div>
                        </td>

                       

                    </tr>

                    <tr>
                        <th colspan="1">Fuel: </th>
                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="F-LPG" value="option1">
                                <label class="form-check-label" for="F-LPG"><small>LPG</small></label>
                            </div>
                        </td>
                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="F-Wood" value="option1">
                                <label class="form-check-label" for="F-Wood"><small>Wood</small></label>
                            </div>
                        </td>
                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="F-Electric" value="option1">
                                <label class="form-check-label" for="F-Electric"><small>Electric</small></label>
                            </div>
                        </td>
                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="F-Charcoal" value="option1">
                                <label class="form-check-label" for="F-Charcoal"><small>Charcoal</small></label>
                            </div>
                        </td>
                        <td colspan="2">
                            <div class="col d-flex">
                                <label for="formGroupExampleInput" class="form-label">Others Specify:</label>
                                <input type="text" class="form-control form-control-sm w-50 ms-2" id="formGroupExampleInput" >
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th colspan="7">Water Supply</th>
                    </tr>
                    
                    <tr>
                        <td colspan="1">Deep Well : </td>
                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="DW-Public" value="option1">
                                <label class="form-check-label" for="DW-Public"><small>Public</small></label>
                            </div>
                        </td>
                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="DW-Private" value="option1">
                                <label class="form-check-label" for="DW-Private"><small>Private</small></label>
                            </div>
                        </td>
                        <td colspan="1"></td>
                        
                        <td colspan="3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="pp-Public" value="option1">
                                <label class="form-check-label" for="pp-Public"><small>Pressure Pump(Jet Matic)</small></label>
                            </div>
                        </td>


                        
                    </tr>

                    <tr>

                        <td colspan="1">Shallow Well : </td>
                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="SW-Public" value="option1">
                                <label class="form-check-label" for="SW-Public"><small>Public</small></label>
                            </div>
                        </td>
                        <td colspan="1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="SW-Private" value="option1">
                                <label class="form-check-label" for="SW-Private"><small>Private</small></label>
                            </div>
                        </td>

                        <td colspan="1"></td>

                        
                        <td colspan="3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="IC-Private" value="option1">
                                <label class="form-check-label" for="IC-Private"><small>Individual Connection(Water District)</small></label>
                            </div>
                        </td>
                    </tr>


                    <!-- <tr>
                        <td colspan="1">Deep Well</td>
                        <td colspan="1">Shallow Well</td>
                        <td colspan="2" rowspan="2">Pressure Pump(Jet matic)</td>
                        <td colspan="3" rowspan="2">Individual Connection(Water District)</td>
                    </tr> -->
                   

                </tbody>
            </table>

        </form>


        
 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn " data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add data</button>
      </div>
    </div>
  </div>
</div>

<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    // var m = new bootstrap.Modal(document.getElementById('staticBackdrop1') )
    // m.show();

    function housingSubmit(){
        $('#housingInfoForm').submit();
    }
    $(document).on('submit' , '#housingInfoForm' , function(e){
        e.preventDefault();

        var datas = $(this).serialize();
        var url = $(this).attr('action');
        $.post(url,datas , function(r){
            alert(r)
            console.log(r);
        })
    })

    function createTableRow(params) {

        var tbody = $('tbody#householdInfo');
        tbody.html('')
        if (typeof params == 'object') {
            var No = 1;
            params.map( function(e){
                console.log(e);
                var tr = `<tr>
                    <td><span class="d-flex fw-bold"><span class="m-auto">${No}</span></span></td>
                    <td><span class="d-flex"><span class="m-auto "> <a href="" class="edit-link pe-1 ps-1"  data-bs-toggle="tooltip" data-bs-placement="top" title="Click to edit" >${e.lastname+", " + e.firstname+", " + e.middlename}</a> </span></span></td>
                    <td>${e.age}</td>
                    <td>${e.sex}</td>
                    <td>${e.nationality}</td>
                    <td>${e['Civil Status']}</td>
                    <td>${e.migrated_from}</td>
                    <td>${e.education_attainment}</td>`
                    
                    if (e['School Attended'] == 'both') {
                        tr += `<td><span class="d-flex "><span class="m-auto"><i class="fa fa-check-square-o m-auto " ></i></span></span></td>
                                <td><span class="d-flex "><span class="m-auto"><i class="fa fa-check-square-o m-auto " ></i></span></span></td>`
                    }else if(e['School Attended'] == 'public'){
                            tr += `<td><span class="d-flex "><span class="m-auto"><i class="fa fa-check-square-o m-auto " ></i></span></span></td>
                                <td></td>`
                    }else if(e['School Attended'] == 'private'){
                                tr += `<td></td>
                                <td><span class="d-flex "><span class="m-auto"><i class="fa fa-check-square-o m-auto " ></i></span></span></td>`
                    }else{
                        tr += `<td></td>
                                <td></td>`
                    }

                    // if (e.OSY == 'yes') {
                    //     tr += `<td><span class="d-flex "><span class="m-auto"><i class="fa fa-check-square-o m-auto " ></i></span></span></td>` //`<td>${e.OSY}</td>`
                    // }else{
                    //     tr += `<td>&nbsp;</td>`;
                    // }
                    tr += `<td>${e.OSY}</td>`

                    if (e['Can Read Write'] == 'yes') {
                        tr += `<td><span class="d-flex "><span class="m-auto"><i class="fa fa-check-square-o m-auto " ></i></span></span></td><td>&nbsp;</td>` //`<td>${e.OSY}</td>`
                    }else{
                        tr += `<td>&nbsp;</td><td><span class="d-flex "><span class="m-auto"><i class="fa fa-check-square-o m-auto " ></i></span></span></td>`;
                    }
                    
                    var emp = JSON.parse(e.Employement);
                    if (emp.employ !== null) {
                        if (emp.employ == 'government') {
                            tr +=`
                            <td><span class="d-flex "><span class="m-auto"><i class="fa fa-check-square-o m-auto " ></i></span></span></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>`
                        }else{
                            tr +=`
                            <td>&nbsp;</td>
                            <td>${emp.work}</td>`;

                            if (emp.type == 'FT') {
                                tr += `
                                <td><span class="d-flex "><span class="m-auto"><i class="fa fa-check-square-o m-auto " ></i></span></span></td>
                                <td>&nbsp;</td>
                                `
                            }else{
                                tr += `
                                <td>&nbsp;</td>
                                <td><span class="d-flex "><span class="m-auto"><i class="fa fa-check-square-o m-auto " ></i></span></span></td>
                                `
                            }
                           
                        }
                    }else{
                        tr +=`
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>`
                    }
                    const formatter = new Intl.NumberFormat('en-PH', {
                            style: 'currency',
                            currency: 'Php'
                        });

                    tr +=`
                        <td>${(e['Combined Monthly Income'])? formatter.format(e['Combined Monthly Income']) : ''}</td>
                        <td>${e['Major Dialect']}</td>
                        <td>${e['Main Religion']}</td>
                    </tr>`;
                
                No++;
                tbody.append(tr);
                
            }) 

            var blankRow = `<tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>`
            var trCount = tbody.children('tr').length;
            if (trCount < 5) {
                for (let index = 0; index < (5 - trCount); index++) {
                    tbody.append(blankRow);
                }
            }else{
                tbody.append(blankRow);
            }
            

            
            console.log(trCount);

            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        }

        
       
    }

    function getHouseholdInformation(id) {
        var url = '<?php echo base_url('Survey/getDataFromFormId/')?>'+id ; 
        $.get(url,function (r) {
            try {
               var data = JSON.parse(r)
            } catch (error) {
                console.error(error);
            }
            createTableRow(data)
        })
    }
    getHouseholdInformation('<?php  echo $Form_ID; ?>');
</script>