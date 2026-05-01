<!-- Zac Baker -->
<!-- Form page, user enters data and clicks submit. 
    Navigation to go back to home page.
-->

<?php 
    require_once "ZacCreateConnection.php";

    $conn = createConnection();

    function populateTable($conn_, $firstName_, $lastName_, $team_, $age_, $height_, $active_){
        $sql = "INSERT INTO players(
            player_firstName,
            player_lastName,
            player_team,
            player_age,
            player_height,
            player_active
        ) VALUES (
            ?,?,?,?,?,?
        )"; 

        $stmt = $conn_ -> prepare($sql);
        $stmt -> bind_param("sssidi", $firstName_, $lastName_, $team_, $age_, $height_, $active_);

        if ($stmt -> execute()) {
            $stmt -> close();
        } else {
            echo "<script>alert('Error: ". $stmt -> error . "');</script>";
            $stmt -> close();
        }  
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["formSubmit"])) {
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $team = $_POST["team"];
        $age = $_POST["age"];
        $height = $_POST["height"];
        
        if (!empty($_POST["active"])) {
            $active = 1;
        } else {
            $active = 0;
        }

        populateTable($conn, $firstName, $lastName, $team, $age, $height, $active);

        header("Location: " . $_SERVER["PHP_SELF"] . "?status=form-submitted");
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
            <h1>Module 8.2 Assignment</h1>
            <hr/>

            <form class="control-group" method="POST">
                <div>
                    <a class="control-button" href="ZacTable.php">Table Home</a>
                    <a class="control-button" href="ZacPopulateTable.php">Populate Table</a>
                </div>
            </form>
            
            <h2>Baseball Player Form</h2>

            <div class="form-content">
                <form onsubmit="" method="POST">
                    <div class="form-group">
                        <div>
                            <label for="firstName">First Name</label><br>
                            <input type="text" id="firstName" name="firstName" placeholder="John" required>
                        </div>
                        <div>
                            <label for="lastName">Last Name</label><br>
                            <input type="text" id="lastName" name="lastName" placeholder="Doe" required>
                        </div>
                    </div>
                        
                    <div>
                        <label for="team">Team</label><br>
                        <input type="text" id="team" name="team" placeholder="LA Dodgers" required>
                    </div>

                    <div class="form-group">
                        <div>
                            <label for="age">Age</label><br>
                            <input type="number" id="age" name="age" maxlength="2" placeholder="32" required>
                        </div>
                        <div>
                            <label for="height">Height</label><br>
                            <input type="number" id="height" name="height" step="0.1" placeholder="6.2" required>
                        </div>
                    </div>

                    <section>
                        <input type="checkbox" id="active" name="active">
                        <label for="active">Is the player currently active?</label>
                    </section>

                    <section class="button-group">
                        <input type="submit" value="Submit" name="formSubmit" class="form-button">
                        <input type="reset" value="Clear" class="form-button">
                    </section>
                </form>
            </div>
        </div>   
        <footer>
            <p>Zac Baker | © 2026</p>
        </footer>
    </body>
</html>