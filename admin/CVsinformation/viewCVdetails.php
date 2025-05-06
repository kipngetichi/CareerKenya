<?php
	 if(!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }

?> 
<style type="text/css">
.content-header {
	min-height: 50px;
	border-bottom: 1px solid #ddd;
	font-size: 15px;
	font-weight: bold;
}
.content-body {
	min-height: 350px;
	/*border-bottom: 1px solid #ddd;*/
}
.content-body >p {
	padding:10px;
	font-size: 12px;
	font-weight: bold;
	border-bottom: 1px solid #ddd;
}
.content-footer {
	min-height: 100px;
	border-top: 1px solid #ddd;

}
.content-footer > p {
	padding:5px;
	font-size: 15px;
	font-weight: bold; 
}
 
.content-footer textarea {
	width: 100%;
	height: 200px;
}
.content-footer  .submitbutton{  
	margin-top: 20px;
	/*padding: 0;*/

}
</style>

<div class="col-sm-12 content-header" style="color:green">Detailed individual CV Information</div>
<div class="col-sm-12 content-body" > 
<?php 
//$id = $sql ="Select * From tblcompany WHERE COMPANYID=".$res->COMPANYID;
							
$id = $_GET['id'];
							// 			FROM  `tblusers` WHERE TYPE != 'Customer'");
							  		$mydb->setQuery(" SELECT `CVid`, `fullName`, `cvDetailsId`, `phoneNumber`, `emailAdress`, `skillsSummary`, `educationLevel`,
									`skillsAndCompetencies`, `workExperience`, `achievements`, `referees`, `dateReceived` FROM `cvdetailstable` WHERE `CVid`=$id ");
							  		$cur = $mydb->loadResultList();

									foreach ($cur as $result) 
									
									
									{ 
									?>
									
	<p style="color:red">NB: you should follow CV following that oreder</p> 

	<input type="hidden" name="JOBREGID" value="<?php echo $result->CVid;?>">
	<input type="hidden" name="APPLICANTID" value="<?php echo $result->cvDetailsId;?>">
		<ol type="1">
	<div class="col-sm-6">
	<h3><li style="color:blue">Aplicatnts Name</li></h3>
	        <p><i class="fp-ht-bed">Full Name:</i> <b><?php echo $result->fullName; ?></b></p>	

            <p><i class="fp-ht-bed">Phone Number :</i> <b><?php echo $result->phoneNumber; ?></b></p>
            <p><i class="fp-ht-food">Email Adress :</i> <b><?php echo $result->emailAdress;  ?></b></p>
            
        
	</div> 


	<div class="col-sm-12">
		<h3><li style="color:blue">Skills Summary: </li> </h3>  
		<p style="margin-left: 15px;"><b><?php echo $result->skillsSummary;?></b></p>
	</div>
	<div class="col-sm-12"> 
		<h3><li style="color:blue">Applicant education Level: </li></h3>
		<p style="margin-left: 15px;"><b><?php echo $result->educationLevel; ?></b></p>
	</div>
		<div class="col-sm-12"> 
		<h3><li style="color:blue">Applicant skills And Competencies: </li></h3> 
		<p style="margin-left: 15px;"><b><?php echo $result->skillsAndCompetencies; ?></b></p>
	</div>
		<div class="col-sm-12"> 
		<h3><li style="color:blue">Applicant work Experience:  </li></h3>
		<p style="margin-left: 15px;"><b><?php echo $result->workExperience; ?></b></p>
	</div>
		<div class="col-sm-12"> 
		<h3><li style="color:blue">Applicant Achievement: </li></h3>
		<p style="margin-left: 15px;"><b><?php echo $result->achievements; ?></b></p>
	</div>
	<div class="col-sm-12"> 
		<h3><li style="color:blue">Applicant referees: </li></h3>
		<p style="margin-left: 15px;"><b><?php echo $result->referees; ?></b></p> 
		
	</div>
	</ul>
</div>
<?php
							  	} 
							  	?>

</form>