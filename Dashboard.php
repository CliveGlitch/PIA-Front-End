<?php
  session_start();
  include_once 'includes/dbh.inc.php';

  $sql = "SELECT COUNT(*) AS total FROM users;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_fetch_assoc($result);

  $num_users = $resultCheck['total'];

  $query = "SELECT usersName FROM users ORDER BY usersId DESC LIMIT 1;";
  $result1 = mysqli_query($conn, $query);
  $resultCheck1 = mysqli_num_rows($result1);

  if($resultCheck1 > 0){
    while($row = mysqli_fetch_assoc($result1)){
      $last_user = $row['usersName'];
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ice Pick Lodge</title>
    <link rel = "icon" href = "images/Icon.png" type = "image/x-icon">
    
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles.css" />
    <link rel="stylesheet" href="assets/slider.css" />
    <link rel="stylesheet" href="assets/style_dashboard.css" />
  </head>
  <body>
    <!-- Navbar Section -->
    <nav class="navbar">
      <div class="navbar__container">
        <a href="index.php" id="navbar__logo"></i>Ice Pick Lodge</a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="News.php" class="navbar__links">News</a>
          </li>
          <li class="navbar__item">
            <a href="Games.php" class="navbar__links">Games</a>
          </li>
          <li class="navbar__item">
            <a href="AboutUs.php" class="navbar__links">About Us</a>
          </li>
          <?php
            if(isset($_SESSION["useruid"])){
              echo "<li class='navbar__btn'>
                      <a href='Dashboard.php' class='button'>Dashboard</a>
                    </li>";
              echo "<li class='navbar__btn'>
                      <a href='includes/LogOut.inc.php' class='button'>Log Out</a>
                    </li>";
            } else {
              echo "<li class='navbar__btn'>
                      <a href='LogIn.php' class='button'>Log In</a>
                    </li>";
              echo "<li class='navbar__btn'>
                      <a href='SignUp.php' class='button'>Sign Up</a>
                    </li>";
            }
          ?>
        </ul>
      </div>
    </nav>

        <div class="w-100">

        <!-- Page Content -->
        <div id="content" class="bg-grey w-100">

              <section class="bg-grey py-3">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-9 col-md-8">
                            <?php
                                $username = $_SESSION["useruid"];
                                echo "<h1 class='welcome-title'>Welcome $username</h1>";
                            ?>
                            <p class="welcome-text">Check the latest report</p>
                          </div>
                      </div>
                  </div>
              </section>

              <section class="bg-grey py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Game Revenue</h6>
                                        <h3 class="font-weight-bold">$750000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> 50.50%</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Newest User</h6>
                                        <?php 
                                          echo "<h3 class='font-weight-bold'>$last_user</h3>"
                                        ?>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> 12.50%</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Number of Users</h6>
                                        <?php 
                                          echo "<h3 class='font-weight-bold'>$num_users</h3>"
                                        ?>
                                        
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> 81.50%</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Games Sold</h6>
                                        <h3 class="font-weight-bold">12650342</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> 23.00%</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </section>

              <section>
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-8 my-3">
                              <div class="card rounded-0">
                                  <div class="card-header bg-light">
                                    <h6 class="font-weight-bold mb-0">Games Sold</h6>
                                  </div>
                                  <div class="card-body">
                                    <canvas id="myChart" width="300" height="150"></canvas>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 my-3">
                            <div class="card rounded-0">
                                <div class="card-header bg-light">
                                    <h6 class="font-weight-bold mb-0">PC Games Sales</h6>
                                </div>
                                <div class="card-body pt-2">
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">$15</h6><span class="badge badge-success ml-2">-50%</span>
                                          <small class="d-block text-muted">Pathologic 2 Steam</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">$24</h6><span class="badge badge-success ml-2">-20%</span>
                                          <small class="d-block text-muted">Pathologic 2 GOG</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">$2</h6><span class="badge badge-success ml-2">-80%</span>
                                          <small class="d-block text-muted">Pathologic Steam</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">$5</h6><span class="badge badge-success ml-2">-50%</span>
                                          <small class="d-block text-muted">Pathologic GOG</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2 mb-3">
                                        <div class="d-flex mr-3">
                                          <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                          <h6 class="d-inline-block mb-0">$15</h6><span class="badge badge-success ml-2">-50%</span>
                                          <small class="d-block text-muted">Pathologic 2 Steam</small>
                                        </div>
                                    </div>
                                    <a href="https://store.steampowered.com/developer/icepicklodge/">
                                      <button class="btn btn-primary w-100">Check Steam Page</button>
                                    </a>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
              </section>
        </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, { 
                type: 'bar',
                data: {
                    labels: ['Agt 2021', 'Sep 2021', 'Oct 2021', 'Nov 2021'],
                    datasets: [{
                        label: 'Games Sold',
                        data: [7500, 10000, 15000, 20000],
                        backgroundColor: [
                            '#BB5B16',  
                            '#BB5B16',
                            '#BB5B16',
                            '#924813'
                        ],
                        maxBarThickness: 75,
                        maxBarLength: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            </script>
</body>

</html>