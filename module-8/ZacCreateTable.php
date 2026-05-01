<!-- Zac Baker -->
<!-- Query to create table for database.
-->
<?php 
    function createTable($conn){
        $sql = "CREATE TABLE IF NOT EXISTS players( 
            player_id INT PRIMARY KEY AUTO_INCREMENT, 
            player_firstName VARCHAR(50), 
            player_lastName VARCHAR(50), 
            player_team VARCHAR(50), 
            player_age INT, 
            player_height FLOAT, 
            player_active BOOLEAN 
        )"; 
        
        $conn -> query($sql);
    }
?>