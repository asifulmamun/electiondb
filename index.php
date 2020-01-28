<!DOCTYPE html>
    <?php
        session_start();

        $login_status = $_SESSION["login"];
        echo $login_status . ' Before Condition<br>';

        // // if not logged
        // if($_SESSION['login'] !== 'Logged'){
            
        //     echo '<script>alert("Your have not logged in yet.");</script>';
        //     echo $_SESSION['login_status'] . '<br><h1 style="color:red;">For Login <a href="login/">click here</a>.</h1>';
        //     // header('location:login/');
        // }
        // else{
    ?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrat css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- custom or MAIN css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- PHP included file or some global variable -->
    <?php
        require "configuration/connection.php"; // include db connection
        require "configuration/init.php"; // include db connection
    ?>
</head>
<body>
    <!-- NAV form w3 school -->
    <?php $nav = new nav; ?>
    <div class="topnav" id="myTopnav">
        <a href="<?php echo $nav->homePage; ?>" class="active">Home</a>
        <a href="<?php echo $nav->logOUt; ?>">Log Out</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <!-- Search Form -->
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                <form id="search" action="" method="post">
                    <input placeholder="ID (English) or Name (Bangla)" type="text" name="search">
                    <input type="submit" value="Submit">
                </form>
            </div>
            <div class="col-md-1 col-sm-1"></div>
        </div> <!-- row -->
    </div> <!-- container | Search form -->


    <!-- Data -->
    <?php
        // db connection object
        $db = new db;
        
        // Request Method Check
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(empty($_POST['search'])){
                die("Enter Name or NID for data.");
            }
            $search = $_POST['search'];
            $ward_no = '30';
            // Query Which Result Want
            $sql = "SELECT * FROM voter_lists WHERE nid LIKE '%$search%' OR name LIKE '%$search%' AND ward_no = '".$ward_no."'";
            // DB Data Search Query Execute
            $results = $db->conn->query($sql);
            // Count How many results get
            $count = $results->num_rows;
    ?>
    <!-- Results Notice -->
    <center>
        <h2>
            Total Data Found: <?php echo $count;?>
        </h2>
    </center><!-- Results Notice -->

            <!-- Fetch data in while loop -->
            <?php while($data = $results->fetch_assoc()){?>

    <!-- Fetch Data Results Print -->
    <div class="container">
        <div class="row">
            <div class="dataTable col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                <table id="dataTable">
                    <tr>
                        <th>Name</th>
                        <th style='color:blue;'><?php echo $data['name'];?></th>
                    </tr>
                    <tr>
                        <td>Father's Name</td>
                        <td><?php echo $data['father'];?></td>
                    </tr>
                    <tr>
                        <td>Mother's Name</td>
                        <td><?php echo $data['mother'];?></td>
                    </tr>
                    <tr>
                        <td>Voter Number</td>
                        <td style='color:blue;'><?php echo $data['sl_no'];?></td>
                    </tr>
                    <tr>
                        <td>NID Number</td>
                        <td style='color:blue;'><?php echo $data['nid'];?></td>
                    </tr>
                    <tr>
                        <td>Center</td>
                        <td><?php echo $data['center'];?></td>
                    </tr>
                    <tr>
                        <td>Area / <b style='color:red;'>Holding Number</b></td>
                        <td><?php echo $data['area'] . " / <b style='color:red;'>" . $data['holding']."</b>";?></td>
                    </tr>
                    <tr>
                        <td>Date of Birth - <b style='color:green;'>Word Number</b></td>
                        <td><?php echo $data['dob'] . " - <b style='color:green;'>" . $data['ward_no']."</b>";?></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-1 col-sm-1"></div>
        </div> <!-- row -->
    </div><!-- Container Data Results Print -->


    <?php
            } // While loop
        } // Request method check
        else{
    ?>
    
    <!-- if Request Method not POST/ Default -->
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                <!-- default Content -->
                <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
                <h1 class="defaultH1">Idea by : Aroj Ali Sarder</h1><br>
                <h1 class="defaultH1">Developer : <a href="https://m.me/asifulmamun"></a>Al Mamun</h1>

                <style>
                    .defaultH1{
                        font-family: 'Anton', sans-serif;
                        color: green;
                        text-transform: uppercase;
                    }
                </style>
            </div>
            <div class="col-md-1 col-sm-1"></div>
        </div> <!-- row -->
    </div><!-- Container if Request Method not POST/ Default -->

    <?php
        } // Request Method
    ?>

    <!-- NAV JS from W3 School -->
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            }else{
                x.className = "topnav";
            }
        }
    </script>
</body>
</html>

<?php
    // } // if not log
?>