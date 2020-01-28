    <!-- NAV form w3 school -->
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php $nav = new nav; ?>
    <div class="topnav" id="myTopnav">
        <a href="<?php echo $nav->homePage; ?>" class="active">Home</a>
        <a class="fontGalanda" href="sl-number.php">ভোটার/সিরিয়াল নাম্বার দিয়ে</a>
        <a class="fontGalanda" href="father.php">বাবার নাম দিয়ে</a>
        <a class="fontGalanda" href="mother.php">মাতার নাম দিয়ে</a>
        <a class="fontGalanda" href="father-mother.php">পিতা মাতার নাম দিয়ে</a>
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

    <!-- ecs logo -->
    <center>
    <img style="width: 80px;margin: 20px 0px;" src="http://ecs.gov.bd/front/assets/images/logo.png" alt="ecs-bd">
    </center>