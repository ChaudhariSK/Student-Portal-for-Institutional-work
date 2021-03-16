<?php 
   include('db.php');
    if(isset($_POST["submit"]))
{
       $ql = mysqli_query($conn, "select * from entry");
       while ($rrr=mysqli_fetch_array($ql)) {

                    $del = mysqli_query($conn, "DELETE FROM entry WHERE id = '".$rrr['id']."' ");
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
               
             
                $query = "INSERT into entry(prn, name, email) values('$item1','$item2','$item3')";
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
                  
             </ul>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  
              
            </ul>
            <form>
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

<div class="container" style="background-color: black">
    <div class="p-2">
    <div class="py-5" style="border: 2px solid blue">
        
    <form action="admin_courses.php" method="post" enctype="multipart/form-data">
        <div class="px-5">
            <h5><label class="text-white">Select CSV File Only : <small>( PRN, Name, Email )</small></label><br></h5>
            <input type="file" name="file" class="text-white" required />
            
            <input type="submit" name="submit" value="Upload" class="btn btn-primary" />
        </div>
    </form></div></div>


<?php
include('db.php');
$rr = "";
$qu = "";
$cour = "";
if(isset($_POST['check']))
{
if(!empty($_POST['check_list'])) {
    foreach($_POST['check_list'] as $check) {
            $cour .= $check. " "; 
                        
    }

    
}
$comp = $_POST['con'];
$extra = $_POST['extra'];
$yr = $_POST['yr'];
$text = $_POST['tx'];
$data = mysqli_query($conn, "select * from registration where year = '".$yr."' ");
while($rr=mysqli_fetch_array($data)) {

      $sid = $rr['sid'];
      $y = $rr['year'];
      $date = date('d/m/y');
      $qu = mysqli_query($conn, "insert into c_stud(sid, year, status, select_c, e_course, comp, link, date) values('$sid', '$y', 'unok', '$cour', '$extra', '$comp', '$text', '$date')");


}
if($qu == 1)
{
   echo "<br><h5><font color=green>Send Data Successfully :".$cour;
}
else
{
  echo "<br><h5><font color=red> ERROR";
}
}
?>

<div class="p-5">
    <form action="admin_courses.php" class="form-group " method="post">
        <h5>
          <label class="text-white">Slelct Courses :</label>
          <div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="customSwitch1" name="check_list[]" value="NPTEL">
  <label class="custom-control-label text-white" for="customSwitch1">NPTEL Course</label>
</div>
      <div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="customSwitch2" name="check_list[]" value="COURSERA">
  <label class="custom-control-label text-white" for="customSwitch2">COURSERA Course</label>
</div>
      <div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="customSwitch3" name="check_list[]" value="SPOKEN">
  <label class="custom-control-label text-white" for="customSwitch3">SPOKEN Course</label>
</div>
<!--     <label class="text-white">NPTL &nbsp;&nbsp;&nbsp;</label><input type="checkbox" name="check_list[]" value="NPTL"><br>
    <label class="text-white">Cosera&nbsp;&nbsp;</label><input type="checkbox" name="check_list[]" value="Cosera"><br>
    <label class="text-white">Udemy&nbsp;&nbsp;</label><input type="checkbox" name="check_list[]" value="Udemy"><br> -->
   <br>

<label class="text-white">Extra Cource :</label>
    <input type="text" class="form-control bg-dark text-white" name="extra" placeholder="Enter Cource Name...."><br>

    <label class="text-white">compulsory :</label>
    <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="customControlValidation2" name="con" value="yes">
    <label class="custom-control-label text-white" for="customControlValidation2">YES</label>
  </div>
  <div class="custom-control custom-radio mb-3">
    <input type="radio" class="custom-control-input" id="customControlValidation3" name="con" value="no" >
    <label class="custom-control-label text-white" for="customControlValidation3">NO</label>
  </div>
  <div>
    <label class="text-white">Year :</label>
                 <select type="text" name="yr" class="form-control bg-dark text-white" placeholder="choce.." required="required">
                      <option>Select...</option>
                    <option> 1st Year </option>
                    <option> 2nd Year</option>
                    <option> 3rd Year</option>
                    <option> 4th Year</option>
              </select>    
                 
          </div>
           <div><br>
                 <label class="text-white">Comment or Link :</label>
          <textarea type="text" name="tx"  class="form-control bg-dark text-white" placeholder="Comments or link" ></textarea>
        </div><br>
     <input type="submit" value="send" name="check" class="btn btn-primary" />

</h5>
</form>

</div>

 </form></div></div>


</div>








    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>