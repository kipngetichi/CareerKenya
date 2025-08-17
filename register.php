<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Welcome to CareerKenya</h2>
                <p>Create an account to find the best job that fits you.</p>
                <img src="plugins/home-plugins/img/logo.png" alt="CareerKenya Logo" class="img-responsive">
            </div>
            <div class="col-md-6">
                <form class="form-horizontal" action="process.php?action=register" method="POST">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Personal Info</h3>
                        </div>
                        <div class="panel-body">
                            <?php check_message(); ?>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="fName">Firstname:</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input class="form-control" id="fName" name="fName" placeholder="Firstname" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="lName">Lastname:</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input class="form-control" id="lName" name="lName" placeholder="Last name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="mName">Middle Name:</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input class="form-control" id="mName" name="mName" required placeholder="Middle Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="gender">Sex:</label>
                                <div class="col-md-8">
                                    <div class="radio">
                                        <label><input id="optionsRadios1" name="optionsRadios" type="radio" value="Female">Female</label>
                                    </div>
                                    <div class="radio">
                                        <label><input id="optionsRadios2" name="optionsRadios" type="radio" value="Male"> Male</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Date of Birth:</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <select class="form-control" name="month">
                                            <option>Month</option>
                                            <?php
                                            $mon = array('Jan' => 1, 'Feb' => 2, 'Mar' => 3, 'Apr' => 4, 'May' => 5, 'Jun' => 6, 'Jul' => 7, 'Aug' => 8, 'Sep' => 9, 'Oct' => 10, 'Nov' => 11, 'Dec' => 12);
                                            foreach ($mon as $month => $value) {
                                                echo '<option value=' . $value . '>' . $month . '</option>';
                                            }
                                            ?>
                                        </select>
                                        <select class="form-control" name="day">
                                            <option>Day</option>
                                            <?php
                                            $d = range(31, 1);
                                            foreach ($d as $day) {
                                                echo '<option value=' . $day . '>' . $day . '</option>';
                                            }
                                            ?>
                                        </select>
                                        <select class="form-control" name="year">
                                            <option>Year</option>
                                            <?php
                                            $years = range(2010, 1900);
                                            foreach ($years as $yr) {
                                                echo '<option value=' . $yr . '>' . $yr . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="civilStatus">Civil Status:</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                        <select class="form-control" name="civilStatus" id="civilStatus">
                                            <option value="none">Select</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widow">Widow</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Contact Info</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="phoneNumber">Mobile Number:</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <select class="form-control" name="phoneNumber" id="country">
                                            <option value="">Country</option>
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
                                        </select>
                                        <input type="tel" class="form-control" id="code" name="phone_no" placeholder="Phone Number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="emailAdress">Email Address:</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="Email" class="form-control" id="emilAdress" name="emailAdress" placeholder="Email Address" autocomplete="false" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="nationality">Nationality:</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                                        <select class="form-control" name="nationality" id="nationality" required>
                                            <option value="">Select...</option>
                                            <?php include 'nationalities.php'; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="location">Location:</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                        <select class="form-control" name="location" id="location">
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
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Account Info</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="educationLevel">Educational Attainment:</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
                                        <select class="form-control" name="educationLevel" id="educationLevel">
                                            <option value="">Select</option>
                                            <option value="non-skilled">Non-skilled</option>
                                            <option value="certificate">certificate</option>
                                            <option value="diploma">Diploma</option>
                                            <option value="Bachelors">Bachelors</option>
                                            <option value="masters">Masters</option>
                                            <option value="phd">phd</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="PASS">Password:</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input class="form-control" id="password" name="password" placeholder="password" type="password">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="confirmPassword">confirm password:</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Password" type="password">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <label><input type="checkbox"> By Sign up you are agree with our <a href="#">terms and condition</a></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button class="btn btn-primary" name="btnRegister" type="submit"><span class="fa fa-save"></span> Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    $(function() {
        $('input').on('input', function() {
            var pass = $('input[name=password]'),
                reps = $('input[name=confirmPassword]'),
                pass_cont = $('#password'),
                reps_cont = $('#confirmPassword');
            !$(this).is('[name=password]') || $(function() {
                pass_cont.addClass(pass.val().length === 0 ? 'has-error' : 'has-success')
                    .removeClass(pass.val().length === 0 ? 'has-success' : 'has-error');
            })();
            !$(this).is('[name=confirmPassword]') || $(function() {
                reps_cont.addClass(reps.val() === pass.val() ? 'has-success' : 'has-error')
                    .removeClass(reps.val() === pass.val() ? 'has-error' : 'has-success');
            })();
        });

        $('#country').on('change', function() {
            $('#code').val(this.value); // changing the code textbox value by current country value
        });

        const phoneInputField = document.querySelector("#code");
        const phoneInput = window.intlTelInput(phoneInputField, {
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
    });
</script>
