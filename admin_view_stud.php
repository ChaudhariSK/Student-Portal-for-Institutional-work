<?php
session_start();

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>admin</title>
    <style type="text/css">
     
      .anker:hover{
        color: white;
        text-decoration: none;
      }
    </style>
  </head>
  <body>


        <nav class="navbar navbar-expand-lg  navbar-dark bg-dark fixed-true">
            <!-- <img class="" src="logo.png" style="width: 3.5%; height: 1.8%">
                       <pre style="font-size: 10px; color: white;">   
             SHRI VILE PARLE KELAVANI MANDAL
            <b style="font-size: 17px; color: blue;">Institute Of Technology,Dhule  </b></pre>  -->
                <h3 style="color:RED">Admin</h3>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  
                  
                </ul>
             <form class="form-inline my-2 my-lg-0" action="logout.php"action="logout.php">
                <button class="btn btn-outline-primary   my-2 my-sm-0" type="submit">Log-out</button>
            </form>
        </div>
      </nav>


      <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
       <div>
      
              <div class="list-group list-group-flush text-center">
                    <a href="admin.php" class="list-group-item list-group-item-action bg-dark btn-outline-primary text-white">  Dashboard_Home </a>
                   <a href="admin_msg.php" class="list-group-item list-group-item-action bg-dark btn-outline-primary text-white">Message</a>
                    <a href="admin_courses.php" class="list-group-item list-group-item-action bg-dark btn-outline-primary text-white">Courses</a>
                    <a href="admin_marks.php" class="list-group-item list-group-item-action bg-dark btn-outline-primary text-white">View Marks</a>
                    <a href="all_stud.php" class="list-group-item list-group-item-action bg-dark btn-outline-primary text-white">Profile</a>
                    <a href="admin_status_ch.php" class="list-group-item list-group-item-action bg-dark btn-outline-primary text-white">Status</a>
                   <a href="pie.php" class="list-group-item list-group-item-action bg-dark btn-outline-primary text-white">Pie Chart</a>
              </div>
         </div>

          <!-- Page Content -->
         <div class="container-fluid " style="padding: 30px 30px 30px 30px; background-color: black;">
              <center><h3 class="text-white text-primary">DASHBOARD</h3></center>
              <hr class="bg-primary">
              <br>
                  <?php
                  include('db.php');
                  $sql = mysqli_query($conn, "SELECT * FROM  registration WHERE year = '1st year'");
                  $c1 = 0;
                  while($row=mysqli_fetch_array($sql)) {
                    $c1++;
                  }


                ?>

                <div class="row">
                    <div class="col-md-3 px-5">
                      <a href="all_stud.php?year=<?php echo '1st Year';?>" class="anker">
                          <div style="width: 210px; height: 120px;" class="btn btn-outline-primary" >
                          <h2 class="py-1"><?php echo $c1; ?></h2><h4>1st Year &nbsp;Students</h4>
                      </a>
                    </div>

                    
                     </div> 
                   <div class="col-md-3 px-5">

                            <?php
                            include('db.php');
                            $sql = mysqli_query($conn, "SELECT * FROM  registration WHERE year = '2nd Year' ");
                            $c2 = 0;
                            while($row=mysqli_fetch_array($sql)) {
                              $c2++;
                            }
                            ?>
                            <a href="all_stud.php?year=<?php echo '2nd Year';?>" class="anker">
                            <div style="width: 210px; height: 120px;" class="btn btn-outline-primary">
                                <h2 class="py-1"><?php echo $c2; ?></h2><h4>2nd Year Students</h4>
                                  </a>
                            </div>
                    </div>

                    <div class="col-md-3 px-5">
                                                    <?php
                            include('db.php');
                            $sql = mysqli_query($conn, "SELECT * FROM  registration WHERE year = '3rd Year' ");
                            $c3 = 0;
                            while($row=mysqli_fetch_array($sql)) {
                              $c3++;
                            }
                            ?>
                            <a href="all_stud.php?year=<?php echo '3rd Year';?>" class="anker">
                          <div style="width: 210px; height: 120px;" class="btn btn-outline-primary" >
                              <h2 class="py-1"><?php echo $c3; ?></h2><h4>3rd Year Students</h4>
                            </a>
                          </div>
                        </div>


                    <div class="col-md-3 px-5">
                                                  <?php
                            include('db.php');
                            $sql = mysqli_query($conn, "SELECT * FROM  registration WHERE year = '4th Year' ");
                            $c4 = 0;
                            while($row=mysqli_fetch_array($sql)) {
                              $c4++;
                            }
                            ?>
                            <a href="all_stud.php?year=<?php echo '4th Year';?>" class="anker">
                            <div style="width: 210px; height: 120px;" class="btn btn-outline-primary" >
                                <h2 class="py-1"><?php echo $c4; ?></h2><h4>4th Year Students</h4>
                              </a>
                            </div>
              </div>
            
      </div>
         </div>
      </div>
    <!-- /#page-content-wrapper -->

  </div>


 </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



  </body>
</html>