    <!-- NAV form w3 school -->
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php $nav = new nav; ?>
    <div class="topnav fixed" id="myTopnav">
        <a href="<?php echo $nav->homePage; ?>" class="active">নিজ নাম অথবা আইডি</a>
        <a class="fontGalanda" href="sl-number.php">পিতা ও নিজ নাম</a>
        <a class="fontGalanda" href="father.php">শুধু পিতার নাম</a>
        <a class="fontGalanda" href="mother.php">শুধু মাতার নাম</a>
        <a class="fontGalanda" href="father-mother.php">পিতা মাতার নাম</a>
        <a class="fontGalanda" href="sl-number.php">ভোটার/সিরিয়াল নাম্বার</a>
        <a href="<?php echo $nav->logOUt; ?>">Log Out</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
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

    <!-- style by asifulmamun -->
    <style>
        .fixed{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999;
        }
    </style>
    <!-- ecs logo -->
    <center>
    <img style="width: 80px;margin: 15px 0px;" src="http://election.nrbrightsmovement.com/assets/img/esc.jpg" alt="ecs-bd">
    </center>