<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>admin</title>
    <style>
      tr:hover{
        background-color: #00181e;
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
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  
                  
                </ul>
             <form class="form-inline my-2 my-lg-0" action="logout.php">
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
                   <a href="pie.php" class="list-group-item list-group-item-action bg-dark btn-outline-primary text-white">Summary</a>
              </div>
         </div>

          <!-- Page Content -->


             <div class="container-fluid " style="padding: 30px 30px 30px 30px; background-color: black;">
               <form class="form-inline pr-5 mr-5" action="all_stud.php" method="POST" >
      <input class="form-control mr-sm-2 w-50" name="search" type="search" placeholder="Search name.." aria-label="Search" required>
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="ser" data-toggle="modal" data-target="#exampleModal">Search</button>
  
    </form><br>
              <center><h3 class="text-white text-primary">ALL STUDENT</h3></center>
           
              <br>

            



              <table class="table table-hover text-left text-white">
                    <thead>            
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Saap ID</th>
                      <th>Department</th>
                      <th>Year</th>
                      <th>Details</th>
                    </tr>
                  </thead>

                        
                    <?php
                                        
                   include('db.php');
                  $c = 1;                                                    
                  $sql = mysqli_query($conn, "SELECT * FROM  registration WHERE year = '1st Year' ");
                  if (mysqli_num_rows($sql) > 0) {
              
                  
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

                                             <td><a href='admin_profile.php?eid=<?php echo $row['id'];?>&s=<?php echo $row['sid'];?>'><button class="btn btn-outline-primary my-2 my-sm-0" type="submit">View</button></a></td>
                          					 

                                               </tr>

                                            </tbody>
                                          </head>

                                        </div>
           
<?php $c++; } }?>



 <?php

                                        
                   include('db.php');
                  $c = $c;                                                     
                  $sql = mysqli_query($conn, "SELECT * FROM  registration WHERE year = '2nd Year' ");
                  if (mysqli_num_rows($sql) > 0) {
                  
                  
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

                                             <td><a href='admin_profile.php?eid=<?php echo $row['id'];?>&s=<?php echo $row['sid'];?>'><button class="btn btn-outline-primary my-2 my-sm-0" type="submit">View</button></a></td>
                          					 

                                               </tr>

                                            </tbody>
                                          </head>

                                        </div>
           
<?php $c++; } }?>


 <?php
 
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  registration WHERE year = '3rd Year' ");
                  if (mysqli_num_rows($sql) > 0) {
              
                   $c = $c;
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

                                             <td><a href='admin_profile.php?eid=<?php echo $row['id'];?>&s=<?php echo $row['sid'];?>'><button class="btn btn-outline-primary my-2 my-sm-0" type="submit">View</button></a></td>
                          					 

                                               </tr>

                                            </tbody>
                                          </head>

                                        </div>
           
<?php $c++; } }?>



 <?php
                                     
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  registration WHERE year = '4th Year' ");
                  if (mysqli_num_rows($sql) > 0) {
               $c = $c;
                  
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

                                             <td><a href='admin_profile.php?eid=<?php echo $row['id'];?>&s=<?php echo $row['sid'];?>'><button class="btn btn-outline-primary my-2 my-sm-0" type="submit">View</button></a></td>
                          					 

                                               </tr>

                                            </tbody>
                                          </head>

                                        </div>
           
<?php $c++; } }?>







              
                
        
              


               

              
         </div>
      </div>
    <!-- /#page-content-wrapper -->

  </div>


 </div>
</div>

<!-- <div class="container"> 

      <?php 

        include('db.php');
        if (isset($_POST['ser'])) {
        $s = $_POST['search'];
          
        ?>
        <div class="px-5">
              <center><h3 class="text-white text-danger">All ATKT STUDENT</h3></center><br></div>
               <table class="table table-hover text-left">
                     <thead>            
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Saap ID</th>
                      <th>Department</th>
                      <th>Year</th>
                      <th>Details</th>
                    </tr>
                  </thead>

                        
                    <?php
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  registration where name LIKE '%".$s."%' ");
                  if (mysqli_num_rows($sql) >= 1) {
              
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

                                             <td><a href='admin_profile.php?eid=<?php echo $row['id'];?>&s=<?php echo $row['sid'];?>'><button class="btn btn-outline-primary my-2 my-sm-0" type="submit">View</button></a></td>
                                     

                                               </tr>

                                            </tbody>
                                          </head>

                                        </div>
                                        

<?php $c++; } } }?>

</table></div>
</div> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



  </body>
</html>