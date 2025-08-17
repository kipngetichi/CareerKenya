<section id="content">
    <div class="container content">
        <p><?php check_message(); ?></p>
        <form class="form-horizontal " action="insertjobs.php?action=add" method="POST">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>Add New Local Job Vacancy</h1>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Company Information</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="COMPANYID">Local Company Name:</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                    <select class="form-control" id="COMPANYID" name="COMPANYID" required>
                                        <option value="None">Select</option>
                                        <?php
                                        $sql = "Select * From tblcompany";
                                        $mydb->setQuery($sql);
                                        $res = $mydb->loadResultList();
                                        foreach ($res as $row) {
                                            echo '<option value=' . $row->COMPANYID . '>' . $row->COMPANYNAME . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="newCompany" style="display: none;">
                            <label class="col-md-3 control-label" for="COMPANY_NAME">Company Name:</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                    <input class="form-control" id="COMPANY_NAME" name="COMPANY_NAME" placeholder="company/instituiton name" autocomplete="none" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Job Details</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="CATEGORY">Category:</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                    <select class="form-control" id="CATEGORY" name="CATEGORY" required>
                                        <option value="None">Select</option>
                                        <?php
                                        $sql = "Select * From tblcategory";
                                        $mydb->setQuery($sql);
                                        $res = $mydb->loadResultList();
                                        foreach ($res as $row) {
                                            echo '<option value=' . $row->CATEGORYID . '>' . $row->CATEGORY . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="OCCUPATIONTITLE">Occupation Title:</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                                    <input class="form-control" id="OCCUPATIONTITLE" name="OCCUPATIONTITLE" placeholder="Occupation Title" autocomplete="none" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="REQ_NO_EMPLOYEES">Required no. of Employees:</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                    <input class="form-control" id="REQ_NO_EMPLOYEES" name="REQ_NO_EMPLOYEES" placeholder="Required no. of Employees" autocomplete="none" type="number" min="1" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="SALARIES">Salary:</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                    <input class="form-control" id="SALARIES" name="SALARIES" placeholder="Salary" autocomplete="none" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="DURATION_EMPLOYEMENT">Duration of Employment:</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                    <input class="form-control" id="DURATION_EMPLOYEMENT" name="DURATION_EMPLOYEMENT" placeholder="Duration of Employment, PnP or Contract" autocomplete="none" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="PREFEREDSEX">Prefered Sex:</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-venus-mars"></i></span>
                                    <select class="form-control" id="PREFEREDSEX" name="PREFEREDSEX" required>
                                        <option value="None">Select</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Either Male Or Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="SECTOR_VACANCY">Sector of Vacancy:</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-info"></i></span>
                                    <textarea class="form-control" id="SECTOR_VACANCY" name="SECTOR_VACANCY" placeholder="Sector of Vacancy" autocomplete="none" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="APPLICATIONLINK">Job Application Link:</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                    <input type="text" class="form-control" id="APPLICATIONLINK" name="APPLICATIONLINK" placeholder="Post Apllication Link" autocomplete="none">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Job Description</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="QUALIFICATION_WORKEXPERIENCE">Qualification/Work Experience:</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="QUALIFICATION_WORKEXPERIENCE" name="QUALIFICATION_WORKEXPERIENCE" placeholder="Qualification/Work Experience" autocomplete="none" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="JOBDESCRIPTION">Job Description:</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="JOBDESCRIPTION" name="JOBDESCRIPTION" placeholder="Job Description" autocomplete="none" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                        <button class="btn btn-primary" name="save" type="submit"><span class="fa fa-save"></span> Save</button>
                        <a href="index.php" class="btn btn-default"><span class="fa fa-arrow-left"></span> Back</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<script>
    CKEDITOR.replace('QUALIFICATION_WORKEXPERIENCE');
    CKEDITOR.replace('JOBDESCRIPTION');

    $(document).ready(function() {
        $('#COMPANYID').change(function() {
            if ($(this).val() == 'None') {
                $('#newCompany').show();
            } else {
                $('#newCompany').hide();
            }
        });
    });
</script>