<?php
include('db.php');
session_start();
$d = $_GET['id'];

$sql = mysqli_query($conn, "select * from course where id = '".$d."' ");
while($row = mysqli_fetch_array($sql))
{

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Notification</title>
  </head>
  <body style="background-color: black ">
    <div class="container p-5">
      <div class="px-5 text-white" style="border: 2px solid blue;">
        
                    <h3 class="pt-3">View Notification</h3>
                    <hr style="color: blue">
                    <div class="mx-5">
                        <b>Name :</b> <?php echo $row['cname'];?> <br>
                        <b>Subject Name :</b> <?php echo $row['sub_name'];?> <br>
                        <b>ID :</b> <?php echo $row['cid'];?> <br>
                        <b>Path :</b> <?php echo $row['path'];?> <br>
                        <b>Status :</b> <?php echo $row['status'];?> <br>

                        </div>
                        <?php
                        include('db.php');
                        $dd = $_GET['id'];
                        if(isset($_POST['comp']))
                        {
                          $ss = mysqli_query($conn, "update course set msg = 'read' where id = '".$dd."' ");
                          header("location:admin.php");
                        }

                        ?>
                          <div class="p-5">
                            <form action="notification.php?id=<?php echo $row['id']; ?>" method="POST">
                            <a href="admin.php"><button class="btn btn-outline-danger mr-auto" type="submit" name="comp">Close</button></a>
                          </form>
                          </div>
      </div>

    </div>
    <?php
  } ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>