<?php  
	include('db.php');

$d = $_GET['eid'];

if(isset($_POST['sub']))
{

	 

  	   	$name = $_POST['name'];
		  $nu = $_POST['nu'];
		  $add = $_POST['ad'];
		  $bdate = $_POST['bd'];
		  $dept = $_POST['dept'];
		  $year = $_POST['yr'];
		  $saap = $_POST['sid'];
		  $email = $_POST['email'];
		 
 	 

 	 $result= "UPDATE registration SET name='".$name."', number='".$nu."', address='".$add."', bdate='".$bdate."', year='".$year."', sid='".$saap."',email='".$email."' WHERE id='".$d."'";

 	 $sql = mysqli_query($conn, $result);

 	 if($sql)

 	 {
 	 	 echo '<script>alert("Data Updated");</script>';

    	
 	 }
  	 else
  	 {
   		 echo '<script>alert("error Occured");</script>';

 	 }
}

header('location:detail.php?eid='.$d);

?>











