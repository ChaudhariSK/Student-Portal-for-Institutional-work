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
              <center><h3 class="text-white text-primary">DASHBOARD</h3></center>
              <hr class="bg-primary">
              <br>
               <form action="admin.php" method="POST">
                  <?php
                  include('db.php');
                  $sql = mysqli_query($conn, "SELECT * FROM  registration WHERE year = '1st year'");
                  $c1 = 0;
                  while($row=mysqli_fetch_array($sql)) {
                    $c1++;
                  }


                ?>

                <div class="row">
                    <div class="col-md-3 px-3">
                    	  <button class="btn btn-outline-primary" name="y1">
                        	  <div style="width: 200px; height: 110px;" >
                          		<h2 class="py-1"><?php echo $c1; ?></h2><h4>1st Year &nbsp;Students</h4></div>
                      	</button>
                    </div>

                    
                     
                   <div class="col-md-3 px-3">

                            <?php
                            include('db.php');
                            $sql = mysqli_query($conn, "SELECT * FROM  registration WHERE year = '2nd Year' ");
                            $c2 = 0;
                            while($row=mysqli_fetch_array($sql)) {
                              $c2++;
                            }
                            ?>
                      	<button class="btn btn-outline-primary" name="y2">
                            <div style="width: 200px; height: 110px;" >
                        	        <h2 class="py-1"><?php echo $c2; ?></h2><h4>2nd Year Students</h4>
                            </div> 
                        </button>
                            
                    </div>

                    <div class="col-md-3 px-3">
                                                    <?php
                            include('db.php');
                            $sql = mysqli_query($conn, "SELECT * FROM  registration WHERE year = '3rd Year' ");
                            $c3 = 0;
                            while($row=mysqli_fetch_array($sql)) {
                              $c3++;
                            }
                            ?>
                        <button class="btn btn-outline-primary" name="y3">
                          	<div style="width: 200px; height: 110px;"  >
                            	  <h2 class="py-1"><?php echo $c3; ?></h2><h4>3rd Year Students</h4>
                          	</div>
                         </button>
                    </div>


                    <div class="col-md-3 px-3">
                                                  <?php
                            include('db.php');
                            $sql = mysqli_query($conn, "SELECT * FROM  registration WHERE year = '4th Year' ");
                            $c4 = 0;
                            while($row=mysqli_fetch_array($sql)) {
                              $c4++;
                            }
                            ?>
                      <button class="btn btn-outline-primary" name="y4">
                            <div style="width: 200px; height: 110px;" >
                                <h2 class="py-1"><?php echo $c4; ?></h2><h4>4th Year Students</h4>
                     		</div>
                      </button>
           		   </div>
            
     			</div>
     		</form>




<br>
<?php 

include('db.php');
if (isset($_POST['y1'])) {
	
?>
<div class="container-fluid " style="padding: 30px 30px 30px 30px; background-color: black;">
              <center><h3 class="text-white text-danger">1st YEAR STUDENT</h3></center><br></div>
 <table class="table table-hover text-left text-white">
                                
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>SAP ID</th>
                      <th>Department</th>
                      <th>Year</th>
                      
                    </tr>
                  </thead>

                        
                    <?php
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  registration WHERE year = '1st Year' ");
                  if (mysqli_num_rows($sql) > 0) {
              
                  $c = 1;
                  while($row=mysqli_fetch_array($sql)) {
                                              
                                              
                                  
                                      
                                        ?>
                                        <div class="pr-5">

                                          
                                          <head>
                                            <tbody>
                                              <tr>
                                              	<td><?php echo $c;?></td>	
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['sid'];?></td>
                                                <td><?php echo $row['dept'];?></td>
                                              <td><?php echo $row['year'];?></td>

                                            
                          					 

                                               </tr>

                                            </tbody>
                                          </head>

                                        </div>
           
<?php } } }?>


<?php 

include('db.php');
if (isset($_POST['y2'])) {
	
?>

<div class="container-fluid " style="padding: 30px 30px 30px 30px; background-color: black;">
              <center><h3 class="text-white text-danger">2nd YEAR STUDENT</h3></center><br></div>
 <table class="table table-hover text-left text-white">
                                
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>SAP ID</th>
                      <th>Department</th>
                      <th>Year</th>
                     
                    </tr>
                  </thead>

                        
                    <?php
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  registration WHERE year = '2nd Year' ");
                  if (mysqli_num_rows($sql) > 0) {
              
                  $c = 1;
                  while($row=mysqli_fetch_array($sql)) {
                                              
                                              
                                  
                                      
                                        ?>
                                        <div class="pr-5">

                                          
                                          <head>
                                            <tbody>
                                              <tr>
                                              	<td><?php echo $c;?></td>	
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['sid'];?></td>
                                                <td><?php echo $row['dept'];?></td>
                                              <td><?php echo $row['year'];?></td>

                                         

                                               </tr>

                                            </tbody>
                                          </head>

                                        </div>
           
<?php } } }?>

<?php 

include('db.php');
if (isset($_POST['y3'])) {
	
?>

<div class="container-fluid " style="padding: 30px 30px 30px 30px; background-color: black;">
              <center><h3 class="text-white text-danger">3rd YEAR STUDENT</h3></center><br></div>
 <table class="table table-hover text-left text-white">
                                
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>SAP ID</th>
                      <th>Department</th>
                      <th>Year</th>
                     
                    </tr>
                  </thead>

                        
                    <?php
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  registration WHERE year = '3rd Year' ");
                  if (mysqli_num_rows($sql) > 0) {
              
                  $c = 1;
                  while($row=mysqli_fetch_array($sql)) {
                                              
                                              
                                  
                                      
                                        ?>
                                        <div class="pr-5">

                                          
                                          <head>
                                            <tbody>
                                              <tr>
                                              	<td><?php echo $c;?></td>	
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['sid'];?></td>
                                                <td><?php echo $row['dept'];?></td>
                                              <td><?php echo $row['year'];?></td>

                                         

                                               </tr>

                                            </tbody>
                                          </head>

                                        </div>
           
<?php } } }?>

<?php 

include('db.php');
if (isset($_POST['y4'])) {
	
?>
<div class="container-fluid " style="padding: 30px 30px 30px 30px; background-color: black;">
              <center><h3 class="text-white text-danger">4th YEAR STUDENT</h3></center><br></div>
 <table class="table table-hover text-left text-white">
                                
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>SAP ID</th>
                      <th>Department</th>
                      <th>Year</th>
                     
                    </tr>
                  </thead>

                        
                    <?php
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  registration WHERE year = '4th Year' ");
                  if (mysqli_num_rows($sql) > 0) {
              
                  $c = 1;
                  while($row=mysqli_fetch_array($sql)) {
                                              
                                              
                                  
                                      
                                        ?>
                                        <div class="pr-5">

                                          
                                          <head>
                                            <tbody>
                                              <tr>
                                              	<td><?php echo $c;?></td>	
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['sid'];?></td>
                                                <td><?php echo $row['dept'];?></td>
                                              <td><?php echo $row['year'];?></td>

                                         

                                               </tr>

                                            </tbody>
                                          </head>

                                        </div>
           
<?php } } }?>






         </div>
      </div>
    <!-- /#page-content-wrapper -->

  </div>
</body>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



  </body>
</html>




