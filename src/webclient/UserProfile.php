<?php
include '../includes/connectdb.php';

$clUrID = $_SESSION['clUrID'];

$userQuery = mysqli_query($connectdb, "SELECT * FROM tbusers where clUrID = $clUrID");
  while($row = mysqli_fetch_array($userQuery)){
    $clUrUsername = $row['clUrUsername'];
    $clUrFirstname = $row['clUrFirstname'];
    $clUrLastname = $row['clUrLastname'];
    $clUrcontact_num = $row['clUrcontact_num'];
    $clUremail = $row['clUremail'];
    $clUraddress = $row['clUraddress'];
}

	if($_SESSION['client_sid']==session_id())
	{
		?>
<!DOCTYPE html>
<html lang="en">
   <head>
	<title>Erovoutika - Exam</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
	/>

    <!-- Bootstrap Script-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

	<!-- Bootstrap Icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />

	<!-- Custom CSS -->
	<link rel="stylesheet" href="src/css/ExamListStyle.css">
</head>

<body>
	<header class="bg-white border-5 border-bottom border-primary">
        <nav class="navbar navbar-expand-lg navbar-light bg-light ms-5 me-5">
            <a class="navbar-brand" href="#"><img src="src/images/Logo2.png" style="height: 60px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse position-absolute end-0" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link  text-dark mt-4" href="../webexam/ExamList.php">Exam List</a>
                    <div class="btn-group">
                      <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-fill"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="UserProfile.php"><i class="bi bi-person-circle me-2"></i>Profile</a></li>
                        <li>
                          <?php echo
                            '<a class="dropdown-item" href="Settings.php?clUrID='.$clUrID.'">'
                            ?>
                          <i class="bi bi-gear-fill me-2"></i>Settings</a></li>
                        <li><a class="dropdown-item" href="../includes/logout.php"><span class="glyphicon me-2">&#xe017;</span>Logout</a></li>
                      </ul>
                    </div>
                </div>
            </div>
        </nav>
	</header>

        <div class="container">
            <div class="main-body">
                  <div class="row gutters-sm mt-4">
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                              <h4><?php echo $clUrFirstname." ".$clUrLastname ?></h4>
                              <p class="text-secondary mb-1"><?php echo $clUrUsername ?></p>
                              <p class="text-muted font-size-sm"><?php echo $clUremail ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="card mb-3">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              <?php echo $clUrFirstname." ".$clUrLastname ?>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                              <div class="col-sm-3">
                                  <h6 class="mb-0">Username</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                                <?php echo $clUrUsername ?>
                              </div>
                          </div>
                          <hr>
                          <div class="row">
                              <div class="col-sm-3">
                                  <h6 class="mb-0">Email Address</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                                <?php echo $clUremail ?>
                              </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Mobile</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            <?php echo $clUrcontact_num ?>
                            </div>
                          </div>
                          <hr>
                          <div class="row mt-1 mb-1">
                            <div class="col-sm-12">
                              <?php
                              echo
                              '<a class="btn btn-info bg-primary" style="color: white;" target="__blank" 
                              href="Settings.php?clUrID='.$clUrID.'">Edit</a>'
                              ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                    <div class="row gutters-sm border-5 border-bottom border-primary ms-1 me-1 mt-4">
                        <h1>COMPLETED EXAMS</h1>
                    </div>

                    <div class="row gutters-sm mt-5">
                        <div class="col-sm-4 mb-3">
                          <div class="card h-100">
                            <div class="card-body border border-2 border-primary rounded">
                              <h2 class="d-flex align-items-center border-5 border-bottom border-primary mb-4">EXAM TITLE</h2>

                              <h6>Date Taken: </h6>
                                <p>September 22, 2022</p>

                              <h6>Score: </h6>
                                <p>50/50</p>

                              <h6>Acccuracy: 80%</h6>
                              <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                          <div class="card h-100">
                            <div class="card-body border border-2 border-primary rounded">
                              <h2 class="d-flex align-items-center border-5 border-bottom border-primary mb-4">EXAM TITLE</h2>

                              <h6>Date Taken: </h6>
                                <p>September 22, 2022</p>


                              <h6>Score: </h6>
                                <p>50/50</p>

                              <h6>Acccuracy: 80%</h6>
                              <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                          <div class="card h-100">
                            <div class="card-body border border-2 border-primary rounded">
                              <h2 class="d-flex align-items-center border-5 border-bottom border-primary mb-4">EXAM TITLE</h2>

                              <h6>Date Taken: </h6>
                                <p>September 22, 2022</p>


                              <h6>Score: </h6>
                                <p>50/50</p>

                              <h6>Acccuracy: 80%</h6>
                              <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="row gutters-sm mt-4">
                        <div class="col-sm-4 mb-3">
                          <div class="card h-100">
                            <div class="card-body border border-2 border-primary rounded">
                              <h2 class="d-flex align-items-center border-5 border-bottom border-primary mb-4">EXAM TITLE</h2>

                              <h6>Date Taken: </h6>
                                <p>September 22, 2022</p>

                              <h6>Score: </h6>
                                <p>50/50</p>

                              <h6>Acccuracy: 80%</h6>
                              <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                          <div class="card h-100">
                            <div class="card-body border border-2 border-primary rounded">
                              <h2 class="d-flex align-items-center border-5 border-bottom border-primary mb-4">EXAM TITLE</h2>

                              <h6>Date Taken: </h6>
                                <p>September 22, 2022</p>


                              <h6>Score: </h6>
                                <p>50/50</p>

                              <h6>Acccuracy: 80%</h6>
                              <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                          <div class="card h-100">
                            <div class="card-body border border-2 border-primary rounded">
                              <h2 class="d-flex align-items-center border-5 border-bottom border-primary mb-4">EXAM TITLE</h2>

                              <h6>Date Taken: </h6>
                                <p>September 22, 2022</p>


                              <h6>Score: </h6>
                                <p>50/50</p>

                              <h6>Acccuracy: 80%</h6>
                              <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
<?php
    }else
	{
		if($_SESSION['admin_sid']==session_id()){
			header("location:404.php");		
		}
		else{
			if($_SESSION['staff_sid']==session_id()){
				header("location:404.php");		
			}else{
				header("location:login_template.php");
			}
		}
	}
?>
