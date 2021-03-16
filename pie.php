<?php
session_start();

                    include('db.php');
                    $c = "";
                    $dates = array();
                  
                    $s = mysqli_query($conn, "select * from course where msg= 'unread'  ");
                    while ($r=mysqli_fetch_array($s)) {
                      
                      $dates[] = $r;
                    $c++;
                  }
                    ?>


<?php

include('db.php');
$c = 0;
$c1 = 0;
$c2 = 0;
$c3 = 0;
$sqq3 = mysqli_query($conn, "select * from course ");
while ($r3=mysqli_fetch_array($sqq3)) {
  if($r3['cname'] != 'coursera' or $r3['cname'] != 'nptel' or $r3['cname'] != 'spoken'){
  $c3++;
}
}

$sqq = mysqli_query($conn, "select * from course where cname = 'nptel' ");
while ($r=mysqli_fetch_array($sqq)) {
  $c++;
}

$sqq1 = mysqli_query($conn, "select * from course where cname = 'spoken' ");
while ($r1=mysqli_fetch_array($sqq1)) {
  $c1++;
}

$sqq2 = mysqli_query($conn, "select * from course where cname = 'coursera' ");
while ($r2=mysqli_fetch_array($sqq2)) {
  $c2++;
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Add Icon Link -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>admin</title>
    <style type="text/css">
     
      .anker:hover{
        color: white;
        text-decoration: none;
      }
       thead:hover{
        color: white;
      }
  tbody:hover{
        background-color: white;
      }
    </style>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['NPTEL',    <?php echo $c; ?>],
          ['COURSERA',  <?php echo $c1; ?>],
          ['SPOKEN',    <?php echo $c2; ?>],
          ['OTHER COURSES',    <?php echo $c3; ?>]
        ]);

        var options = {
          title: 'Registration Platform For MOOC'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>


  </head>
  <body class="bg-dark">


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
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  
              
              <li class="nav-item dropdown">
                <a class="nav-link pr-5" style="color: white; padding-left: 50px;" href="#" id="navbardrop" data-toggle="dropdown"><i class="material-icons" style="font-size:25px">notifications   </i>


                <span class="badge badge-danger"><?php echo $c;?></span>


              </a>
              <div class="px-5">
              <div class="dropdown-menu">
                     <?php 
                      foreach ($dates as $date) {
                        
                      if ($date) {
                        
                      
                     ?> 
                      <a class="dropdown-item" href="notification.php?id=<?php echo $date['id']; ?>">
                    
                        
                    <i> <b> <?php echo $date['name'];?></b> Add New Course  </i><br>
                       <!--  <p><?php echo $date['sender'] ?></p> -->

                      </a>
                  <?php }else{ echo 'Empty';} 
                 } ?>
                 
                    </div>
                   </div>
                   </form>
              </li></ul>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  
              
              <li class="nav-item dropdown">
             <form class="form-inline my-2 my-lg-0" action="logout.php"action="logout.php">

              
                </form>
              </li></ul>
                <button class="btn btn-outline-primary   my-2 my-sm-0" type="submit">Log-out</button>
            </form>
        </div>
      </nav>

<!-- Notification Module -->




<!-- end Notification -->

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
                     <a href="pie.php" class="list-group-item list-group-item-action bg-dark btn-outline-primary text-white">Summary</a>
              </div>
         </div>

          <!-- Page Content -->
         <div class="container-fluid " style="padding: 30px 30px 30px 30px; background-color: black;">
              <center>
                <h3 class="text-white text-primary">Summary</h3></center>
              <hr class="bg-primary">
              
           <div id="piechart" style="width: 1130px; height: 500px;"></div>

  </div>
</body>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



  </body>
</html>




