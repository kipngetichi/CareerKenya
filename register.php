<html>
<head>
<style>
.has-error {
    border: 6px solid red;
}
.has-success {
    border: 3px solid green
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.css" integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput-jquery.min.js" integrity="sha512-QK4ymL3xaaWUlgFpAuxY+6xax7QuxPB3Ii/99nykNP/PlK3NTQa/f/UbQQnWsM4h5yjQoMjWUhCJbYgWamtL6g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>



<section id="content">
    <div class="container content">    
     <p> <?php check_message();?></p>      
		<form class="row form-horizontal span6  wow fadeInDown" action="process.php?action=register" method="POST">
		<h2 class=" ">Personal Info</h2>
		<div class="row"> 
			<div class="form-group">
				<div class="col-md-8">
				<label class="col-md-4 control-label" for="fName">Firstname:</label>

					<div class="col-md-8">
					  
					   <input class="form-control input-sm" id="fName" name="fName" placeholder="Firstname" type="text" required>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="lName">Lastname:</label>

					<div class="col-md-8">  
					  <input  class="form-control input-sm" id="lName" name="lName" placeholder="Last name" required>
					  </div>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="mName">Middle Name:</label>

					<div class="col-md-8">
					  
					  <input  class="form-control input-sm" id="mName" name="mName" required  placeholder="Middle Name">
					   <!-- <input class="form-control input-sm" id="DEPARTMENT_DESC" name="DEPARTMENT_DESC" placeholder=
					      "Description" type="text" value=""> -->
					</div>
				</div>
			</div> 



			<div class="form-group">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="gender">Sex:</label>

					<div class="col-md-8">
					 <div class="col-lg-5">
					    <div class="radio">
					      <label><input  id="optionsRadios1" name="optionsRadios" type="radio" value="Female">Female</label>
					    </div>
					  </div>

					  <div class="col-lg-4">
					    <div class="radio">
					      <label><input id="optionsRadios2" name="optionsRadios" type="radio" value="Male"> Male</label>
					    </div>
					  </div> 
					 
					</div>
				</div>
			</div>
									<div class="form-group">
												  
			  <div class="col-md-8">
			    <label class="col-md-4 control-label" for="phoneNumber">Mobile Number:</label>
			  	<div class="rows">
				<div class="col-md-2">
			      <select class="form-control input-sm" name="phoneNumber" id="country">
                                      
                                      <option value="">Select Country</option>
                                      <option value="254">Kenya</option>
                                      <option value="255">Tanzania</option>
									  <option value="256">Uganda</option>
									  <option value="211">South Sudan</option>
									  <option value="257">Burundi</option>
									  <option value="250">Rwanda</option>
									  <option value="251">Ethiopia</option>
									  <option value="260">Zambia</option>
									  <option value="265">Malawi</option>
									  <option value="263">Zimbabwe</option>
									  <option value="255">Eritrea</option>
									  <option value="252">Somalia</option>
									  <option value="264">Namibia</option>
									  <option value="267">Botswana</option>
									  <option value="266">Lesotho</option>
                                      <option value="234">Nigeria</option>
									  <option value="27">South Africa</option>

			          <!-- <option value="Fourth" >Fourth</option> -->
			      </select> 
				  
			</div>
                 <div class="col-md-6">  
					  <input type="tel" class="form-control input-sm" id="code" name="phone_no" placeholder="phone Number" required>
					  </div> 
</div>
</div>	
</div>	

			
			 <div class="form-group">
			  <div class="col-md-8">
			    <label class="col-md-4 control-label" for="emailAdress">Email Address:</label> 
			    <div class="col-md-8">
			       <input type="Email" class="form-control input-sm" id="emilAdress" name="emailAdress" placeholder="Email Address"   autocomplete="false"/> 
			    </div>
			  </div>
			</div>  
						<div class="form-group">
			  <div class="col-md-8">
			    <label class="col-md-4 control-label" for="educationLevel">Educational Attainment:</label>
			  	<div class="col-md-8">
			      <select class="form-control input-sm" name="educationLevel" id="educationLevel">
			          <option value="">Select</option>
					  <option value="non-skilled">Non-skilled</option>
			          <option value="certificate">certificate</option>
			          <option value="diploma">Diploma</option>
			          <option value="Bachelors" >Bachelors</option>
					  <option value="masters">Masters</option>
					  <option value="phd" >phd</option>
			          <!-- <option value="Fourth" >Fourth</option> -->
			      </select> 
			</div> 
</div>
</div>	

			<div class="form-group">
			  <div class="rows">
			    <div class="col-md-8"> 
			      <div class="col-md-4">
			        <label class="col-lg-12 control-label">Date of Birth :</label>
			      </div>

			      <div class="col-lg-3">
			        <select class="form-control input-sm" name="month">
			          <option>Month</option>
			          <?php

			             $mon = array('Jan' => 1 ,'Feb'=> 2,'Mar' => 3 ,'Apr'=> 4,'May' => 5 ,'Jun'=> 6,'Jul' => 7 ,'Aug'=> 8,'Sep' => 9 ,'Oct'=> 10,'Nov' => 11 ,'Dec'=> 8 );    
			          
			        
			            foreach ($mon as $month => $value ) {
			              
			                  # code...
			                   echo '<option value='.$value.'>'.$month.'</option>';
			                } 
			          ?>
			        </select>
			      </div>

			      <div class="col-lg-2">
			        <select class="form-control input-sm" name="day">
			          <option>Day</option>
			        <?php 
			          $d = range(31, 1);
			          foreach ($d as $day) {
			            echo '<option value='.$day.'>'.$day.'</option>';
			          }
			        
			        ?>
			          
			        </select>
			      </div>

			      <div class="col-lg-3">
			        <select class="form-control input-sm" name="year">
			          <option>Year</option>
			        <?php 
			          $years = range(2010, 1900);
			          foreach ($years as $yr) {
			            echo '<option value='.$yr.'>'.$yr.'</option>';
			          }
			        
			        ?>
			        
			        </select>
			      </div> 
			    </div>
			  </div>
			</div> 

			 <div class="form-group">
			    <div class="col-md-8">
			      <label class="col-md-4 control-label" for= "nationality">Nationality:</label>
<div class="col-md-8">
<select class="form-control input-sm" name="nationality" id="nationality" required>
<option value="">Select...</option>
<option value="Kenya">Kenyan</option>
<option value="Uganda">Ugandan</option>
<option value="Tanzania">Tanzanian</option>
<option value="Zambia">Zambian</option>
<option value="3">Afghan</option>
<option value="15">Ãlandic</option>
<option value="6">Albanian</option>
<option value="62">Algerian</option>
<option value="233">American</option>
<option value="11">American Samoan</option>
<option value="1">Andorran</option>
<option value="8">Angolan</option>
<option value="5">Anguillan</option>
<option value="9">Antarctic</option>
<option value="4">Antiguan or Barbudan</option>
<option value="10">Argentine</option>
<option value="7">Armenian</option>
<option value="14">Aruban</option>
<option value="13">Australian</option>
<option value="12">Austrian</option>
<option value="16">Azerbaijani, Azeri</option>
<option value="32">Bahamian</option>
<option value="23">Bahraini</option>
<option value="19">Bangladeshi</option>
<option value="18">Barbadian</option>
<option value="26">Barthélemois</option>
<option value="132">Basotho</option>
<option value="36">Belarusian</option>
<option value="20">Belgian</option>
<option value="37">Belizean</option>
<option value="25">Beninese, Beninois</option>
<option value="27">Bermudian, Bermudan</option>
<option value="33">Bhutanese</option>
<option value="93">Bissau-Guinean</option>
<option value="29">Bolivian</option>
<option value="17">Bosnian or Herzegovinian</option>
<option value="34">Bouvet Island</option>
<option value="31">Brazilian</option>
<option value="106">British Indian</option>
<option value="239">British Virgin Island</option>
<option value="77">British, UK</option>
<option value="28">Bruneian</option>
<option value="22">Bulgarian</option>
<option value="21">Burkinabé</option>
<option value="24">Burundian</option>
<option value="52">Cabo Verdean</option>
<option value="117">Cambodian</option>
<option value="47">Cameroonian</option>
<option value="38">Canadian</option>
<option value="30">Caribbean Dutch</option>
<option value="124">Caymanian</option>
<option value="41">Central African</option>
<option value="215">Chadian</option>
<option value="46">Chilean</option>
<option value="48">Chinese</option>
<option value="228">Chinese, Taiwanese</option>
<option value="54">Christmas Island</option>
<option value="39">Cocos Island</option>
<option value="49">Colombian</option>
<option value="119">Comoran, Comorian</option>
<option value="42">Congolese</option>
<option value="45">Cook Island</option>
<option value="50">Costa Rican</option>
<option value="98">Croatian</option>
<option value="51">Cuban</option>
<option value="53">Curaçaoan</option>
<option value="55">Cypriot</option>
<option value="56">Czech</option>
<option value="59">Danish</option>
<option value="58">Djiboutian</option>
<option value="60">Dominica Dominican</option>
<option value="61">Dominican</option>
<option value="40">DR Congolese</option>
<option value="166">Dutch</option>
<option value="63">Ecuadorian</option>
<option value="65">Egyptian</option>
<option value="2">Emirati, Emirian, Emiri</option>
<option value="88">Equatorial Guinean</option>
<option value="67">Eritrean</option>
<option value="64">Estonian</option>
<option value="69">Ethiopian</option>
<option value="72">Falkland Island</option>
<option value="74">Faroese</option>
<option value="71">Fijian</option>
<option value="70">Finnish</option>
<option value="75">French</option>
<option value="80">French Guianese</option>
<option value="175">French Polynesian</option>
<option value="216">French Southern Territories</option>
<option value="76">Gabonese</option>
<option value="85">Gambian</option>
<option value="79">Georgian</option>
<option value="57">German</option>
<option value="82">Ghanaian</option>
<option value="83">Gibraltar</option>
<option value="89">Greek, Hellenic</option>
<option value="84">Greenlandic</option>
<option value="78">Grenadian</option>
<option value="87">Guadeloupe</option>
<option value="92">Guamanian, Guambat</option>
<option value="91">Guatemalan</option>
<option value="111">Guernsey Channel Island</option>
<option value="86">Guinean</option>
<option value="94">Guyanese</option>
<option value="99">Haitian</option>
<option value="96">Heard Island or McDonald Islands</option>
<option value="97">Honduran</option>
<option value="95">Hong Kong, Hong Kongese</option>
<option value="100">Hungarian, Magyar</option>
<option value="118">I-Kiribati</option>
<option value="109">Icelandic</option>
<option value="105">Indian</option>
<option value="101">Indonesian</option>
<option value="108">Iranian, Persian</option>
<option value="107">Iraqi</option>
<option value="102">Irish</option>
<option value="232">Island American</option>
<option value="103">Israeli</option>
<option value="110">Italian</option>
<option value="44">Ivorian</option>
<option value="112">Jamaican</option>
<option value="114">Japanese</option>
<option value="81">Jersey Channel Island</option>
<option value="113">Jordanian</option>
<option value="125">Kazakhstani, Kazakh</option>
<option value="120">Kittitian or Nevisian</option>
<option value="123">Kuwaiti</option>
<option value="116">Kyrgyzstani, Kyrgyz, Kirgiz, Kirghiz</option>
<option value="126">Lao, Laotian</option>
<option value="135">Latvian</option>
<option value="127">Lebanese</option>
<option value="131">Liberian</option>
<option value="136">Libyan</option>
<option value="129">Liechtenstein</option>
<option value="133">Lithuanian</option>
<option value="134">Luxembourg, Luxembourgish</option>
<option value="148">Macanese, Chinese</option>
<option value="144">Macedonian</option>
<option value="246">Mahoran</option>
<option value="142">Malagasy</option>
<option value="156">Malawian</option>
<option value="158">Malaysian</option>
<option value="155">Maldivian</option>
<option value="145">Malian, Malinese</option>
<option value="153">Maltese</option>
<option value="104">Manx</option>
<option value="143">Marshallese</option>
<option value="150">Martiniquais, Martinican</option>
<option value="151">Mauritanian</option>
<option value="154">Mauritian</option>
<option value="157">Mexican</option>
<option value="73">Micronesian</option>
<option value="139">Moldovan</option>
<option value="138">Monégasque, Monacan</option>
<option value="147">Mongolian</option>
<option value="140">Montenegrin</option>
<option value="152">Montserratian</option>
<option value="137">Moroccan</option>
<option value="35">Motswana, Botswanan</option>
<option value="159">Mozambican</option>
<option value="146">Myanmar/Myanmese</option>
<option value="160">Namibian</option>
<option value="169">Nauruan</option>
<option value="168">Nepali, Nepalese</option>
<option value="161">New Caledonian</option>
<option value="171">New Zealand, NZ</option>
<option value="242">Ni-Vanuatu, Vanuatuan</option>
<option value="165">Nicaraguan</option>
<option value="164">Nigerian</option>
<option value="162">Nigerien</option>
<option value="170">Niuean</option>
<option value="163">Norfolk Island</option>
<option value="121">North Korean</option>
<option value="149">Northern Marianan</option>
<option value="167">Norwegian</option>
<option value="172">Omani</option>
<option value="178">Pakistani</option>
<option value="185">Palauan</option>
<option value="183">Palestinian</option>
<option value="173">Panamanian</option>
<option value="176">Papua New Guinean, Papuan</option>
<option value="186">Paraguayan</option>
<option value="174">Peruvian</option>
<option value="177">Philippine, Filipino</option>
<option value="181">Pitcairn Island</option>
<option value="179">Polish</option>
<option value="184">Portuguese</option>
<option value="182">Puerto Rican</option>
<option value="187">Qatari</option>
<option value="188">Réunionese, Réunionnais</option>
<option value="189">Romanian</option>
<option value="191">Russian</option>
<option value="192">Rwandan</option>
<option value="66">Sahrawi, Sahrawian, Sahraouian</option>
<option value="199">Saint Helenian</option>
<option value="128">Saint Lucian</option>
<option value="237">Saint Vincentian, Vincentian</option>
<option value="141">Saint-Martin French</option>
<option value="180">Saint-Pierrais or Miquelonnais</option>
<option value="210">Salvadoran</option>
<option value="204">Sammarinese</option>
<option value="244">Samoan</option>
<option value="209">São Toméan</option>
<option value="193">Saudi, Saudi Arabian</option>
<option value="205">Senegalese</option>
<option value="190">Serbian</option>
<option value="195">Seychellois</option>
<option value="203">Sierra Leonean</option>
<option value="198">Singaporean</option>
<option value="211">Sint Maarten</option>
<option value="202">Slovak</option>
<option value="200">Slovenian, Slovene</option>
<option value="194">Solomon Island</option>
<option value="206">Somali, Somalian</option>
<option value="247">South African</option>
<option value="90">South Georgian</option>
<option value="122">South Korean</option>
<option value="208">South Sudanese</option>
<option value="68">Spanish</option>
<option value="130">Sri Lankan</option>
<option value="196">Sudanese</option>
<option value="207">Surinamese</option>
<option value="201">Svalbard</option>
<option value="213">Swazi</option>
<option value="197">Swedish</option>
<option value="43">Swiss</option>
<option value="212">Syrian</option>
<option value="219">Tajikistani</option>
<option value="218">Thai</option>
<option value="221">Timorese</option>
<option value="217">Togolese</option>
<option value="220">Tokelauan</option>
<option value="224">Tongan</option>
<option value="226">Trinidadian or Tobagonian</option>
<option value="223">Tunisian</option>
<option value="225">Turkish</option>
<option value="222">Turkmen</option>
<option value="214">Turks and Caicos Island</option>
<option value="227">Tuvaluan</option>
<option value="240">U.S. Virgin Island</option>
<option value="230">Ukrainian</option>
<option value="234">Uruguayan</option>
<option value="235">Uzbekistani, Uzbek</option>
<option value="236">Vatican</option>
<option value="238">Venezuelan</option>
<option value="241">Vietnamese</option>
<option value="243">Wallis and Futuna, Wallisian or Futunan</option>
<option value="245">Yemeni</option>
</select>

			      </div>
			    </div>
			  </div> 

			<div class="form-group">
				<div class="col-md-8">
				<label class="col-md-4 control-label" for="location">Location:</label>
				<div class="col-md-8">
			<select class="form-control input-sm" name="location" id="location">
			        <option value="none">Select...</option>
					<option value="Nairobi">Nairobi</option>
					<option value="Mombasa">Mombasa</option>
					<option value="Kisumu">Kisumu</option>
					<option value="Nakuru">Nakuru</option>
					 <option value="Eldoret">Eldoret</option>
					 <option value="Thika">Thika</option>
					 <option value="Tranzoia">Trans Nzoia</option>
					 <option value="Kiambu">Kiambu</option>
					  <option value="Machakos">Machakos</option>
                     <option value="OutsideKenya">Outside Kenya</option>
                     <option value="RemoteWork">Remote (Work From Home)</option>
                     <option value="TheRestOfKenya">Rest of Kenya</option>
                     
                     
                     </select>
					</div>
				</div>
			</div> 


			 <div class="form-group">
			  <div class="col-md-8">
			    <label class="col-md-4 control-label" for=
			    "civilStatus">Civil Status:</label>

			    <div class="col-md-8">
			      <select class="form-control input-sm" name="civilStatus" id="civilStatus">
			          <option value="none" >Select</option>
			          <option value="Single">Single</option>
			          <option value="Married">Married</option>
			          <option value="Widow" >Widow</option>
			          <!-- <option value="Fourth" >Fourth</option> -->
			      </select> 
			    </div>
			  </div>
			</div>  



			<div class="form-group">
			  <div class="col-md-8">
			    <label class="col-md-4 control-label" for="PASS">Password:</label>
			    <div class="col-md-8">
			      
			      <input  class="form-control input-sm" id="password" name="password" placeholder="password" type="password">
			       <!-- <input class="form-control input-sm" id="DEPARTMENT_DESC" name="DEPARTMENT_DESC" placeholder=
			          "Description" type="text" value=""> -->
			    </div>
			  </div>
			</div> 
						<div class="form-group">
			  <div class="col-md-8">
			    <label class="col-md-4 control-label" for=
			    "password">confirm password:</label>

			    <div class="col-md-8">
			      
			      <input  class="form-control input-sm" id="confirmPassword" name="confirmPassword" placeholder="Password" type="password">
			       <!-- <input class="form-control input-sm" id="DEPARTMENT_DESC" name="DEPARTMENT_DESC" placeholder=
			          "Description" type="text" value=""> -->
			    </div>
			  </div>
			</div> 
		
			<div class="form-group">
			    <div class="col-md-8">
			      <label class="col-md-4 control-label" for=""></label>  

			      <div class="col-md-8"> 
			      		<label><input type="checkbox"> By Sign up you are agree with our <a href="#">terms and condition</a></label>
			     </div>
			    </div>
			</div>    
			<div class="form-group">
			    <div class="col-md-8">
			      <label class="col-md-4 control-label" for= "idno"></label>  

			      <div class="col-md-8">
			         <button class="btn btn-primary btn-sm" name="btnRegister" type="submit" ><span class="fa fa-save fw-fa"></span> Save</button> 
			     
			     </div>
			    </div>
			</div>    
		</form>
	</div>
</section>
		<script>
$(function() {
     $('input').on('input',function() {
        var pass = $('input[name=password]'),
            reps = $('input[name=confirmPassword]'),
            pass_cont = $('#password'),
            reps_cont = $('#confirmPassword');
         !$(this).is( '[name=password]' ) || $(function() {
             pass_cont.addClass( pass.val().length === 0 ? 'has-error' : 'has-success' )
             .removeClass( pass.val().length === 0 ? 'has-success' : 'has-error' );
         })();
         !$(this).is( '[name=confirmPassword]' ) || $(function() {
             reps_cont.addClass( reps.val() === pass.val() ? 'has-success' : 'has-error' )
             .removeClass( reps.val() === pass.val() ? 'has-error' : 'has-success' );
         })();
    });
});
		</script>
		

<script>
$(function(){
   $('#country').on('change',function(){
       $('#code').val(this.value);// changing the code textbox value by current country value
   });
});
</script>
  <script>
   const phoneInputField = document.querySelector("#code");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
 </script>
		</body>
</html>