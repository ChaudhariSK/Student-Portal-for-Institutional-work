<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <link rel="stylesheet" type="text/css" href="style.css">

    <title>Profile</title>
  </head>
  <body>  

<!-- nevbar -->
<?php
  
    include('db.php');

    
    $sql = mysqli_query($conn, "select * from registration where sid = '".$_GET['s']."' ");

    while($row=mysqli_fetch_assoc($sql)){
    $s = $row['sid'];
  
?>

        <nav class="navbar navbar-expand-lg  navbar-dark bg-primary fixed-top">
            <img class="" src="logo.png" style="width: 3.5%; height: 1.8%">
              <pre style="font-size: 12px; color: white;">   
   Shri Vile Parle Kelavani Mandal
  <b style="font-size: 17px; color: black;" class="text-uppercase">Institute Of Technology,Dhule  </b></pre> 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link text-uppercase" href="Profile.php?eid=<?php echo $_GET['eid'];?>&s=<?php echo $s; ?>">Home <span class="sr-only">(current)</span></a>
                  </li>

                  <li class="nav-item active">
                    <a class="nav-link text-uppercase" href="activity.php?eid=<?php echo $_GET['eid'];?>&s=<?php echo $s; ?>">Activity <span class="sr-only">(current)</span></a>
                  </li>

                   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white text-uppercase" style="color: black" href="#" id="navbardrop" data-toggle="dropdown">
                      Course Status
                    </a>
                    <div class="dropdown-menu text-uppercase">
                      <a class="dropdown-item" href="addcourse.php?s=<?php echo $s;?>&eid=<?php echo $_GET['eid'];?>">Add New Course</a>
                      <a class="dropdown-item" href="viewc.php?s=<?php echo $s; ?>&eid=<?php echo $_GET['eid'];?>">View Courses</a>
                      <a class="dropdown-item" href="#"></a>
                    </div>
                  </li>
                 
                </ul>
             <form class="form-inline my-2 my-lg-0" action="logout.php">

               <a href="logout.php"><button class="btn btn-danger my-2 my-sm-0" type="submit">Log-out</button></a>
            </form>
        </div>
      </nav>
      

      <?php
    }
    ?>

<!-- My Profile -->
<?php
  
    include('db.php');

    
    $sql = mysqli_query($conn, "select * from registration where sid = '".$_GET['s']."' ");

    while($row=mysqli_fetch_assoc($sql))
    {
    $name = $row['name'];
    $saap = $row['sid'];
?>
<br><br><br><br>
<div class="container my-4">
    <div class="row">
  <!-- Self Profile -->
        <div class="col-lg-4 col-md-4 col-sm-2 col-2 text-center bg-light py-3">

              <div class="card mx-5">
                   <img class="card-img-top pb-3" src="img/<?php echo $row['img']; ?>" alt="Card image">
                  <div class="card-body">
                      <h4 class="card-title"><p><?php echo $row['name']; ?></p></h4>
                      <h5><p class="card-text" style="color: blue"> <?php echo $row['email']; ?></p></h5>
                    <a href="detail.php?eid=<?php echo $row['id']; ?>" style="color: black"><button class="btn btn-primary "><b>View Details</b>  </button></a>
                  </div>
              </div>
            </div>
  
<?php
}
?>




<?php
include('db.php');
 session_start();
if(isset($_POST['add']))
{
   $sql = mysqli_query($conn, "select * from registration where sid = '".$_GET['s']."' ");

    while($row=mysqli_fetch_assoc($sql))
    {
    $name = $row['name'];
    $saap = $row['sid'];
    $email = $row['email'];
}

  $title = $_POST['name'];
  $location= $_POST['loc'];
  $date = $_POST['date'];
  $year = $_POST['yr'];
  $detail = $_POST['detl'];
  $work = $_POST['work'];
  $team = $_POST['team'];


  $sql = mysqli_query($conn, "insert into activity(title, location, date, year, work_type, team, detail, name, sid) values('$title', '$location', '$date', '$year', '$work', '$team', '$detail', '$name', '$saap')");
  

  if($sql==1){
     echo '<script>alert("Data Successfully entered");</script>';
    
  }
  else{
    echo '<script>alert("error Occured");</script>';
  }
}
    $sql = mysqli_query($conn, "select * from registration where sid = '".$_GET['s']."' ");

    while($row=mysqli_fetch_assoc($sql))
    {
    	$d = $row['id'];
    $name = $row['name'];
    $saap = $row['sid'];
    
    

?>
            <div class="col-lg-7 col-md-7 col-sm-6 col-5 bg-light mx-2 py-3">

                     <div class="modal-header btn-primary">
              <h4 class="modal-title text-white">Add additional course </h4>
              
           </div>
           <div style="padding-left: 30px; padding-right: 30px">
        <!-- Modal body -->
           <div class="modal-body bg-light">
            <div class=""> 
                    <div style="padding-left: 400px">
                          <button type="submit" name="add" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
                          My Additional course 
                          </button>

                      </div>
                      <b><p>Name   :<?php echo $name ?></p>
                      <p>Saap ID: :<?php echo $saap ?></p></b>
                      
                  </div>
        
             <form action="activity.php?s=<?php echo $saap?>&eid=<?php echo $_GET['eid']; ?>" method="POST">
                  
                 <div class="form-group">
                    <label>Title :</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter full name" value="" required="required">
                  </div>
                  <div>
                   <label>Location :</label>
                    <input type="text" name="loc" class="form-control" placeholder="Enter full name" value="" required="required">
                  </div>

                   <div>
                   <label>Date :</label>
                    <input type="date" name="date" class="form-control" value="" required="required">
                  </div>
               

                 <div class="form-group">
                      <label>Year :</label>
                    <select type="text" name="yr" class="form-control" placeholder="choce..">
                          <option>Select...</option>
                          <option> 1st Year </option>
                          <option> 2nd Year</option>
                           <option> 3rd Year</option>
                           <option> 4rd Year</option>
                          
                  
                       </select>
                </div>

                    <div class="form-group">
                      <label>Work Type :</label>
                    <select type="text" name="work" class="form-control" placeholder="choce.." required="required">
                          <option>Select...</option>
                          <option> Persnal Work </option>
                          <option> Team Work</option>
                        
                          
                  
                       </select>
                </div>

                     <label>Name (Team Members) :</label>
                    <input type="text" name="team" class="form-control" placeholder="Enter full name" value="" required="required">
                  </div>

                <div class="form-group">
                    <label>Details :</label><br>
                    <textarea name="detl" rows="8" cols="75" required="required"></textarea>
                </div>
             
        
             <!-- Modal footer -->
                
                  <button type="submit" name="add" class="btn btn-primary">
                    Add  
                  </button>

                

            </form>
          </div>
       </div>
            </div>
            
            
       
    </div>

</div>

<?php
}
  session_unset();

?>









         <!-- The Modal1 Runing Course -->
          <div class="container mx-5 my-5">
             <div class="modal fade" id="myModal1">
                <div class="modal-dialog modal-lg ">
                  <div class="modal-content mx-5 my-5">
                  
                       
                     <div class="modal-header btn-primary">
                          <h4 class="modal-title text-white" style="color:black">My activites</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div style="padding-left: 30px; padding-right: 30px">
            <!-- Modal body -->
                          <div class="modal-body bg-light">
                      
                              <table class="table table-hover text-left">
                                  <thead>
                                    <tr>
                                      <th>Titel</th>
                                      <th>Date</th>
                                      
                                      <th>Year</th>
                                      <th>View</th>
                                    </tr>
                                  </thead>

                        
                                      <?php
                                        
                                        include('db.php');
                                       
                                       
                                        $sql = mysqli_query($conn, "select * from activity where sid = '".$_GET['s']."' ");

                                        while($row=mysqli_fetch_assoc($sql)){
                                        
                                  
                                      
                                        ?>
                                        <div class="pr-5">

                                          
                                          <head>
                                            <tbody>
                                              <tr>

                                                <td><?php echo $row['title'];?></td>
                                                <td><?php echo $row['date'];?></td>
                                                
                                              <td><?php echo $row['year'];?></td>
                                              <td> <a href="view_activity.php?s=<?php echo $row['sid'];?>&eid=<?php echo $_GET['eid']; ?>&t=<?php echo $row['title'];?>"><button class="btn btn-outline-primary my-2 my-sm-0" type="submit">View</button></a></td>
                                               </tr>

                                            </tbody>
                                          </head>

                                        </div>
                                         <?php
                                          }        
                                          ?>
                                  </table>  
                              </div>
                        </div>
                        

                  </div>
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