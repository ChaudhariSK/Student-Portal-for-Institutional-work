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

    
    $sql = mysqli_query($conn, "select * from registration where id = '".$_GET['eid']."' ");

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
                      <a class="dropdown-item" href="addcourse.php?s=<?php echo $s; ?>&eid=<?php echo $_GET['eid'];?>">Add New Course</a>
                      <a class="dropdown-item" href="viewc.php?s=<?php echo $s; ?>&eid=<?php echo $_GET['eid'];?>">View Courses</a>
                      <a class="dropdown-item" href="#"></a>
                    </div>
                  </li>
                 
                </ul>
             <form class="form-inline my-2 my-lg-0">

               <a href="logout.php"><button class="btn btn-danger my-2 my-sm-0" type="submit">Log-out</button></a>
            </form>
        </div>
      </nav>
      <?php
    }
    ?>


<!-- My Profile -->
<?php
    session_start();
    include('db.php');


    $sql = mysqli_query($conn, "select * from registration where id = '".$_GET['eid']."' ");

    while($row=mysqli_fetch_assoc($sql)){

      $d = $row['id'];
?>
<br><br>
<div class="container my-4 pt-5">
    <div class="row">
  <!-- Self Profile -->
        <div class="col-lg-4 col-md-4 col-sm-2 col-2 text-center bg-light py-3">

             <div class="card mx-5">
                   <img class="card-img-top pb-3" src="img/<?php echo $row['img']; ?>" alt="Card image">
                  <div class="card-body">
                      <h4 class="card-title"><p><?php echo $row['name']; ?></p></h4>
                      <h5><p class="card-text" style="color: blue"> <?php echo $row['email']; ?></p></h5>
                    <a href="detail.php?eid=<?php echo $d; ?>" style="color: black"><button class="btn btn-primary "><b>View Details</b>  </button></a>
                  </div>
              </div>
        </div>

          <div class="col-lg-7 col-md-7 col-sm-6 col-5 bg-light mx-2 py-3">

    
                  <!-- The Modal -->

                <?php
                    
                    include('db.php');
                   
                   
                    $sql = mysqli_query($conn, "select * from registration where id = '".$d."' ");

                    while($row=mysqli_fetch_assoc($sql)){
                    
                    $d = $row['id'];
                    $name = $row['name'];
                    $number = $row['number'];
                    $address = $row['address'];
                    $bdate = $row['bdate'];
                    $depm = $row['dept'];
                    $year = $row['year'];
                    $sid = $row['sid'];
                    $email = $row['email'];

                  }
                ?>

      
        <!-- Modal Header -->
           <div class="modal-header btn-primary">
              <h4 class="modal-title text-white">Edit Details</h4>
              
           </div>
           <div style="padding-left: 30px; padding-right: 30px">
        <!-- Modal body -->
           <div class="modal-body bg-light">
        
             <form action="update.php?eid=<?php echo $d;?>" method="POST">
                 <div class="form-group">
                    <label>Full Name :</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter full name" value="<?php echo $name?>" required="">
                  </div>
                 <div class="form-group">
                    <label>Mob.Number :</label>
                    <input type="Number" name="nu" class="form-control" placeholder="Enter Number" value="<?php echo $number ?>"  required="required">
                </div>

                <div class="form-group">
                    <label>Address :</label>
                    <textarea type="text" name="ad" required="required" class="form-control"  placeholder="Address"> </textarea>
                 </div>

                  <div class="form-group">
                       <label>Birth-Date :</label>
                       <input type="date" name="bd" class="form-control" value="<?php echo $bdate ?>" required="required">
                  </div>

                  <div class="form-group">
                       <label>Depatment :</label>
                       <select type="text" name="dept" required="required" class="form-control">
                          <option>Select...</option>
                          <option> Computer </option>
                          <option>Mech</option>
                          <option>Civil</option>
                          <option>IT</option>
                          <option>EL</option>
                       </select>
                  </div>

                 <div class="form-group">
                      <label>Year :</label>
                    <select type="text" name="yr" class="form-control" placeholder="choce.." required="required">
                          <option>Select...</option>
                          <option> 1st Year </option>
                          <option> 2nd Year</option>
                           <option> 3rd Year</option>
                          <option> 4th Year</option>
                  
                       </select>
                </div>

                <div class="form-group">
                    <label>SAAP ID :</label>
                    <input type="Number" name="sid" class="form-control" placeholder="Enter saap id" value="<?php echo $sid ?>" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email ?>" aria-describedby="emailHelp" required="required" placeholder="Email">
                </div>
       
          
        
             <!-- Modal footer -->
                <div class="modal-footer bg-primary">
                  <a href="update.php?eid=<?php echo $d;?>"><button type="submit" name="sub" class="btn btn-dark">
                    Update  
                  </button></a>

                  <button type="button" class="btn btn-danger ml-auto"><a href="detail.php?eid=<?php echo $d; ?>" class="text-white ">Close</a></button>
                </div>

            </form>
          </div>
       </div>        
     </div>

     </div>

 
            
          

   </div>



            
            
        </div>
    </div>

</div>
<?php
}
?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>