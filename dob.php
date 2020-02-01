<!-- Header -->
    <?php require_once 'header.php';?>

    <!-- Search Form -->
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                <form id="search" action="" method="post">
                    <br><b class="redNotice">NOTE: </b><span class="redNotice">পিতা মাতার উভয়ের নামের গুরুত্বপূর্ণ কিছু অংশ দিয়ে চেষ্টা করুন।</span>
                    <br><br><input placeholder="নিজের নামের গুরুত্বপূর্ণ কিছু অংশ অথবা নাম লিখুন" type="text" name="name">
                    <input placeholder="জন্ম তারিখ/মাস/বছর (০১/০১/১৯৯০)"type="text" name="dob">
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
            if(empty($_POST['father'])){
                die("Enter Name or NID for data.");
            }
            $name = $_POST['name'];
            $dob = $_POST['dob'];
            // Query Which Result Want
            $sql = "SELECT * FROM voter_lists WHERE name LIKE '%$name%' AND dob LIKE '%$dob%'";
            // DB Data Search Query Execute
            $results = $db->conn->query($sql);

            // Count How many results get
            $count = $results->num_rows;
            // count en to bn converter
            class BanglaConverter {
                public static $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
                public static $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
                
                public static function bn2en($number) {
                    return str_replace(self::$bn, self::$en, $number);
                }
                public static function en2bn($number) {
                    return str_replace(self::$en, self::$bn, $number);
                }
            } // converter en to bn or bn to en number
            

    ?>
    <!-- Results Notice -->
    <center>
        <h2 class="dataCount">
            <!-- $count converted en to bn and show result -->
            সর্বমোট তথ্য পাওয়া গিয়েছেঃ <?php echo BanglaConverter::en2bn("$count");?> জন।
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
                        <td>Serial Number</td>
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
        }else{
            require_once 'body-notice.php'; // call notice page
        } // Request Method
    ?>

</body>
</html>

<?php
    // } // if not log
?>
