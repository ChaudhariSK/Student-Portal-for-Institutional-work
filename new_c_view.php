  

    <?php 
                    include('db.php');
                    $c = "";
                    $dates = array();
                  
                    $s = mysqli_query($conn, "select * from notification where status = 'unread' and sid = '".$_GET['s']."' ");
                    while ($r=mysqli_fetch_array($s)) {
                      
                      $dates[] = $r;
                    $c++;
                  }
        ?>


<?php
session_start();



  
                    include('db.php');
                    $c1 = "";
                    $dates1 = array();
                  
                    $ss = mysqli_query($conn, "select * from c_stud where status = 'unok' and sid = '".$_GET['s']."' ");
                    while ($rr=mysqli_fetch_array($ss)) {
                      
                      $dates1[] = $r;
                    $c1++;
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

      <link rel="stylesheet" type="text/css" href="style.css">

    <title>Profile</title>
    <style>
    *{padding:0px; margin:0px;} 
      .imgup:hover
      {
          
  
  
  background-color: white;
  box-shadow: 5px 5px 3px #aaaaaa;
      }
      .bs{
        border-radius: 50%;
        font-size: 10px;
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

        <nav class="navbar navbar-expand-lg  navbar-dark bg-primary navbar-fixed-top">
            <img class="" src="logo.png" style="width: 3.5%; height: 1.8%">
              <pre style="font-size: 12px; color: white;">   
   Shri Vile Parle Kelavani Mandal
  <b style="font-size: 17px; color: black;" class="text-uppercase">Institute Of Technology,Dhule  </b></pre> 
               



            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link text-uppercase" href="Profile.php?eid=<?php echo $_GET['eid'];?>&s=<?php echo $date['sid']; ?>">Home <span class="sr-only">(current)</span></a>
                  </li>

<!-- Notification -->
                  <li class="nav-item dropdown">

                    <a class="nav-link text-uppercase" style="color: white" href="#" id="navbardrop" data-toggle="dropdown">
                      Notification
                    
                       <span class="badge badge-danger"><?php echo $c;?></span>

                      
                    </a>
  
                    <div class="dropdown-menu">
                     <?php 
                      foreach ($dates as $date) {
                      if ($date) {
                        
                          
                      
                     ?>
                      <a class="dropdown-item" href="msg_view.php?s=<?php echo $date['sid']; ?>&id=<?php echo $date['id']; ?>">
                      
                        <small><i><?php echo 'Date :'.$date['date'];?>  </i></small><br>
                        <p><?php echo $date['sender'] ?></p>
                        
                      </a>
                  <?php } }?>
                      
                    </div>
                   
                  </li>

                  <li class="nav-item active">
                    <a class="nav-link text-uppercase" href="activity.php?eid=<?php echo $_GET['eid'];?>&s=<?php echo $s; ?>">Activity <span class="sr-only">(current)</span></a>
                  </li>

                   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white text-uppercase pr-5" style="color: black" href="#" id="navbardrop" data-toggle="dropdown">
                      Course Status
                    </a>
                    <div class="dropdown-menu text-uppercase">
                       <a class="dropdown-item" href="new_c.php?s=<?php echo $s;?>&eid=<?php echo $_GET['eid'];?>">New Couese &nbsp;&nbsp;<span class="badge badge-success bs text-dark"><?php echo $c1 ;?></span></a>
                      <a class="dropdown-item" href="addcourse.php?s=<?php echo $s;?>&eid=<?php echo $_GET['eid'];?>">Add Course</a>
                      <a class="dropdown-item" href="viewc.php?s=<?php echo $s; ?>&eid=<?php echo $_GET['eid'];?>">View Courses</a>
                     
                    </div>
                  </li>
                 
                </ul>
                <?php
            
            ?>

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

    
    $sql = mysqli_query($conn, "select * from registration where id = '".$_GET['eid']."' ");

    while($row=mysqli_fetch_assoc($sql)){
    $d = $row['id'];
?>
<div class="container my-4">
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

<?php
}
?>

          <div class="col-lg-7 col-md-7 col-sm-5 col-6 bg-light py-3">
            <?php
            include('db.php');
              $q = mysqli_query($conn, "select * from c_stud where id = '".$_GET['id']."' ");
              while($r=mysqli_fetch_array($q))
              {
                if($r['comp'] == 'no'){
                ?>
                <div class="p-3">
                  <h5><?php echo $r['select_c'] ?></h5>
                  <h5><?php echo $r['e_course'] ?></h5>
                    <div class="pl-3">
                      <?php echo $r['link'] ?>
                    </div>
                </div>

                <?php
                $up=mysqli_query($conn, "UPDATE c_stud SET status = 'ok' where id = '".$_GET['id']."' ");
              }
              else
              { ?>

              <div class="p-3">
                  <h5><?php echo $r['select_c'] ?></h5>
                  <h5><?php echo $r['e_course'] ?></h5>
                    <div class="pl-3">
                      <?php echo $r['link'] ?>
                    </div><br>
                    <div class="ml-5 pt-5 pl-5">
                   If you register in this cours then click :&nbsp;<button type="submit" name="ss" class="btn btn-primary"  data-toggle="modal" data-target="#myModal">Form</button>
                </div>                
                  </div>


                <?php
                  }
              }

            ?>




              <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header bg-primary">
          <h4 class="modal-title">Add Course</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body px-5">
          


<?php


    $sql = mysqli_query($conn, "select * from registration where sid = '".$_GET['s']."' ");

    while($row=mysqli_fetch_assoc($sql))
    {
    $d = $row['id'];
    $name = $row['name'];
    $saap = $row['sid'];
    $year = $row['year'];
    
}
?>

        
             <form action="new_c.php?s=<?php echo $saap ?>&eid=<?php echo  $d;?>&id=<?php echo $_GET['id']; ?>" method="POST">
                  
             
           
                               <b><p>Name   :<?php echo $name ?></p>
                  <p>Saap ID: :<?php echo $saap ?></p></b>
                 <div class="form-group">
                    <label>Course Name :</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter full name" value="" required="required">
                  </div>
                  <div>
                   <label>Subject Name :</label>
                    <input type="text" name="subname" class="form-control" placeholder="Enter full name" value="" required="required">
                  </div>
                 <div class="form-group">
                    <label>Course ID :</label>
                    <input type="text" name="cid" class="form-control" placeholder="Enter Number" value="" required="required">
                </div>

                 <div class="form-group">
                    <label>Starting Date :</label>
                    <input type="date" name="date" class="form-control" placeholder="MM/DD/YYYY" value="" required="required">
                </div>
<script type="text/javascript">
  

var otherInput;
function checkOptions(select) {
  otherInput = document.getElementById('compInput');
  if (select.options[select.selectedIndex].value == "comp") {
    compInput.style.display = 'block';
    
  }
  else {
    compInput.style.display = 'none';
  }
}

</script>
                <div class="form-group">
                      <label>Current Status :</label>
                    <select type="text" name="ts" class="form-control" placeholder="choce.." onchange="checkOptions(this)">
                          <option value="select">Select...</option>
                          <option value="runing"> Runing </option>
                          <option value="comp"> Completed</option>
                           <option value="quite"> Quit</option>
                          
                  
                       </select>
                        
                </div>
                
                  <div class="form-group">
                     <input name='compin' id='compInput' class="form-control" type="text" style="display: none" placeholder="Enter Marks (%)" />
                  </div>
                
                <div class="form-group">
                    <label>Full Path :</label>
                    <input type="text" name="path" class="form-control" placeholder="Enter Path" value="" required="required">
                </div>
             
        
             <!-- Modal footer -->
                
              

                
<div class="modal-footer">
      <button type="submit" name="add" class="btn btn-primary mr-auto">
                    Submit 
                  </button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
            </form>
          
        
      </div>
    </div>
  </div>
  
</div></div></div></div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
