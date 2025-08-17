 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
<style>
  #dash-table {
    border-collapse: separate;
    border-spacing: 0 15px;
  }
  #dash-table thead th {
    border-bottom: 2px solid #dee2e6;
    padding-bottom: 10px;
  }
  #dash-table tbody tr {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transition: transform 0.2s;
  }
  #dash-table tbody tr:hover {
    transform: translateY(-5px);
  }
  #dash-table tbody td {
    padding: 20px;
    vertical-align: middle;
  }
  #dash-table tbody td:first-child {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
  }
  #dash-table tbody td:last-child {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
  }
</style>
    <!-- Main content -->
    <section class="content">
      <div class="row"> 
        <!-- /.col -->
        <?php if (!isset($_GET['p'])) {  ?>
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Applied Jobs</h3> 
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <input type="text" id="searchInput" class="form-control" placeholder="Search for job title, company, or location...">
              </div>
              <div class="table-responsive mailbox-messages">
                <table id="dash-table" class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th>Job Title</th>
                      <th>Company</th>
                      <th>Location</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $sql="SELECT * FROM `tblcompany` c,`tbljobregistration` r, `tbljob` j WHERE c.`COMPANYID`=r.`COMPANYID` AND r.`JOBID`=j.`JOBID` and r.`APPLICANTID` = {$_SESSION['APPLICANTID']}";
                      $mydb->setQuery($sql);
                      $cur = $mydb->loadResultList();
                      foreach ($cur as $result) {
                        # code...
                          echo '<tr data-title="' . $result->OCCUPATIONTITLE . '"
                                    data-company="' . $result->COMPANYNAME . '"
                                    data-location="' . $result->COMPANYADDRESS . '"
                                    data-status="' . $result->REMARKS . '"
                                    data-req-employees="' . $result->REQ_NO_EMPLOYEES . '"
                                    data-salary="' . number_format($result->SALARIES, 2) . '"
                                    data-duration="' . $result->DURATION_EMPLOYEMENT . '"
                                    data-sex="' . $result->PREFEREDSEX . '"
                                    data-sector="' . $result->SECTOR_VACANCY . '"
                                    data-description="' . htmlspecialchars($result->JOBDESCRIPTION) . '"
                                    data-experience="' . htmlspecialchars($result->QUALIFICATION_WORKEXPERIENCE) . '"
                                    data-employer="' . $result->COMPANYNAME . '"
                                    data-employer-address="' . $result->COMPANYADDRESS . '">';
                          echo '<td class="mailbox-star"><a href="#" class="view-details" data-toggle="modal" data-target="#jobDetailsModal"><i class="fa fa-pencil-o text-yellow"></i> '.$result->OCCUPATIONTITLE.'</a></td>';
                          echo '<td class="mailbox-attachment">'.$result->COMPANYNAME.'</td>';
                          echo '<td class="mailbox-attachment">'.$result->COMPANYADDRESS.'</td>';

                          $status = $result->REMARKS;
                          $badge_class = 'badge-info'; // Default color
                          if ($status == 'Pending') {
                            $badge_class = 'badge-warning';
                          } elseif ($status == 'Approved') {
                            $badge_class = 'badge-success';
                          } elseif ($status == 'Rejected') {
                            $badge_class = 'badge-danger';
                          }
                          echo '<td><span class="badge ' . $badge_class . '">' . $status . '</span></td>';

                          echo '</tr>';
                      }
                    ?>

                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div> 
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
        <?php }else{
          require_once ("viewjob.php");          
        } ?>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<!-- Modal -->
<div class="modal fade" id="jobDetailsModal" tabindex="-1" role="dialog" aria-labelledby="jobDetailsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="jobDetailsModalLabel">Job Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Job details will be inserted here -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const searchInput = document.getElementById('searchInput');
  const tableRows = document.querySelectorAll('#dash-table tbody tr');

  searchInput.addEventListener('keyup', function() {
    const filter = searchInput.value.toLowerCase();

    tableRows.forEach(function(row) {
      const text = row.textContent.toLowerCase();
      if (text.includes(filter)) {
        row.style.display = '';
      } else {
        row.style.display = 'none';
      }
    });
  });

  const viewDetailsLinks = document.getElementsByClassName('view-details');
  const modalBody = document.querySelector('#jobDetailsModal .modal-body');
  const modalTitle = document.querySelector('#jobDetailsModal .modal-title');

  for (let i = 0; i < viewDetailsLinks.length; i++) {
    viewDetailsLinks[i].addEventListener('click', function(event) {
      event.preventDefault();

      const row = this.closest('tr');

      const title = row.dataset.title;
      const company = row.dataset.company;
      const location = row.dataset.location;
      const status = row.dataset.status;
      const reqEmployees = row.dataset.reqEmployees;
      const salary = row.dataset.salary;
      const duration = row.dataset.duration;
      const sex = row.dataset.sex;
      const sector = row.dataset.sector;
      const description = row.dataset.description;
      const experience = row.dataset.experience;
      const employer = row.dataset.employer;
      const employerAddress = row.dataset.employerAddress;

      modalTitle.textContent = title;

      modalBody.innerHTML = `
        <h3>${title}</h3>
        <div class="row">
            <div class="col-sm-6">
                <ul>
                    <li><i class="fp-ht-bed"></i>Required No. of Employee's : ${reqEmployees}</li>
                    <li><i class="fp-ht-food"></i>Salary : ${salary}</li>
                    <li><i class="fa fa-sun-"></i>Duration of Employment : ${duration}</li>
                </ul>
            </div>
            <div class="col-sm-6">
                <ul>
                    <li><i class="fp-ht-tv"></i>Prefered Sex : ${sex}</li>
                    <li><i class="fp-ht-computer"></i>Sector of Vacancy : ${sector}</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p><strong>Job Description:</strong></p>
                <p>${description}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p><strong>Qualification/Work Experience:</strong></p>
                <p>${experience}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p><strong>Employer:</strong></p>
                <p>${employer} @ ${employerAddress}</p>
            </div>
        </div>
      `;
    });
  }
});
</script>

 