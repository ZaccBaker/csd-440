<!-- Zac Baker -->
<!-- Table that displays the associated data in the correct column.
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

    function tdValue($value){
        if ($value == "True"){
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
            <h1>Module 7.2 Assignment</h1>
            <hr/>
            
            <h2>Job Application</h2>

            <div class="table-content">
                <table>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Job Title</th>
                        <th>Years of Experience</th>
                        <th>Expected Salary</th>
                        <th>U.S. Citizen</th>
                        <th>State</th>
                        <th>Additional Comments</th>
                    </tr>
                    <tbody>
                        <td><?php echo $firstName ?></td>
                        <td><?php echo $lastName ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $jobTitle ?></td>
                        <td><?php echo $experienceYears ?></td>
                        <td><?php echo $expectedSalary ?></td>
                        <td><?php tdValue($citizen) ?></td>
                        <td><?php echo $state ?></td>
                        <td class="td-comments"><?php echo $comments ?></td>
                    </tbody>
                </table>
            </div>

             <a href="ZacForm.php" class="home-button">Return to Form</a>
        </div>   
        <footer>
            <p>Zac Baker | © 2026</p>
        </footer>
    </body>
</html>