<?php 
    require("./fpdf.php");


    $server = "localhost";
    $database = "baseball_01";
    $username = "student1";
    $password = "pass";

    $conn = new mysqli($server, $username, $password, $database);

    $sql = "SELECT * FROM players"; 

    $rs = mysqli_query($conn, $sql);

    if (!$rs) {
        exit("Error with SQL");
    }


    $pdf = new FPDF();
    $pdf -> AddPage();
    $cell_width = array(35, 25);
    $pdf -> SetFont("Arial", "B", 10);

    // Header
    $pdf -> SetFillColor(102, 214, 166);
    $pdf -> Cell($cell_width[1], 10, "First Name", 1, 0, "C", true);
    $pdf -> Cell($cell_width[1], 10, "Last Name", 1, 0, "C", true);
    $pdf -> Cell($cell_width[1], 10, "Team", 1, 0, "C", true);
    $pdf -> Cell($cell_width[1], 10, "Age", 1, 0, "C", true);
    $pdf -> Cell($cell_width[1], 10, "Height", 1, 0, "C", true);
    $pdf -> Cell($cell_width[1], 10, "Active", 1, 1, "C", true);
    
    // Content
    $fill = false;

    if (mysqli_num_rows($rs) > 0) {
        while ($row = mysqli_fetch_assoc($rs)) {
            $pdf -> Cell($cell_width[1], 10, $row['player_firstName'], 1, 0, "C", $fill);
            $pdf -> Cell($cell_width[1], 10, $row['player_lastName'], 1, 0, "C", $fill);
            $pdf -> Cell($cell_width[1], 10, $row['player_team'], 1, 0, "C", $fill);
            $pdf -> Cell($cell_width[1], 10, $row['player_age'], 1, 0, "C", $fill);
            $pdf -> Cell($cell_width[1], 10, $row['player_height'], 1, 0, "C", $fill);
            $pdf -> Cell($cell_width[1], 10, $row['player_active'] ? "Yes" : "No", 1, 1, "C", $fill);
            $fill = !$fill;
        }
    }
    
    $conn -> close();
    $pdf -> Output();
?>