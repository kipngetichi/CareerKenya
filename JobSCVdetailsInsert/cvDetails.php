
<?php
require_once ("../include/initialize.php");


$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	

 
	}
   
	function doInsert(){
		global $mydb;
		if(isset($_POST['save'])){
 //clientCVServiceCode `COMPANYID`, `OCCUPATIONTITLE`, `REQ_NO_EMPLOYEES`, `SALARIES`, `DURATION_EMPLOYEMENT`, `QUALIFICATION_WORKEXPERIENCE`, `JOBDESCRIPTION`, `PREFEREDSEX`, `SECTOR_VACANCY`
		
			
			
			$autonum = New Autonumber();
			   $auto = $autonum->set_autonumber('APPLICANT');
			$insertCVdetails = New insertCVdetails();
			$insertCVdetails->fullName							= $_POST['name']; 
			$insertCVdetails->cvDetailsId						= date('Y').$auto->AUTO;
			$insertCVdetails->phoneNumber					    = $_POST['phoneNumber']; 
			$insertCVdetails->emailAdress                       = $_POST['email'];
			$insertCVdetails->skillsSummary					    = $_POST['skillsSummary'];
			$insertCVdetails->educationLevel					= $_POST['educationLevel'];
			$insertCVdetails->skillsAndCompetencies				= $_POST['skillsAndCompetencies'];
			$insertCVdetails->workExperience		            = $_POST['workExperience'];
			$insertCVdetails->achievements					    = $_POST['achievements'];
			$insertCVdetails->referees					        = $_POST['referees'];			
			$insertCVdetails->dateReceived						= date('Y-m-d H:i');
			$insertCVdetails->create();

			message("Your CV details have been successfully submitted! you we shall deliver within an hour. call/whatsApp 254728065590", "success");
			redirect("../index.php?q=success");
			
		}
		else{
				$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}
		}

	




?>