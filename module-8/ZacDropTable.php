<!-- Zac Baker -->
<!-- Query to drop table from database.
-->
<?php 
    function dropTable($conn){
        $sql = "DROP TABLE players;";
        $conn -> query($sql);
    }
?>