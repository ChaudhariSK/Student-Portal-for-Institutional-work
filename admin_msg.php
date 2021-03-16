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
  <body class="bg-dark">


        <nav class="navbar navbar-expand-lg  navbar-dark bg-dark navbar-fixed">
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
                    <a href="pie.php" class="list-group-item list-group-item-action bg-dark btn-outline-primary text-white">Summary</a>
              </div>
         </div>

          <!-- Page Content -->
    <div class="container-fluid " style="padding: 30px 30px 30px 30px; background-color: black;">
              <a href="admin_status.php"><button type="submit" name="ss" class="btn btn-outline-success">Course Status</button></a><center><h3 class="text-white text-primary">Message To Student</h3></center>
              <hr class="bg-primary">
              <br>

              <form action="admin_msg.php" method="POST">
         <div class="row">
          	<div class="col-md-4 p-5">

            <button class="btn btn-primary mx-5 my-sm-0" type="submit" name="personal">Personal-Message</button>
           	

           </div>
           	

           	<div class="col-md-4 p-5">
           	
           	  <button class="btn btn-primary mx-5 my-sm-0" type="submit" name="grp">Group-Message</button>
   
         	</div>
           	
           	<div class="col-md-4 ">
           		<form action="admin_msg.php" method="POST">
           			      <div class="form-group pr-5 mr-5">
         
                 <select type="text" name="yr" class="form-control bg-dark text-white" placeholder="choce.." required="required">
                      <option>Select Year...</option>
                    <option> 1st Year </option>
                    <option> 2nd Year</option>
                    <option> 3rd Year</option>
                    <option> 4th Year</option>
                  
                 </select>
            </div> 
           	  <button class="btn btn-primary mx-5 my-sm-0" type="submit" name="btn_year" >Year By Message</button>
            	

       
			</div> 
		</form>




           </div>   </form>

<!-- onclick select year Button -->





<?php 
           include('db.php');
           if (isset($_POST['btn_year'])) {
           		$syear = $_POST['yr'];
           ?>
           


           	 <center><h3 class="text-white text-primary">Send Message</h3></center>
              <hr class="bg-primary">
            <div class="container-fluid" style="padding: 30px 30px 30px 30px; background-color: black;">
             
              <br>
              <div class="container-fluid mx-5 px-5">
                   <form action="admin_msg_year.php?y=<?php echo $syear?>" method="POST">
			            <div class="form-group">
							<p class="text-white"> Message send to <b><?php echo $syear; ?></b></p>
							<div classs="form-group text-white">
							<label class="text-white">Sender Name :</label>
			                 <input type="text" name="sender_name" class="form-control bg-dark text-white" placeholder="Sender name" required style="width:54%">			

			                 </div>
			                 <div class="form-group text-white">
                 			<label>Message :</label><br>
                    		<textarea class="bg-dark text-white" name="msg" rows="8" cols="75" required></textarea>
              				</div>
				         </div>
								

	


									      
			          <button type="submit" name="sub" class="btn btn-primary" name="send">Send</button>
			          <a href="admin_msg.php"><button type="button" class="btn btn-danger mr-auto" >Close</button></a>
			</div>
									    

	</form>
</div>







           <table class="table table-hover text-left text-white">
                                  <thead>
                                    <tr>
                                      <th>Name</th>
                                      <th>SAP ID</th>
                                      
                                      <th>Year</th>
                                   
                                    </tr>
                                  </thead>

                        
                                      <?php
                                        
                                        include('db.php');
                                       
                                       	$new_sid = array();
                                        $sql = mysqli_query($conn, "select * from registration where year = '".$syear."'");

                                        while($row=mysqli_fetch_array($sql)){
                                       
                                  
                                      
                                        ?>
                                        <div class="pr-5">

                                          
                                          <head>
                                            <tbody>
                                              <tr>
                                              	<?php  $new_sid[] = $row; ?>
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['sid'];?></td>
                                                
                                              <td><?php echo $row['year'];?></td>
                                            
                                               </tr>

                                            </tbody>
                                          </head>

                                        </div>
                                         <?php
                                          }        
                                          ?>
                                  </table>  


                                  <?php 
                                  
                              }

                              ?>



<!-- Onclick Personal Button -->

           <?php 
           include('db.php');
           if (isset($_POST['personal'])) {
           	
           ?>
           <table class="table table-hover text-left text-white">
                                  <thead>
                                    <tr>
                                      <th>Name</th>
                                      <th>SAP ID</th>
                                      
                                      <th>Year</th>
                                      <th>massage</th>
                                    </tr>
                                  </thead>

                        
                                      <?php
                                        
                                        include('db.php');
                                       
                                       
                                        $sql = mysqli_query($conn, "select * from registration");

                                        while($row=mysqli_fetch_assoc($sql)){
                                              
                                              $new_name = $row['name'];
                                              $new_sid = $row['sid'];
                                  
                                      
                                        ?>
                                        <div class="pr-5">

                                          
                                          <head>
                                            <tbody>
                                              <tr>

                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['sid'];?></td>
                                                
                                              <td><?php echo $row['year'];?></td>

                                              <td> <a href="msg_send.php?name=<?php echo $row['name'];?>&sid=<?php echo $row['sid'];?>"><button class="btn btn-outline-primary my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#myModal" >Massage</button></a></td>

                                               </tr>

                                            </tbody>
                                          </head>

                                        </div>
                                        <?php 
                                    }
                                    ?>
                                      

                              <!-- onclick massage button -->	       

                  <?php 
                              }
                              ?>



                              <!-- end massage  -->
                                  </table>  


                             

<!-- Onclick Group Button -->
			
							   <?php 
           include('db.php');
           if (isset($_POST['grp'])) {
           	
           ?>
           <table class="table table-hover text-left text-white">
                                  <thead>
                                    <tr>
                                      <th>Name</th>
                                      <th>SAP ID</th>
                                      
                                      <th>Year</th>
                                      <th>Select</th>
                                    </tr>
                                  </thead>

                        
                                      <?php
                                        
                                        include('db.php');
                                       
                                       
                                        $sql = mysqli_query($conn, "select * from registration");

                                        while($row=mysqli_fetch_assoc($sql)){
                                        
                                  
                                      
                                        ?>
                                        <div class="pr-5">

                                          
                                          <head>
                                            <tbody>
                                              <tr>

                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['sid'];?></td>
                                                
                                              <td><?php echo $row['year'];?></td>
                                              <td> 
                                              	<button type="button" class="btn btn-outline-primary">select</button>
                                              </td>
                                               </tr>

                                            </tbody>
                                          </head>

                                        </div>
                                         <?php
                                          }        
                                          ?>
                                  </table>  


                                  <?php 
                              }
                              ?>
<!-- Onclock Year button -->
									
	 <?php 
           include('db.php');
           if (isset($_POST['yer'])) {
           	
           ?>
           <table class="table table-hover text-left text-white">
                                  <thead>
                                    <tr>
                                      <th>Name</th>
                                      <th>SAP ID</th>
                                      
                                      <th>Year</th>
                                      <th>Select</th>
                                    </tr>
                                  </thead>

                        
                                      <?php
                                        
                                        include('db.php');
                                       
                                       
                                        $sql = mysqli_query($conn, "select * from registration where year=");

                                        while($row=mysqli_fetch_assoc($sql)){
                                        
                                  
                                      
                                        ?>
                                        <div class="pr-5">

                                          
                                          <head>
                                            <tbody>
                                              <tr>

                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['sid'];?></td>
                                                
                                              <td><?php echo $row['year'];?></td>
                                              <td> 
                                              	<button type="button" class="btn btn-outline-primary">select</button>
                                              </td>
                                               </tr>

                                            </tbody>
                                          </head>

                                        </div>
                                         <?php
                                          }        
                                          ?>
                                  </table>  


                                  <?php 
                              }
                              ?>

						



          
</div>

</div>                                   
      

      </div>

    <!-- /#page-content-wrapper -->


  
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



  </body>
</html>