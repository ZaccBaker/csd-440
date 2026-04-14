<!-- Zac Baker -->
<!-- Program that uses Class to determine if a number is even, odd, or prime.
    Class contains: constructor, getter, setter, isEven, isOdd, and isPrime.
-->

<?php 
    require_once "ZacMyInteger";

    $numbers = [
        1, 5, 123, 24, 17, 12, 75, 9, 165, 20
    ];


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
            <h1>Module 6.2 Assignment</h1>
            <hr/>
            
            <div class="table-content">
                <table>
                    <tr>
                        <th>Number</th>
                        <th>isEven</th>
                        <th>isOdd</th>
                        <th>isPrime</th>
                    </tr>
                    <tbody>
                        <?php foreach ($numbers as $number): 
                            $MyInteger = new MyInteger($number);
                        ?>
                            <tr>
                                <td><?php echo $MyInteger -> getNumber() ?></td>
                                <td><?php tdValue($MyInteger -> isEven() ? "True" : "False") ?></td>
                                <td><?php tdValue($MyInteger -> isOdd() ? "True" : "False") ?></td>
                                <td><?php tdValue($MyInteger -> isPrime() ? "True" : "False") ?></td>
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