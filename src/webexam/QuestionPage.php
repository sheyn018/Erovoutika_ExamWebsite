<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Erovoutika - Exam</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
          crossorigin="anonymous"
        />

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />

        <!-- Custom CSS -->
        <link rel="stylesheet" href="src/css/QuestionPageStyle.css">
    </head>

    <body>
        <header class="bg-white border-5 border-bottom border-primary">
            <nav class="navbar navbar-expand-lg navbar-light bg-light ms-5 me-5">
                <!-- Logo -->
                <a class="navbar-brand" href="#"><img src="src/images/Logo2.png" style="height: 60px;"></a>

                <!-- NavList-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse position-absolute end-0" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link  mt-4" href="#">Home</a>
                        <a class="nav-item nav-link  mt-4" href="#">About</a>
                        <a class="nav-item nav-link  mt-4" href="#">Contact</a>

                        <!-- Profile Dropdown -->
                        <div class="btn-group">
                          <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle me-2"></i>Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear-fill me-2"></i>Settings</a></li>
                            <li><a class="dropdown-item" href="#"><span class="glyphicon me-2">&#xe017;</span>Logout</a></li>
                          </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main class="container mt-3 mb-3 bg-light">
            <!-- Upper Panel -->
            <div class="row">
                <div class="col border-5 border-bottom border-primary mt-4">
                    <h1>EXAM TITLE</h1>
                </div>

                <!-- List Icon -->
                <button type="button" class="btn btn-primary col-md-auto mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <i class="bi bi-card-checklist"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                          <div class="row">
                             <div class="card bg-primary" style="width: 1rem; height: 10px;"></div><span>Answered</span>
                          </div>
                          <div class="row">
                              <div class="card bg-danger" style="width: 1rem; height: 10px;"></div>
                              <span>Unanswered</span>
                          </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-body ms-3">
                        <div class="row">
                           <div class="row">
                                <button type="button" class="col-sm cardbtn btn-danger border border-2">1</button>
                                <button type="button" class="col-sm cardbtn btn-danger border border-2">2</button>
                                <button type="button" class="col-sm cardbtn btn-danger border border-2">3</button>
                                <button type="button" class="col-sm cardbtn btn-danger border border-2">4</button>
                                <button type="button" class="col-sm cardbtn btn-danger border border-2">5</button>
                            </div>

                            <div class="row mt-2">
                                <button type="button" class="col-sm cardbtn btn-danger border border-2">6</button>
                                <button type="button" class="col-sm cardbtn btn-danger border border-2">7</button>
                                <button type="button" class="col-sm cardbtn btn-danger border border-2">8</button>
                                <button type="button" class="col-sm cardbtn btn-danger border border-2">9</button>
                                <button type="button" class="col-sm cardbtn btn-danger border border-2">10</button>
                            </div>

                            <div class="row mt-2">
                                <button type="button" class="col-sm cardbtn btn-danger border border-2">11</button>
                                <button type="button" class="col-sm cardbtn btn-danger border border-2">12</button>
                                <button type="button" class="col-sm cardbtn btn-danger border border-2">13</button>
                                <button type="button" class="col-sm cardbtn btn-danger border border-2">14</button>
                                <button type="button" class="col-sm cardbtn btn-danger border border-2">15</button>
                            </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal -->
            </div>
            <!-- Upper Panel -->

            <!-- Middle Panel -->
            <div class="row ms-2 me-2 mt-4 mb-1">
                <div class="container border border-4 border-primary rounded mt-4 mb-4" id="Question">
                    <div class="row ms-5 me-5 mt-4 mb-3">
                        <ol>
                            <li>The terms "bitmap," "b-tree," and "hash" refer to which type of database structure?</li>
                        </ol>
                    </div>

                    <!-- Choices -->
                    <div class="container ms-5 me-5 mb-4">

                        <!-- Choice A -->
                        <div class="row">
                            <div class="col-md-4">
                                <label>
                                  <input type="radio" name="choice" id="" selected class="card-input-element"/>
                                    <div class="card card-default card-input">
                                        <div class="card-body"><strong>A. <span class="col mr-03">|</span></strong>    View</div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Choice B -->
                        <div class="row">
                            <div class="col-md-4">
                                <label>
                                  <input type="radio" name="choice" id="" selected class="card-input-element"/>
                                    <div class="card card-default card-input">
                                        <div class="card-body"><strong>B. <span class="col mr-03">|</span></strong>    Function</div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Choice C -->
                        <div class="row">
                            <div class="col-md-4">
                                <label>
                                  <input type="radio" name="choice" id="" selected class="card-input-element"/>
                                    <div class="card card-default card-input">
                                        <div class="card-body"><strong>C. <span class="col mr-03">|</span></strong>    Index</div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Choice D -->
                        <div class="row">
                            <div class="col-md-4">
                                <label>
                                  <input type="radio" name="choice" id="" selected class="card-input-element"/>
                                    <div class="card card-default card-input">
                                        <div class="card-body"><strong>D. <span class="col mr-03">|</span></strong>    Stored Procedure</div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Choice E -->
                        <div class="row">
                            <div class="col-md-4">
                                <label>
                                  <input type="radio" name="choice" id="" selected class="card-input-element"/>
                                    <div class="card card-default card-input">
                                       <div class="card-body"><strong>E. <span class="col mr-03">|</span></strong>    Trigger</div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Middle Panel -->

            <!-- Bottom Panel -->
            <div class="row">
                <div class="col">
                    <h4>Questions Answered: 0/50</h4>
                </div>

                <div class="col-md-auto">
                    <div class="btn-group">
                        <button class="btn btn-primary  mr-1" type="button"
                                data-bs-container="body"
                                data-bs-content="html here">
                                <i class="bi bi-arrow-left"></i>
                        </button>

                        <button class="btn btn-primary" type="button"
                                data-bs-container="body"
                                data-bs-content="html here">
                                <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-auto mt-2">
                    <h4>Question 1 of 15</h4>
                </div>
            </div>
            <!-- Bottom Panel -->
        </main>

        <footer>
            <div class="text-center p-3" style="background-color: #0F3695"></div>
        </footer>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

        <!-- Custom Javascript -->
        <script src="script.js"></script>
    </body>
</html>
