<!-- Zac Baker -->
<!-- Query table, gets all data from players table.
-->
<?php 
    function queryTable($conn){
        $sql = "SELECT * FROM players"; 
        
        return $conn -> query($sql);
    }
?>