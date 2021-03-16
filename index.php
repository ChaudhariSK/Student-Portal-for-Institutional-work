<?php



include('db.php');
if(isset($_POST['sub']))
{
  $ct = "";
  $ct1 = "";
  $name = $_POST['name'];
  $nu = $_POST['nu'];
  $add = $_POST['ad'];
  $bdate = $_POST['bd'];
  $dept = $_POST['dept'];
  $year = $_POST['yr'];
  $saap = $_POST['sid'];
  $email = $_POST['email'];
  $pass = $_POST['ps'];

  $target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

  $image = $_FILES["fileToUpload"]["name"];

  $qq = mysqli_query($conn, "select * from entry");
  while ($a = mysqli_fetch_array($qq)) {
    if($email == $a['email']){
          $ct = 1;


          $qqq = mysqli_query($conn, "select * from registration");
          while ($aa = mysqli_fetch_array($qqq)) {
          if($saap == $aa['sid'] or $email == $aa['email']){
            $ct1 = 2;
              }}

              if($ct1 == 2)
              {
                  echo '<script>alert("data already exists");</script>';          
              }
              else{
          $sql = mysqli_query($conn, "insert into registration(name, number, address, bdate, dept, year, sid, email, pass, img) values('$name','$nu','$add','$bdate','$dept','$year','$saap','$email','$pass','$image')");
  
          if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
          {
            echo '<script>alert("Data Successfully entered");</script>';
          }
          else{
              echo '<script>alert("error Occured");</script>';
          }

        }
        
        
      }

    }
    if($ct == 0){ echo '<script>alert("No Permission!");</script>'; }


}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Login</title>

<style type="text/css">
  .bb{
    width: 100%;
  height: 100vh;
 
  
  
  background-image: url('bg3.jpg');
  background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
  }
</style>

  </head>
  <body class="bod">
<div class="row bb">
    <div class="Box col-lg-6 col-md-6 col-10">
       <h2>Login</h2>
    <form action="index.php" method="POST">
        <div class="inputBox form-group"  >
            
            <input type="email"  name="user" required>
            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email address:</label>

        </div>
        <div class="inputBox">
           
            <input type="password" type="password" name="pass" required>
             <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Password:</label>
         </div>
         <div class="form-group form-check">
             <label class="form-check-label text-white">
             <input class="form-check-input" type="checkbox" > Remember me
             </label> 
         </div>
          <button class="btn btn-outline-primary" type="submit" name="btn" >Login </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button class=" btn btn-outline-primary ml-auto" data-toggle="modal" data-target="#myModal">New User?</button>
    </form>
  </div>
</div>
<!-- php code for login -->
<?php
  
  session_start();
  include('db.php');
  if(isset($_POST['btn']))
  {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
 
    $q = mysqli_query($conn, "select * from registration where email='".$user."' && pass='".$pass."' limit 1");
    $row = mysqli_fetch_array($q);

    
    if(is_array($row))
    {
        $idd = $row['id'];
        $sid = $row['sid'];
       header("location:profile.php?eid=$idd&s=$sid");
       
    }
    else
    {
        
        if($user == "admin@gmail.com" && $pass == "admin")
        {
           header("location:admin.php");
           
        }
        
        echo '<script>alert("Pliz Enter Valide Entry");</script>';
          
      } 
  }
?>


<!-- The Modal -->
<div class="container mx-5 my-5">
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg ">
      <div class="modal-content mx-5 my-5">
      
        <!-- Modal Header -->
        <div class="modal-header btn-dark">
          <h4 class="modal-title text-white">Registration</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div style="padding-left: 30px; padding-right: 30px">
        <!-- Modal body -->
        <div class="modal-body bg-light">
        
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                 <label>Full Name :</label>
                 <input type="text" name="name" class="form-control" placeholder="Enter full name" required="required" >
            </div>
            <div class="form-group">
                <label>Mob.Number :</label>
           <input type="Number" id="phone" name="nu" class="form-control" placeholder="Enter Number"  maxlength="10"  pattern="[0-9]{10}" required="required">
            </div>

            <div class="form-group">
                 <label>Address :</label>
                 <textarea type="text" name="ad" required="required" class="form-control" placeholder="Address"> </textarea>
            </div>

            <div class="form-group">
                 <label>Birth-Date :</label>
                 <input type="date" name="bd" class="form-control" required="required">
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
                <input type="Number" name="sid" class="form-control" placeholder="Enter saap id" required="required">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required" placeholder="Email">
            </div>
             <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="Password" name="ps" class="form-control" id="exampleInputPassword1" required="required" placeholder="password">
             </div>
          
              <div class="form-group">
                <label for="exampleFormControlFile1">Image:</label>
                <br>
               <input type="file" name="fileToUpload" id="fileToUpload" required="required">
                
            </div>
        
        <!-- Modal footer -->
        <div class="modal-footer bg-dark">
          <input type="submit" name="sub" value="Submit" class="btn btn-primary" />

          <button type="button" class="btn btn-secondary ml-auto" data-dismiss="modal">Close</button>
        </div>

    </form>
    </div>
 </div>        
      </div>
    </div>
  </div>
  
</div>

</div>
<script type="text/javascript">
  $("#phone").keydown(function(event) {
  k = event.which;
  if ((k >= 96 && k <= 105) || k == 8) {
    if ($(this).val().length == 10) {
      if (k == 8) {
        return true;
      } else {
        event.preventDefault();
        return false;

      }
    }
  } else {
    event.preventDefault();
    return false;
  }

});
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>