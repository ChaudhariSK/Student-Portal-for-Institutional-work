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
    if(isset($_POST["submit"]))
{
       $ql = mysqli_query($conn, "select * from checking");
       while ($rrr=mysqli_fetch_array($ql)) {

                    $del = mysqli_query($conn, "DELETE FROM checking WHERE id = '".$rrr['id']."' ");
                }

    if($_FILES['file']['name'])
    {
        $filename = explode(".", $_FILES['file']['name']);
        if($filename[1] == 'csv')
        {
            $handle = fopen($_FILES['file']['tmp_name'], "r");
            while($data = fgetcsv($handle))
            {
                $item1 = mysqli_real_escape_string($conn, $data[0]);  
                $item2 = mysqli_real_escape_string($conn, $data[1]);
                $item3 = mysqli_real_escape_string($conn, $data[2]);
                $item4 = mysqli_real_escape_string($conn, $data[3]);
               
             
                $query = "INSERT into checking(fname, lname, email, gender) values('$item1','$item2','$item3','$item4')";
                mysqli_query($conn, $query);
            }
            fclose($handle);
            echo "<script>alert('Upload CSV file done!');</script>";
        }
    }
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

          <div class="p-2">
    <div class="py-5" style="border: 2px solid blue">
        
    <form action="admin_status_ch.php" method="post" enctype="multipart/form-data">
        <div class="px-5">
            <h5><label class="text-white">Select CSV File Only : <small>( First_Name, Last_Name, Email_ID, Gender )</small></label><br></h5>
            <input type="file" name="file" class="text-white" required /><br><br>
     
  
 
            <input type="submit" name="submit" value="Upload" class="btn btn-primary" />
        </div>
    </form></div></div><br>
<center><form action="admin_status_ch.php" method="post" enctype="multipart/form-data">


       
    <label for="exampleFormControlSelect1" class="text-white">select Course which one file upload</label>
    <select class="form-control bg-dark w-50 text-white  " name="sel" class="text-white" id="exampleFormControlSelect1" required="required">
      <option class="text-white"></option>
      <option class="text-white">NPTEL</option>
      <option class="text-white">COURSERA</option>
      <option class="text-white">SPOKEN</option>
</select>
      <div class="pt-4"><input type="submit" name="search" value="Search" class="btn btn-primary" />
    </div>
</form></center>


<?php 

include('db.php');
if (isset($_POST['search'])) {

  $ch = $_POST['sel'];
  
?>

      
 <table class="table table-hover text-left text-white">
                                
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>SAP ID</th>
                      <th>Marks</th>
                      <th>Year</th>
                      <th>Statau</th>
                      
                    </tr>
                  </thead>

                        
                    <?php
                                        
                   include('db.php');
                  $a = "";                                                    
                  $sql = mysqli_query($conn, "SELECT * FROM  course WHERE cname = '".$ch."' ");
                                   
                  if (mysqli_num_rows($sql) > 0) {
                  
                  $c = 1;
                  while($row=mysqli_fetch_array($sql)) {

                     $sql1 = mysqli_query($conn, "SELECT * FROM  checking ");
                     while($row1=mysqli_fetch_array($sql1)) {

                        if($row['email'] == $row1['email']) {                       
                              if($row['status'] == 'comp'){                
                                  
                          $a = 1;      }      
                                        ?>
                                        <div class="pr-5">

                                          
                                          <head>
                                            <tbody>
                                              <tr>
                                                <td><?php echo $c;?></td> 
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['sid'];?></td>
                                                <td><?php echo $row['marks'];?></td>
                                              <td><?php echo $row['year'];?></td>
                                              <?php
                                              if($a == 1)
                                              {
                                              ?>
                                              <td><button class="btn btn-success">Completed</button></td>
                                              <?php
                                              $a = 0;
                                            }
                                            else{

                                              ?>
                                             <td><button class="btn btn-danger">Pending</button></td>
                                            <?php

                                          }?>
                                     

                                               </tr>
                                            }

                                            </tbody>
                                          </head>

                                        </div>
           
<?php }} } } }?>



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




