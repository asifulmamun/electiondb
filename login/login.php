<!-- Set Browser Information in $browses Variable php -->
<script>
  <?php
  session_start();
    $browses = "<script>document.write(navigator.platform);</script>";
  ?>
</script>

<?php
    if($_SERVER['REQUEST_METHOD'] !== 'POST'){
        header('location: index.php');
    }

    $id = $_POST['id']; // Phone Number
    $passWord = $_POST['psw']; // Password
    $device = $browses; // Device Name



    if($id == "mamun" AND $passWord == "aroj"){
      $_SESSION["login"] = "Logged";

      echo '<script>alert("Login Success..");</script>';
      echo $_SESSION["login"] . '<br><h1 style="color:green;">For go to home <a href="../">click here</a>.</h1>';
      // header('location:../');
    }
    else{
      echo '<script>alert("Sorry! Your ID or Password Incorrect or you have not Authorized.");</script>';
      echo '<h1 style="color:red;">Wrong Paassword! You will redirect from here to log in page in 3 Seconds or <a href="index.php">click here</a>.</h1>';
      echo '<br>You Have Entered Your ID: '  . $id;
      echo '<br>You Have Entered Your Password: '  . $passWord;
      echo '<br>Your Device is: '  . $device;
    }
?>
<!-- <meta http-equiv="refresh" content="2; url=index.php" /> -->
