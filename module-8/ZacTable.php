<!-- Zac Baker -->
<!-- Main table page, shows all navigation and operation buttons.
-->

<?php 
    require_once "ZacCreateConnection.php";
    require_once "ZacCreateTable.php";
    require_once "ZacDropTable.php";
    require_once "ZacQueryTable.php";

    $conn = createConnection();

    $tableData = null;

    // Crud Opperations
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["createTable"])) {
        createTable($conn);
        
        header("Location: " . $_SERVER["PHP_SELF"] . "?status=created");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["dropTable"])) {
        dropTable($conn);
        
        header("Location: " . $_SERVER["PHP_SELF"] . "?status=dropped");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["showTable"])) {
        $tableData = queryTable($conn);
    }

    function tdValue($value){
        if ($value == "Yes"){
            $class = "td-true";
        } else {
            $class = "td-false";
        }
        echo "<div class='$class'>$value</div>";
    }

?>

<html>
    <head>
        <title>CSD-440: Server-Side Scripting</title>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald&display=swap">
    </head>

    <body>
        <div class="content">
            <h1>Module 8.2 Assignment</h1>
            <hr/>

            <form class="control-group" method="POST">
                <div>
                    <button class="control-button" type="submit" name="createTable" >Create Table</button>
                    <button class="control-button" type="submit" name="dropTable" >Drop Table</button>
                    <button class="control-button" type="submit" name="showTable" >Show Table</button>
                </div>
                
                
                <div>
                    <a class="control-button" href="ZacTable.php">Table Home</a>
                    <a class="control-button" href="ZacPopulateTable.php">Populate Table</a>
                </div>
            </form>
            
            <h2>Baseball Player's</h2>

            <div class="table-content">
                <table>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Team</th>
                        <th>Age</th>
                        <th>Height</th>
                        <th>Active</th>
                    </tr>
                    <tbody>
                        <?php if ($tableData && $tableData->num_rows > 0): ?>
                            <?php while ($row = $tableData->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo $row["player_firstName"]; ?></td>
                                    <td><?php echo $row["player_lastName"]; ?></td>
                                    <td><?php echo $row["player_team"]; ?></td>
                                    <td><?php echo $row["player_age"]; ?></td>
                                    <td><?php echo $row["player_height"]; ?></td>
                                    <td><?php  tdValue($row["player_active"] ? "Yes" : "No"); ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>   
        <footer>
            <p>Zac Baker | © 2026</p>
        </footer>
    </body>
</html>