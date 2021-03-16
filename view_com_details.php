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
    <style>
      .imgclass{
        width: 90%;
        height: 80%;
      }
    </style>
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
<div class="container my-4 pt-5 mt-5">
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

           <!--  <img src="temp.jpg" class="" style="width: 65%; height: 70%; border:  2px solid black;">     
            
                <h4 class="title"><p><?php echo $row['name']; ?></p></h4>
                <h5><p style="color: blue"> <?php echo $row['email']; ?></p></h5>
                
              <a href="detail.php?eid=<?php echo $d; ?>" style="color: black"><button class="btn btn-outline-primary "><b>View Details</b>  </button></a> -->
     <?php
                  }
                  ?>
            

            <div class="col-lg-7 col-md-7 col-sm-6 col-5 bg-light mx-2 py-3">


                  <?php
                        
                      include('db.php');

                      
                      $sql = mysqli_query($conn, "select * from course where id = '".$_GET['id']."' ");

                      while($row=mysqli_fetch_assoc($sql)){
                      $d = $row['id'];
                  ?>

                    <h3>View Course Details [  <?php echo $row['cname'];?> ]</h3>
                    <hr style="color: blue">
                    <div class="ml-5">
                        <b>Name :</b> <?php echo $row['cname'];?> <br>
                        <b>Subject Name :</b> <?php echo $row['sub_name'];?> <br>
                        <b>ID :</b> <?php echo $row['cid'];?> <br>
                        <b>Path :</b> <?php echo $row['path'];?> <br>
                        <b>Marks :</b><?php echo $row['marks']; ?><br>
                        <b>Status :</b> <?php echo $row['status'];?> <br>

                        </div>
                          <div style="padding: 200px 50px 10px 100px">
                            <p>If you see the pro then click this buttom :  <button class="btn btn-primary my-2 my-sm-0" type="submit" name="comp" data-toggle="modal" data-target="#myModal1">Show Document</button>
                          </div>

                  


                    <?php
                  }
                  ?>
                                <div class="container mx-5 my-5">
                                   <div class="modal fade" id="myModal1">
                                      <div class="modal-dialog modal-lg ">
                                        <div class="modal-content mx-5 my-5">
                                        
                                             
                                           <div class="modal-header btn-primary">
                                                <h4 class="modal-title text-white" style="color:black">Document</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          </div>
                                          <div style="padding-left: 30px">
                                  <!-- Modal body -->
                                                <div class="modal-body bg-light">
                                                  <?php
                                                    include('db.php');
                                                    $qq = mysqli_query($conn, "select * from course where id = '".$_GET['id']."'");
                                                    while ($rr = mysqli_fetch_assoc($qq)) {
                                                      $img = $rr['file'];
                                                    }
                                                  ?>

                                                  <img src="uploads/<?php echo $img; ?>" class="imgclass">
                                                   
                                                  <br>

                                                  </form>



                                                </div>
                                            </div>

                                        </div>
                                      </div>
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