<?php
	 if(!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }

?> 
	<div class="row">
    <div class="col-lg-12">
            <h1 class="page-header">List of CV details Submitted   </h1>
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
                
 
						<form class="wow fadeInDownaction" action="controller.php?action=delete" Method="POST">   		
							<table id="dash-table" class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">

							  <thead>
							  	<tr>
									<th>full Names</th>
									<th>cv Details Id</th>
									<th>phone Number</th>
									<th>emailAdress</th> 
									<th>skills Summary</th>
									<th>education Level</th>
									<th>skills And Competencies</th>
									<th>work Experience</th>
									<th>achievements</th> 
									<th>referees</th>
									<th>date Received</th>
									<th width="14%" >Action</th> 
							  	</tr>	
							  </thead> 
							  <tbody>
							  	<?php

							  		// $mydb->setQuery("SELECT * 
											// 			FROM  `tblusers` WHERE TYPE != 'Customer'");
							  		$mydb->setQuery(" SELECT `CVid`, `fullName`, `cvDetailsId`, `phoneNumber`, `emailAdress`, `skillsSummary`, `educationLevel`, `skillsAndCompetencies`, `workExperience`, `achievements`, `referees`, `dateReceived` FROM `cvdetailstable` ");
							  		$cur = $mydb->loadResultList();

									foreach ($cur as $result) { 
							  		echo '<tr>';
							  		// echo '<td width="5%" align="center"></td>';
							  		echo '<td>'. $result->fullName.'</td>';
							  		echo '<td>' . $result->cvDetailsId.'</a></td>';
							  		echo '<td>' . $result->phoneNumber.'</a></td>'; 
							  		echo '<td>'. $result->emailAdress.'</td>';
							  		echo '<td>'. $result->skillsSummary.'</td>'; 
							  		echo '<td>'. $result->educationLevel.'</td>';
							  		echo '<td>' . $result->skillsAndCompetencies.'</a></td>';
							  		echo '<td>' . $result->workExperience.'</a></td>'; 
							  		echo '<td>'. $result->achievements.'</td>';
							  		echo '<td>'. $result->referees.'</td>';
                                    echo '<td>'. $result->dateReceived.'</td>';    									
					  				echo '<td align="center" >    
					  		             <a title="View" href="index.php?view=viewDetailCV&id='.$result->CVid.'"  class="btn btn-info btn-xs  ">
					  		             <span class="fa fa-info fw-fa"></span> View</a> 
					  		             <a title="Remove" href="index.php?view=delete&id='.$result->CVid.'"  class="btn btn-danger btn-xs  ">
					  		             <span class="fa fa-trash-o fw-fa"></span> Remove</a> 
					  					 </td>';
							  		echo '</tr>';
							  	} 
							  	?>
							  </tbody>
								
							</table>
 
							 
							</form>
       
                 
 