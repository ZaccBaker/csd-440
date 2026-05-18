<!-- Zac Baker -->
<!-- JSON page that shows data via json_encode.
-->

<?php 
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $jobTitle = $_POST["jobTitle"];
    $experienceYears = $_POST["experienceYears"];
    $expectedSalary = $_POST["expectedSalary"];
    $state = $_POST["state"];
    $comments = $_POST["comments"];

    if (!empty($_POST["citizen"])) {
        $citizen = "True";
    } else {
        $citizen = "False";
    }

    $data = array(
        "First Name" => $firstName,
        "Last Name" => $lastName,
        "Email" => $email,
        "Job Title" => $jobTitle,
        "Years of Experience" => $experienceYears,
        "Expected Salary" => $expectedSalary,
        "U.S. Citizen" => $citizen,
        "State" => $state,
        "Comments" => $comments
    );

    $json = json_encode($data);
?>

<html>
    <head>
        <title>CSD-440: Server-Side Scripting</title> 

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald&display=swap">
    </head>

    <body>
        <div class="content">
            <h1>Module 10.2 Assignment</h1>
            <hr/>

            <h2>Applicant Information</h2>

            <div class="json-display">
                <pre id="json-output"></pre>
            </div>

            <div>
                <a href="ZacForm.php" class="nav-button">Home</a>
            </div>
        </div>   
        <footer>
            <p>Zac Baker | © 2026</p>
        </footer>
    </body>

    <script>
        const pretty_json = JSON.stringify(<?php echo $json; ?>, null, 2);
        document.getElementById("json-output").innerText = pretty_json;
    </script>
</html>