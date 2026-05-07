<!-- Zac Baker -->
<!-- Query page, show data either all or by first name. 
    Navigation to go back to home page.
-->

<?php 
    require_once "ZacQueryTable.php";
    require_once "ZacCreateConnection.php";

    $conn = createConnection();

    $tableData = null;


    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["showAll"])) {
        $tableData = queryTableAll($conn);
    }

    
    if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["searchPlayer"])) {
        $tableData = queryTableName($conn, $_POST["searchPlayer"]);
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
            <h1>Module 9.2 Assignment</h1>
            <hr/>

            
            <div class="nav-group">
                <a class="nav-button" href="ZacIndex.php">Home</a>
                <a class="nav-button" href="ZacForm.php">Form</a>
            </div>

            <form class="query-group" method="POST">
                <button class="crud-button" type="submit" name="showAll" >Show All</button>
                <div class="query-subgroup">
                    <div>
                        <label for="search">Search Player</label><br>
                        <input type="text" name="searchPlayer" placeholder="John">
                    </div>
                    
                    <input type="submit" value="Submit" class="form-button">
                </div>
            </form>
            
            <h2>Baseball Player Search</h2>

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