<!-- Zac Baker -->
<!-- Main table page, shows all navigation and operation buttons.
-->

<?php 
    require_once "ZacCreateConnection.php";
    require_once "ZacCreateTable.php";
    require_once "ZacDropTable.php";

    $conn = createConnection();

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
                <a class="nav-button" href="ZacForm.php">Form</a>
                <a class="nav-button" href="ZacQuery.php">Query</a>
            </div>

            <form class="crud-group" method="POST">
                <div>
                    <button class="crud-button" type="submit" name="createTable" >Create Table</button>
                    <button class="crud-button" type="submit" name="dropTable" >Drop Table</button>
                </div>
            </form>
        </div>   
        <footer>
            <p>Zac Baker | © 2026</p>
        </footer>
    </body>
</html>