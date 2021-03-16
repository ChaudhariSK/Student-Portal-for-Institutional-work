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
    $d = $row['id'];
  
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
    <br><br><br><br>
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
    $year = $row['year'];
}

  $cname = $_POST['name'];
  $sname= $_POST['subname'];
  $cid = $_POST['cid'];
  $date = $_POST['date'];
  $status = $_POST['ts'];
  $path = $_POST['path'];
  $mark = $_POST['compin'];

if($status == 'Runing')
{
  $sql = mysqli_query($conn, "insert into course(cname,sub_name, marks, cid, date, status, path, name, sid, year, email, file, msg) values('$cname', '$sname', '', '$cid', '$date', '$status', '$path', '$name', '$saap', '$year', '$email', 'null', 'unread')");
  }
  else {
    $sql = mysqli_query($conn, "insert into course(cname,sub_name, marks, cid, date, status, path, name, sid, year, email, file, msg) values('$cname', '$sname', '$mark', '$cid', '$date', '$status', '$path', '$name', '$saap', '$year', '$email', 'null', 'unread')");
  }

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
    $year = $row['year'];
    

?>
            <div class="col-lg-7 col-md-7 col-sm-6 col-5 bg-light mx-2 py-3">

                     <div class="modal-header btn-primary">
              <h4 class="modal-title text-white">Add Course </h4>
              
           </div>
           <div style="padding-left: 30px; padding-right: 30px">
        <!-- Modal body -->
           <div class="modal-body bg-light">
           	

       
        
             <form action="addcourse.php?s=<?php echo $saap ?>&eid=<?php echo  $d;?>" method="POST">
                  
             
           
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
             
        <div class="form-group">
          <label>Select certificate</label>
          <input type="file" name="fileToUpload" id="fileToUpload">
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




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>