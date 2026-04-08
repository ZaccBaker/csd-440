<!-- Zac Baker -->
<!-- A dynamic table created using a foreach loop to show phrases. 
    An external method used to check if phrase is a Palindrome or not.
-->

<?php 
    require_once "Palindrome.php";

    $phrases = [
        "racecar", "never odd or even", "was it a rat i saw",
        "computer", "building api routes", "optimize query speed"
    ]
?>

<html>
    <head>
        <title>CSD-440: Server-Side Scripting</title>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald&display=swap">
    </head>

    <body>
        <div class="content">
            <h1>Module 4.2 Assignment</h1>
            <hr/>

            <div class="table-content">
                <table>
                    <tr>
                        <th>Phrase</th>
                        <th>Phrase Reversed</th>
                        <th>Palindrome Check</th>
                        <th>Compressed</th>
                        <th>Compressed Reveresed</th>
                    </tr>
                    <tbody>
                        <?php foreach ($phrases as $phrase): ?>
                            <tr>
                                <td><?php echo ucwords($phrase) ?></td>
                                <td><?php echo ucwords(strrev($phrase)) ?></td>
                                
                                <?php 
                                    $value = phrase_check($phrase);

                                    if ($value == "Yes") {
                                        $class = "td-true";
                                    } else {
                                        $class = "td-false";
                                    }
                                    
                                    echo "<td><div class='$class'>$value</div></td>";
                                ?>

                                <td><?php echo strtolower(preg_replace("/\s+/", "", $phrase)) ?></td>
                                <td><?php echo strrev(strtolower(preg_replace("/\s+/", "", $phrase))) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>    

        <footer>
            <p>Zac Baker | © 2026</p>
        </footer>
    </body>
</html>