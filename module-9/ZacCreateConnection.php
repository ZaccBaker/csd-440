<!-- Zac Baker -->
<!-- Query to create connection to database.
-->
<?php 
    function createConnection(){
        $server = "localhost";
        $database = "baseball_01";
        $username = "student1";
        $password = "pass";

        $conn = new mysqli($server, $username, $password, $database);
        return $conn;
    }
?>