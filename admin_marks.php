<?php
session_start();

                    include('db.php');
                    $c = "";
                    $dates = array();
                  
                    $s = mysqli_query($conn, "select * from course where msg = 'unread' ");
                    while ($r=mysqli_fetch_array($s)) {
                      
                      $dates[] = $r;
                    $c++;
                  }
                    ?>



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

                 <a class="nav-link pr-5" style="color: white; padding-left: 50px" href="#" id="navbardrop" data-toggle="dropdown"><i class="material-icons" style="font-size:25px">notifications   </i>


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
         <div class="container-fluid " style=" background-color: black;">

         		<form action="admin_marks.php" method="POST" class="">
				     <div class="form-group mx-5 mt-5">
					    <label  class="text-white"><h5>Marks Starting :</h5></label>
						    <input class="form-control  bg-dark text-white" type="number"  name="str" required placeholder="Greater Than No." />
						     </div>
                  <div class="form-group mx-5 ">
                  <label  class="text-white"><h5>To  :</h5></label>
                <input class="form-control  bg-dark text-white" type="number"  name="end" required placeholder="Less Than No." />
						     </div>
						  
						  
				 	 
				 	 <div class="row px-5 mx-5 mt-5">
				 	 	<div class="col-lg-3 col-md-3 col-12"><button type="submit" name="1st" class="btn btn-outline-primary px-5">1st Year</button> </div>
				 	 	<div class="col-lg-3 col-md-3 col-12"><button type="submit" name="2st" class="btn btn-outline-primary px-5">2nd Year</button></div>
				 	 	<div class="col-lg-3 col-md-3 col-12"><button type="submit" name="3st" class="btn btn-outline-primary px-5">3rd Year</button></div>
				 	 	<div class="col-lg-3 col-md-3 col-12"><button type="submit" name="4st" class="btn btn-outline-primary px-5">4th Year</button></div>
				 	 
				 	 
				 	 
				 	 
				 	 
				 	 </div>
         		</form>
			



			<br>
			
				<?php 
					include('db.php');
					if (isset($_POST['1st'])) {
						$str = $_POST['str'];
					 $end = $_POST['end'];
			
			 	?>

			 	<div class="container-fluid " style="padding: 30px 30px 30px 30px; background-color: black;">
              <center><h3 class="text-white text-danger">1st YEAR STUDENT</h3></center><br>

             				
                                            	
                     
                       


 				<table class="table table-hover text-left text-white">
                  <thead>
                  	
                                
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Subject</th>
                      <th>Marks</th>
                      <th>Year</th>
                      <th>View</th>
                      
                    </tr>
                  </thead>



                    <?php
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  course WHERE year = '1st Year' ");
                    

                  if (mysqli_num_rows($sql) >= 1) {
              
                  $c = 1;
                  while($row=mysqli_fetch_array($sql)) {
                  if($row['marks'] >= $str && $row['marks'] <= $end) {                           
                                              
                                  
                                      
                                        ?>
                                        <div class="pr-5">

                                          
                                          <head>
                                            <tbody>
                                              <tr class="tb">
                                              	<td><?php echo $c;?></td>	
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['cname'];?></td>
                                                <td><?php echo $row['sub_name'];?></td>
                                                <td><?php echo $row['marks'];?></td>
                                              <td><?php echo $row['year'];?></td>
                                                <td><a href="Certificate.php?eid=<?php echo $row['id']; ?>"><button type="submit" class="btn btn-primary">Certificate</button></a></td>

                                    

                                                    <!-- The Modal -->
  

                                            </tbody>
                                          </head>

                                        </div>
           





              


                  <?php $c++;
              } } }}  ?>




              	<?php 
					include('db.php');
					if (isset($_POST['2st'])) {
					     $str = $_POST['str'];
           $end = $_POST['end'];
      
			
			 	?>

			 	<div class="container-fluid " style="padding: 30px 30px 30px 30px; background-color: black;">
              <center><h3 class="text-white text-danger">2nd YEAR STUDENT</h3></center><br>

							
              	


 				<table class="table table-hover text-left text-white">
                  <thead>
                  	
                                
                    <tr>
                       <th>No</th>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Subject</th>
                      <th>Marks</th>
                      <th>Year</th>
                      <th>View</th>
                    </tr>
                  </thead>



                    <?php
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  course WHERE year = '2nd Year'  ");
                  if (mysqli_num_rows($sql) > 0) {
              
                  $c = 1;
                  while($row=mysqli_fetch_array($sql)) {
                                              
                      if($row['marks'] >= $str && $row['marks'] <= $end) {                          
                                  
                                      
                                        ?>
                                        <div class="pr-5">

                                          
                                          <head>
                                            <tbody>
                                              <tr class="tb">
                                              	<td><?php echo $c;?></td>	
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['cname'];?></td>
                                                <td><?php echo $row['sub_name'];?></td>
                                                <td><?php echo $row['marks'];?></td>
                                              <td><?php echo $row['year'];?></td>

                                             <td><a href="Certificate.php?eid=<?php echo $row['id']; ?>"><button type="submit" class="btn btn-primary">Certificate</button></a></td>

                                    
                          					 

                                               </tr>

                                            </tbody>
                                          </head>

                                        </div>
           





              


                  <?php $c++;
              } } } }?>


	
	<?php 
					include('db.php');
					if (isset($_POST['3st'])) {
					      $str = $_POST['str'];
           $end = $_POST['end'];
      
					
			
			 	?>

			 	<div class="container-fluid " style="padding: 30px 30px 30px 30px; background-color: black;">
              <center><h3 class="text-white text-danger">3rd YEAR STUDENT</h3></center><br>
              				
              			
                              
                         

 				<table class="table table-hover text-left text-white">
                  <thead>
                  	
                                
                    <tr>
                     <th>No</th>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Subject</th>
                      <th>Marks</th>
                      <th>Year</th>
                      <th>View</th>
                    </tr>
                  </thead>



                    <?php
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  course WHERE year = '3rd Year' ");
                  if (mysqli_num_rows($sql) > 0) {
              
                  $c = 1;
                  while($row=mysqli_fetch_array($sql)) {
                                              
                     if($row['marks'] >= $str && $row['marks'] <= $end) {                           
                                  
                                      
                                        ?>
                                        <div class="pr-5">

                                          
                                          <head>
                                            <tbody class="tb">
                                              <tr>
                                              	<td><?php echo $c;?></td>	
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['cname'];?></td>
                                                <td><?php echo $row['sub_name'];?></td>
                                                <td><?php echo $row['marks'];?></td>
                                              <td><?php echo $row['year'];?></td>
                                               <td><a href="Certificate.php?eid=<?php echo $row['id']; ?>"><button type="submit" class="btn btn-primary">Certificate</button></a></td>

                                    

                                               
                                            
                          					 
                                            
                          					 

                                               </tr>

                                            </tbody>
                                          </head>

                                        </div>
           





              


                  <?php $c++;
              }  }} }?>




	<?php 
					include('db.php');
					if (isset($_POST['4st'])) {
				       $str = $_POST['str'];
           $end = $_POST['end'];
      
					
			
			 	?>

			 	<div class="container-fluid " style="padding: 30px 30px 30px 30px; background-color: black;">
              <center><h3 class="text-white text-danger">4th YEAR STUDENT</h3></center><br>

            			
                                            	
                                
                         
                         



 				<table class="table table-hover text-left text-white">
                  <thead>
                  	
                                
                    <tr>
                    <th>No</th>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Subject</th>
                      <th>Marks</th>
                      <th>Year</th>
                      <th>View</th>
                    </tr>
                  </thead>



                    <?php
                                        
                   include('db.php');
                                                                      
                  $sql = mysqli_query($conn, "SELECT * FROM  course WHERE year = '4th Year'  ");
                  if (mysqli_num_rows($sql) > 0) {
              
                  $c = 1;
                  while($row=mysqli_fetch_array($sql)) {
                                              
                       if($row['marks'] >= $str && $row['marks'] <= $end) {                           
                                  
                                      
                                        ?>
                                        <div class="pr-5">

                                          
                                          <head>
                                            <tbody>
                                              <tr class="tb">
                                              	<td><?php echo $c;?></td>	
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['cname'];?></td>
                                                <td><?php echo $row['sub_name'];?></td>
                                                <td><?php echo $row['marks'];?></td>
                                              <td><?php echo $row['year'];?></td>
                                               <td><a href="Certificate.php?eid=<?php echo $row['id']; ?>"><button type="submit" class="btn btn-primary">Certificate</button></a></td>

                                    

                   
                                            
                          					 

                                               </tr>

                                            </tbody>
                                          </head>

                                        </div>
           





              


                  <?php $c++;
              } } } } ?>






    		
   </div> 
</div>
  </div>
</body>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



  </body>
</html>