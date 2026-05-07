<!-- Zac Baker -->
<!-- Query table, gets all data from players table.
-->
<?php 
    function queryTableAll($conn){
        $sql = "SELECT * FROM players"; 
        
        return $conn -> query($sql);
    }

    function queryTableName($conn, $name){
        $stmt = $conn -> prepare("SELECT * FROM players WHERE player_firstName = ?");
        $stmt -> bind_param("s", $name);
        $stmt -> execute();
        
        return $stmt -> get_result();
    }
?>