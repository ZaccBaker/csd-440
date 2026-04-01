<!-- Zac Baker -->
<!-- A dynamic table created via a nested PHP loop structure with random numbers.
    External function used to find the sum of two random numbers (set as parameters).
-->

<?php 
    require_once "CellMath.php";

    $min = 1;
    $max = 100;
    $max_pairs = 10;
?>

<html>
    <head>
        <title>CSD-440: Server-Side Scripting</title>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald&display=swap">
    </head>

    <body>
        <div class="content">
            <h1>Module 3.2 Assignment</h1>
            <hr/>

            <div class="table-content">
                <table>
                    <tr>
                        <th>Column 1</th>
                        <th>Column 2</th>
                    </tr>
                    <tbody>
                        <?php for ($i = 0; $i < $max_pairs; $i++): ?>
                            <tr>
                                <?php for ($x = 0; $x < 2; $x++):  ?>
                                    <td><?php echo cell_value(random_int($min, $max), random_int($min, $max)); ?></td>
                                <?php endfor; ?>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>    

        <footer>
            <p>Zac Baker | ©2026</p>
        </footer>
    </body>
</html>