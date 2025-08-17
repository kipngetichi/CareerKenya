 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
<style>
  .job-card .card {
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transition: transform 0.2s;
  }
  .job-card .card:hover {
    transform: translateY(-5px);
  }
  .job-card .card-title {
    font-weight: bold;
  }
  .job-card .card-subtitle {
    color: #6c757d;
  }
  .job-card .card-text {
    margin-bottom: 1rem;
  }
  .job-card .badge {
    font-size: 0.9rem;
    padding: 0.5em 0.7em;
  }
  #jobDetailsModal .modal-header {
    background-color: #007bff;
    color: white;
  }
  #jobDetailsModal .modal-title {
    font-weight: bold;
  }
  #jobDetailsModal .modal-body h3 {
    margin-bottom: 1.5rem;
    font-weight: bold;
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
              <div class="row" id="job-cards">
                <?php
                  $sql="SELECT * FROM `tblcompany` c,`tbljobregistration` r, `tbljob` j WHERE c.`COMPANYID`=r.`COMPANYID` AND r.`JOBID`=j.`JOBID` and r.`APPLICANTID` = {$_SESSION['APPLICANTID']}";
                  $mydb->setQuery($sql);
                  $cur = $mydb->loadResultList();
                  foreach ($cur as $result) {
                ?>
                <div class="col-md-6 job-card"
                  data-title="<?php echo $result->OCCUPATIONTITLE; ?>"
                  data-company="<?php echo $result->COMPANYNAME; ?>"
                  data-location="<?php echo $result->COMPANYADDRESS; ?>"
                  data-status="<?php echo $result->REMARKS; ?>"
                  data-req-employees="<?php echo $result->REQ_NO_EMPLOYEES; ?>"
                  data-salary="<?php echo number_format($result->SALARIES, 2); ?>"
                  data-duration="<?php echo $result->DURATION_EMPLOYEMENT; ?>"
                  data-sex="<?php echo $result->PREFEREDSEX; ?>"
                  data-sector="<?php echo $result->SECTOR_VACANCY; ?>"
                  data-description="<?php echo htmlspecialchars($result->JOBDESCRIPTION); ?>"
                  data-experience="<?php echo htmlspecialchars($result->QUALIFICATION_WORKEXPERIENCE); ?>"
                  data-employer="<?php echo $result->COMPANYNAME; ?>"
                  data-employer-address="<?php echo $result->COMPANYADDRESS; ?>"
                >
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $result->OCCUPATIONTITLE; ?></h5>
                      <h6 class="card-subtitle mb-2 text-muted"><?php echo $result->COMPANYNAME; ?></h6>
                      <p class="card-text">
                        <strong>Location:</strong> <?php echo $result->COMPANYADDRESS; ?><br>
                        <strong>Status:</strong>
                        <?php
                          $status = $result->REMARKS;
                          $badge_class = 'badge-info'; // Default color
                          if ($status == 'Pending') {
                            $badge_class = 'badge-warning';
                          } elseif ($status == 'Approved') {
                            $badge_class = 'badge-success';
                          } elseif ($status == 'Rejected') {
                            $badge_class = 'badge-danger';
                          }
                        ?>
                        <span class="badge <?php echo $badge_class; ?>"><?php echo $status; ?></span>
                      </p>
                      <a href="#" class="card-link view-details" data-toggle="modal" data-target="#jobDetailsModal">View Details</a>
                    </div>
                  </div>
                </div>
                <?php } ?>
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
  const jobCardsContainer = document.getElementById('job-cards');
  const jobCards = jobCardsContainer.getElementsByClassName('job-card');

  searchInput.addEventListener('keyup', function() {
    const filter = searchInput.value.toLowerCase();

    for (let i = 0; i < jobCards.length; i++) {
      const card = jobCards[i];
      const title = card.dataset.title.toLowerCase();
      const company = card.dataset.company.toLowerCase();
      const locationText = card.dataset.location.toLowerCase();

      if (title.includes(filter) || company.includes(filter) || locationText.includes(filter)) {
        card.style.display = '';
      } else {
        card.style.display = 'none';
      }
    }
  });

  const viewDetailsLinks = document.getElementsByClassName('view-details');
  const modalBody = document.querySelector('#jobDetailsModal .modal-body');
  const modalTitle = document.querySelector('#jobDetailsModal .modal-title');

  for (let i = 0; i < viewDetailsLinks.length; i++) {
    viewDetailsLinks[i].addEventListener('click', function(event) {
      event.preventDefault();

      const card = this.closest('.job-card');

      const title = card.dataset.title;
      const company = card.dataset.company;
      const location = card.dataset.location;
      const status = card.dataset.status;
      const reqEmployees = card.dataset.reqEmployees;
      const salary = card.dataset.salary;
      const duration = card.dataset.duration;
      const sex = card.dataset.sex;
      const sector = card.dataset.sector;
      const description = card.dataset.description;
      const experience = card.dataset.experience;
      const employer = card.dataset.employer;
      const employerAddress = card.dataset.employerAddress;

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

 