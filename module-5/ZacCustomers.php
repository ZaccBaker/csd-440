<!-- Zac Baker -->
<!-- Tables showing customers and sorted customers: First name, Last name, Age, Phone number
    Two tables using methods to sort arrays and find values.
-->

<?php 
    require_once "Customers.php";
    require_once "CustomerSort.php";

    $allCustomers = customers_data();
    $customerOver30 = sortCustomersOver30($allCustomers);
    $customersByName = sortCustomersByFirstName($allCustomers, "Ian");
?>

<html>
    <head>
        <title>CSD-440: Server-Side Scripting</title>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald&display=swap">
    </head>

    <body>
        <div class="content">
            <h1>Module 5.2 Assignment</h1>
            <hr/>

            <div class="tables-section">
                <div>
                    <h2>All Customers</h2>
                    <div class="table-content all-customers">
                        <table>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Age</th>
                                <th>Phone Number</th>
                            </tr>

                            <tbody>
                                <?php foreach ($allCustomers as $customer): ?>
                                    <tr>
                                        <td><?php echo $customer["First Name"] ?></td>
                                        <td><?php echo $customer["Last Name"] ?></td>
                                        <td><?php echo $customer["Age"] ?></td>
                                        <td><?php echo $customer["Phone Number"] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div>
                    <h2>Customers Over 30</h2>
                    <div class="table-content all-customers">
                        <table>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Age</th>
                                <th>Phone Number</th>
                            </tr>

                            <tbody>
                                <?php foreach ($customerOver30 as $customer): ?>
                                    <tr>
                                        <td><?php echo $customer["First Name"] ?></td>
                                        <td><?php echo $customer["Last Name"] ?></td>
                                        <td><?php echo $customer["Age"] ?></td>
                                        <td><?php echo $customer["Phone Number"] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div>
                    <h2>Customers Named Ian</h2>
                    <div class="table-content all-customers">
                        <table>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Age</th>
                                <th>Phone Number</th>
                            </tr>

                            <tbody>
                                <?php foreach ($customersByName as $customer): ?>
                                    <tr>
                                        <td><?php echo $customer["First Name"] ?></td>
                                        <td><?php echo $customer["Last Name"] ?></td>
                                        <td><?php echo $customer["Age"] ?></td>
                                        <td><?php echo $customer["Phone Number"] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </div>   
        <footer>
            <p>Zac Baker | © 2026</p>
        </footer>
    </body>
</html>