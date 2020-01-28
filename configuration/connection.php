<?php
   
    // $jsonget = ;
    $server_info = json_decode(file_get_contents('http://election.nrbrightsmovement.com/assets/infoServier.json')); // decode json
    
    $servername = $server_info->servername; // Server/Host
    $dbusername = $server_info->dbusername; // Database User Name
    $dbpassword = $server_info->dbpassword; // Database User Password
    $dbname = $server_info->dbname; // Database Name
    
    class db{
        // connection variable
        public $conn;

        public function __construct(){
            // get data from server_init.php
            global $servername;global $dbusername;global $dbpassword;global $dbname;
            
            // DB Connection in public $conn variable
            $this->conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
            $this->conn->set_charset("utf8");$this->conn->set_charset("UTF-8");
            if($this->conn->connect_errno){
                die("DB Connectin Error. ".$this->conn->connect_errno);
            } // Connection Check

        } // construction of this connection class

    } // connection class
?>