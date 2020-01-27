<!-- Set Browser Information in $browses Variable php -->
<script><?php $browses = "<script>document.write(navigator.platform);</script>";?></script>

<?php
    if($_SERVER['REQUEST_METHOD'] !== 'POST'){
        header('location: index.php');
    }

    $id = $_POST['pn_number']; // Phone Number
    $passWord = $_POST['psw']; // Password
    $device = $browses; // Device Name

    echo '<br>You Have Entered Your ID: '  . $id;
    echo '<br>You Have Entered Your Password: '  . $passWord;
    echo '<br>Your Device is: '  . $device;
    echo '<br>Your Device is: '  . $device;

    if($id == "mamun" && $passWord == "aroj"){
      session_start();
      $_SESSION['login_status'] = 'true';
      header('location: ../');
    }
    else{
      echo '<script>alert("Sorry! Your ID or Password Incorrect or you have not Authorized.");</script>';
      // header('location: index.php');
    }
?>
<h1 style="color:red;">You will redirect from here to log in page in 3 Seconds.</h1>
<meta http-equiv="refresh" content="2; url=index.php" />
