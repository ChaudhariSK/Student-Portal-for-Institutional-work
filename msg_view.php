
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

      <link rel="stylesheet" type="text/css" href="style.css">

    <title>Profile</title>
    <style>
    *{padding:0px; margin:0px;} 
    	.imgup:hover
    	{
    		  
  
  
  background-color: white;
  box-shadow: 5px 5px 3px #aaaaaa;
    	}

    </style>
  </head>
  <body>  

<!-- nevbar -->

  

        <nav class="navbar navbar-expand-lg  navbar-dark bg-primary navbar-fixed-top">
            <img class="" src="logo.png" style="width: 3.5%; height: 1.8%">
              <pre style="font-size: 12px; color: white;">   
   Shri Vile Parle Kelavani Mandal
  <b style="font-size: 17px; color: black;" class="text-uppercase">Institute Of Technology,Dhule  </b></pre> 
               

  		<div class="ml-auto">
 				<form class="form-inline my-2 my-lg-0" action="logout.php">

               <a href="logout.php"><button class="btn btn-danger my-2 my-sm-0" type="submit">Log-out</button></a>
            </form>
         </div>
        
      </nav>
   
<!-- My Profile -->
<?php
    
    include('db.php');

    
    $sql = mysqli_query($conn, "select * from notification where id = '".$_GET['id']."' and sid = '".$_GET['s']."' ");

    while($row=mysqli_fetch_assoc($sql)){
?>
<div class="container my-4">

  <!-- Self Profile -->
        <div class=" bg-light py-3" style="border:2px solid blue;">
        	<center><h1>Massage</h1></center>
             <div class="px-5">
             	<p><b>Date :</b><?php echo $row['date']?></p>
             	<p><b>Sender :</b><?php echo $row['sender']?></p>
             	<p><b>Massage :</b><?php echo $row['msg']?></p>

             </div>
            
        </div>

          
<?php
}

 	 $result= "UPDATE notification SET status='read' WHERE id='".$_GET['id']."' ";

 	 $sql = mysqli_query($conn, $result);


?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>









