<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerConnect - Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.css" integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
           
        :root {
            --primary: #2962ff;
            --primary-dark: #0039cb;
            --secondary: #00c853;
            --accent: #ff6d00;
            --dark: #1a237e;
            --light: #f5f7ff;
            --text: #333333;
            --text-light: #666666;
            --border: #e0e0e0;
            --success: #00c853;
            --error: #ff1744;
		}
        
        .registration-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 900px;
            overflow: hidden;
            animation: slideUp 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        @keyframes slideUp {
            0% { transform: translateY(50px) scale(0.95); opacity: 0; }
            100% { transform: translateY(0) scale(1); opacity: 1; }
        }
        
        .header-section {
            background: linear-gradient(135deg, var(--primary), var(--dark));
            color: white;
            padding: 30px 40px;
            text-align: center;
            position: relative;
        }
        
        .header-section h2 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        .header-section p {
            font-size: 16px;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .form-section {
            padding: 40px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }
        
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text);
            font-size: 15px;
        }
        
        .form-control {
            width: 100%;
            padding: 14px 20px;
            border: 2px solid var(--border);
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #f9f9f9;
        }
        
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(41, 98, 255, 0.2);
            background: white;
            outline: none;
        }
        
        .has-error {
            border: 2px solid var(--error);
            animation: shake 0.5s;
        }
        
        .has-success {
            border: 2px solid var(--success);
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            20%, 60% { transform: translateX(-5px); }
            40%, 80% { transform: translateX(5px); }
        }
        
        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 8px;
        }
        
        .radio-option {
            display: flex;
            align-items: center;
        }
        
        .radio-option input {
            margin-right: 8px;
            width: 18px;
            height: 18px;
            accent-color: var(--primary);
        }
        
        .phone-input-group {
            display: flex;
            gap: 10px;
        }
        
        .phone-input-group select {
            flex: 1;
            max-width: 150px;
        }
        
        .phone-input-group input {
            flex: 2;
        }
        
        .date-group {
            display: flex;
            gap: 10px;
        }
        
        .date-group select {
            flex: 1;
        }
        
        .form-footer {
            grid-column: 1 / -1;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid var(--border);
        }
        
        .terms {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }
        
        .terms input {
            margin-top: 4px;
            margin-right: 10px;
            width: 18px;
            height: 18px;
            accent-color: var(--primary);
        }
        
        .terms label {
            font-size: 14px;
            color: var(--text-light);
        }
        
        .terms a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }
        
        .terms a:hover {
            text-decoration: underline;
        }
        
        .btn-submit {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            border: none;
            border-radius: 10px;
            padding: 16px 40px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(41, 98, 255, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }
        
        .btn-submit i {
            margin-left: 10px;
            transition: transform 0.3s ease;
        }
        
        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(41, 98, 255, 0.4);
        }
        
        .btn-submit:hover i {
            transform: translateX(5px);
        }
        
        .security-note {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-top: 15px;
            font-size: 13px;
            color: var(--text-light);
        }
        
        .security-note i {
            color: var(--success);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .form-section {
                padding: 30px 20px;
            }
            
            .header-section {
                padding: 25px 20px;
            }
            
            .phone-input-group {
                flex-direction: column;
            }
            
            .phone-input-group select {
                max-width: 100%;
            }
            
            .date-group {
                flex-wrap: wrap;
            }
            
            .date-group select {
                flex: 1 1 100%;
            }
        }
        
        @media (max-width: 480px) {
            .header-section h2 {
                font-size: 26px;
            }
            
            .radio-group {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="registration-container">
        <div class="header-section">
            <h2>Create Your CareerConnect Account</h2>
            <p>Join thousands of professionals finding their dream jobs across East Africa</p>
        </div>
        
        <div class="form-section">
            <form class="row form-horizontal" action="process.php?action=register" method="POST">
                <div class="form-group">
                    <label for="fName">First Name:</label>
                    <input class="form-control input-sm" id="fName" name="fName" placeholder="Enter your first name" type="text" required>
                </div>
                
                <div class="form-group">
                    <label for="lName">Last Name:</label>
                    <input class="form-control input-sm" id="lName" name="lName" placeholder="Enter your last name" required>
                </div>
                
                <div class="form-group">
                    <label for="mName">Middle Name:</label>
                    <input class="form-control input-sm" id="mName" name="mName" required placeholder="Enter your middle name">
                </div>
                
                <div class="form-group">
                    <label for="gender">Sex:</label>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input id="optionsRadios1" name="optionsRadios" type="radio" value="Female" required>
                            <label for="optionsRadios1">Female</label>
                        </div>
                        <div class="radio-option">
                            <input id="optionsRadios2" name="optionsRadios" type="radio" value="Male" required>
                            <label for="optionsRadios2">Male</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="phoneNumber">Mobile Number:</label>
                    <div class="phone-input-group">
                        <select class="form-control input-sm" name="phoneNumber" id="country" required>
                            <option value="">Select Country</option>
                            <option value="254">Kenya</option>
                            <option value="255">Tanzania</option>
                            <option value="256">Uganda</option>
                            <option value="211">South Sudan</option>
                            <option value="257">Burundi</option>
                            <option value="250">Rwanda</option>
                        </select>
                        <input type="tel" class="form-control input-sm" id="code" name="phone_no" placeholder="Phone number" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="emailAdress">Email Address:</label>
                    <input type="email" class="form-control input-sm" id="emilAdress" name="emailAdress" placeholder="your.email@example.com" autocomplete="false" required>
                </div>
                
                <div class="form-group">
                    <label for="educationLevel">Educational Attainment:</label>
                    <select class="form-control input-sm" name="educationLevel" id="educationLevel" required>
                        <option value="">Select education level</option>
                        <option value="non-skilled">Non-skilled</option>
                        <option value="certificate">Certificate</option>
                        <option value="diploma">Diploma</option>
                        <option value="Bachelors">Bachelors</option>
                        <option value="masters">Masters</option>
                        <option value="phd">PhD</option>
                    </select>
                </div>
                                <div class="form-group">
                    <label for="courseOfStudy">Course of study:</label>
                    <select class="form-control input-sm" name="courseOfStudy" id="courseOfStudy" required>
                        <option value="">Course you studied</option>
                        <option value="Medicine and Health related courses">Medicine and Health related courses</option>
                        <option value="Engineering">Engineering Field</option>
                        <option value="Teaching Field">Teaching Field</option>
                        <option value="Information Technology and Courses Related">Information Technology and Courses Related</option>
                        <option value="Agricultural Courses">Agricultural Courses</option>
                        <option value="Monetaring and Evaluation">Monetaring and Evaluation</option>
                        <option value="Economics and Related Fields">Economics and Related Fields</option>
                        <option value="Agricultural Courses">Agricultural Courses</option>
                        <option value="Sciences Courses">Sciences Courses</option>
                        <option value="Agricultural Courses">Agricultural Courses</option>
                        <option value="Business Courses">Business Courses</option>
                        <option value="Sales and Marketing">Sales and Marketing</option>
                        <option value="Agricultural Courses">Agricultural Courses</option>
                        <option value="Agricultural Courses">Agricultural Courses</option>
                        <option value="Agricultural Courses">Agricultural Courses</option>
                        <option value="phd">Non-skilled</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Date of Birth:</label>
                    <div class="date-group">
                        <select class="form-control input-sm" name="month" required>
                            <option value="">Month</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        
                        <select class="form-control input-sm" name="day" required>
                            <option value="">Day</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                        
                        <select class="form-control input-sm" name="year" required>
                            <option value="">Year</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="nationality">Nationality:</label>
                    <select class="form-control input-sm" name="nationality" id="nationality" required>
                        <option value="">Select your nationality</option>
                        <option value="Kenya">Kenyan</option>
                        <option value="Uganda">Ugandan</option>
                        <option value="Tanzania">Tanzanian</option>
                        <option value="Zambia">Zambian</option>
                        <option value="Rwanda">Rwandan</option>
                        <option value="Ethiopia">Ethiopian</option>
                        <option value="Nigeria">Nigerian</option>
                        <option value="South Africa">South African</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="location">Location:</label>
                    <select class="form-control input-sm" name="location" id="location" required>
                        <option value="">Select your location</option>
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
                
                <div class="form-group">
                    <label for="civilStatus">Civil Status:</label>
                    <select class="form-control input-sm" name="civilStatus" id="civilStatus" required>
                        <option value="">Select your status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widow">Widow</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input class="form-control input-sm" id="password" name="password" placeholder="Create a strong password" type="password" required>
                </div>
                
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password:</label>
                    <input class="form-control input-sm" id="confirmPassword" name="confirmPassword" placeholder="Re-enter your password" type="password" required>
                </div>
                
                <div class="form-footer">
                    <div class="terms">
                        <input type="checkbox" id="terms" required>
                        <label for="terms">By signing up, you agree to our <a href="#">Terms and Conditions</a> and acknowledge our <a href="#">Privacy Policy</a></label>
                    </div>
                    
                    <button class="btn-submit" name="btnRegister" type="submit">
                        Create Account <i class="fas fa-arrow-right"></i>
                    </button>
                    
                    <div class="security-note">
                        <i class="fas fa-shield-alt"></i>
                        <span>Your information is securely encrypted</span>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput-jquery.min.js" integrity="sha512-QK4ymL3xaaWUlgFpAuxY+6xax7QuxPB3Ii/99nykNP/PlK3NTQa/f/UbQQnWsM4h5yjQoMjWUhCJbYgWamtL6g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script>
        $(function() {
            // Password validation
            $('input').on('input', function() {
                var pass = $('input[name=password]'),
                    reps = $('input[name=confirmPassword]'),
                    pass_cont = $('#password'),
                    reps_cont = $('#confirmPassword');
                
                if ($(this).is('[name=password]')) {
                    pass_cont.toggleClass('has-error', pass.val().length === 0);
                    pass_cont.toggleClass('has-success', pass.val().length > 0);
                }
                
                if ($(this).is('[name=confirmPassword]')) {
                    reps_cont.toggleClass('has-error', reps.val() !== pass.val());
                    reps_cont.toggleClass('has-success', reps.val() === pass.val() && reps.val().length > 0);
                }
            });
            
            // Country code selection
            $('#country').on('change', function() {
                $('#code').val(this.value);
            });
            
            // International phone input
            const phoneInputField = document.querySelector("#code");
            const phoneInput = window.intlTelInput(phoneInputField, {
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });
            
            // Form submission feedback
            $('form').on('submit', function(e) {
                var pass = $('input[name=password]').val();
                var confirmPass = $('input[name=confirmPassword]').val();
                
                if (pass !== confirmPass) {
                    e.preventDefault();
                    $('#confirmPassword').addClass('has-error');
                    $('#password').addClass('has-error');
                    alert('Passwords do not match!');
                }
            });
        });
    </script>
</body>
</html>