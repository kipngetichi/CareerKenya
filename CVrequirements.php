 <!DOCTYPE html>
<html>
<head>
	<section id="content">

<style>
::placeholder {
  color: red;
  opacity: 1; 
}

::-ms-input-placeholder {
  color: red;
}
</style>
<head>
	<div class="container">
	
		<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>Wondering what a Kenyan, Uganda or Tanzania CV format should look like?</h3>
									<p>There being a hundred or maybe a thousand other candidates who are applying for the same jobs as you, you need your CV to stand out from the pool. </p>
									<p>Remember your CV should give the recruiter the best impression of who you are even before they meet you for an interview.</p>
									<p>The CV should also be in the simplest format that allows the recruiter to go through in the least time possible.</p>
								<h5 style="color: #4287f5">We are here to help you come up with the best competitive RESUME that will stand out and inch you closer to your Dream Job </h5>
								<h4>OUR Charges Kenya<span style="color: #38d121"> Ksh1,500</span>,  Uganda <span style="color: #38d121">43,000ugx</span>, Tnazania <span style="color: #38d121">Tsh30,000</span> </h4>
                                    	<h3>Details Required to have your CV Done</h3>
										<ol type="1">
										<li style="color: #4287f5"><strong>Contact Information</strong></li>
										<p>The contact detail should include your official name, your full time mobile number and your email address.</p>
                                        <li style="color: #4287f5"><strong>Personal Profile</strong></li>
										<p>Most EAST Africa CV format includes the personal profile section which comes second after the contact details. This section seeks to introduce you to the recruiter.</p>
										<p>The personal profile section should include a summary of your skill, experience and the expertise you possess in your particular industry.</p>
                                        <li style="color: #4287f5"><strong>Education section on a Kenyan CV format</strong></li>
										<p>When including Qualification on the CV, make sure to start with the most recent certification as you narrow down to the last one. At this point your primary school education is not relevant so you can do away with it.</p>
										<p>When formatting the education section on your East Africa CV, include your certification followed by the institution and lastly the year you cleared.</p>
                                        <li style="color: #4287f5"><strong>Key Skills and competencies</strong></li>
										<p>Individual professional strength</p>
										<li style="color: #4287f5"><strong>Work experience</strong></li>
										<p>Recruiters’ key interest is with your past and current work experience as this simply tells them whether you have the capability to handle the vacancy they want to fill in their organization.</p>
										<p>Formatting this section, summarize your roles and make sure that you start with the most relevant duties and responsibilities as you narrow down to the very small roles.</p>
										<p>Worked in more than six different positions you can summarize the roles of the last two positions so that only four positions are detailed which gives your CV a good length.</p>
										<li style="color: #4287f5"><strong>Achievements</strong></li>
										<p>On a EAST African CV format it seeks to bring out the different accomplishment you have been able to make during your work life.</p>
										<p>These achievements could include hitting sales targets and introducing new systems in your work place which have been able to make a positive significant change in the company</p>
										<li style="color: #4287f5"><strong>Referees</strong></li>
                                          <p>Details of professionals you have previously worked with that act as your referees.</p>
										  <p>Their information should include their official name, the positions they hold, the companies they work for and their contact details which include the phone numbers and the emails address.</p>




										</ol>
								</div>  
							</div>
						</div>
						
						<form class="form-horizontal span6" action="JobSCVdetailsInsert/cvDetails.php?action=add" method="POST">
	           <div class="row">
				<div class="col-md-6">
								  	
		   <!-- Form itself -->
          <form name="sentMessage" id="contactForm"  novalidate>
	       <h3 style="color: #4287f5">Provide your Details here to help us write your CV</h3>
		 <div class="control-group">
                    <div class="controls">
			<input type="text" class="form-control" 
			   	   placeholder="Full Name" id="name" name="name" required 
			           data-validation-required-message="Please enter your name" />
			  <p class="help-block"></p>
		   </div>
	         </div> 	
                <div class="control-group">
                  <div class="controls">
			<input type="text" class="form-control" placeholder="phone number" 
			   	            id="phoneNumber" name="phoneNumber"  required
			   		   data-validation-required-message="Please enter your phone Number" />
					   <p class="help-block"></p>
		</div>
	    </div> 	
		                <div class="control-group">
                  <div class="controls">
			<input type="email" class="form-control" placeholder="Email" 
			   	            id="email" name="email" required
			   		   data-validation-required-message="Please enter your email" />
					   <p class="help-block"></p>
		</div>
	    </div> 	
			  
			               <div class="control-group">
                 <div class="controls">
				 <textarea rows="10" cols="100" class="form-control" 
                       placeholder="Summary of your Skills" id="skillsSummary" name="skillsSummary" required
		             data-validation-required-message="Please enter enter summary your skills" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
						<p class="help-block"></p>
		</div>  
	    </div> 			

		<div class="control-group">
                 <div class="controls">
				 <textarea rows="10" cols="100" class="form-control" 
                       placeholder="Enter Education Level (list down starting with the most recent certification)" id="educationLevel" required
		       data-validation-required-message="Education Level" name="educationLevel" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
						<p class="help-block"></p>
		</div>            
		</div>
		
		<div class="control-group">
                 <div class="controls">
				 <textarea rows="10" cols="100" class="form-control" 
                       placeholder="Key Skills and competencies(It should be in relation to the job you are applying)" id="skillsAndCompetencies" required
		       data-validation-required-message="Key Skills and competencies" name="skillsAndCompetencies" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
						<p class="help-block"></p>
		</div>
		</div>
               <div class="control-group">
                 <div class="controls">
				 <textarea rows="10" cols="100" class="form-control" 
                       placeholder="Work Experience" id="workExperience" name="workExperience" required
		       data-validation-required-message="Work experience" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
						<p class="help-block"></p>
		</div>
               </div> 
               <div class="control-group">
                 <div class="controls">
				 <textarea rows="10" cols="100" class="form-control" 
                       placeholder="personal Achievements(Achievements could include hitting sales targets and introducing new systems in your work place which have been able to make a positive significant change in the company)" id="achievements" name="achievements" required
		       data-validation-required-message="Work experience" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
						<p class="help-block"></p>
		        </div>
               </div> 
               <div class="control-group">
                 <div class="controls">
				 <textarea rows="10" cols="100" class="form-control" 
                       placeholder="List Atleast 2 referees" id="referees" name="referees" required
		       data-validation-required-message="referees" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
						<p class="help-block"></p>
		        </div>
               </div> 		 			   			   
	     <div id="success"> </div> <!-- For success/fail messages -->
	    <button type="submit" name="save" class="btn btn-primary pull-right">Send</button><br />
          </form>
								</div>
								<div class="col-md-6">
								</div>
							</div>
	</div>
 </form>
	</section>
 </body>
</html>