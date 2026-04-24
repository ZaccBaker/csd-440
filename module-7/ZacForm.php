<!-- Zac Baker -->
<!-- Job application template form that prompts the user for information through various data entry types.
-->

<?php 
    $states = [
        'AL' => 'Alabama',
        'AK' => 'Alaska',
        'AZ' => 'Arizona',
        'AR' => 'Arkansas',
        'CA' => 'California',
        'CO' => 'Colorado',
        'CT' => 'Connecticut',
        'DE' => 'Delaware',
        'DC' => 'District Of Columbia',
        'FL' => 'Florida',
        'GA' => 'Georgia',
        'HI' => 'Hawaii',
        'ID' => 'Idaho',
        'IL' => 'Illinois',
        'IN' => 'Indiana',
        'IA' => 'Iowa',
        'KS' => 'Kansas',
        'KY' => 'Kentucky',
        'LA' => 'Louisiana',
        'ME' => 'Maine',
        'MD' => 'Maryland',
        'MA' => 'Massachusetts',
        'MI' => 'Michigan',
        'MN' => 'Minnesota',
        'MS' => 'Mississippi',
        'MO' => 'Missouri',
        'MT' => 'Montana',
        'NE' => 'Nebraska',
        'NV' => 'Nevada',
        'NH' => 'New Hampshire',
        'NJ' => 'New Jersey',
        'NM' => 'New Mexico',
        'NY' => 'New York',
        'NC' => 'North Carolina',
        'ND' => 'North Dakota',
        'OH' => 'Ohio',
        'OK' => 'Oklahoma',
        'OR' => 'Oregon',
        'PA' => 'Pennsylvania',
        'RI' => 'Rhode Island',
        'SC' => 'South Carolina',
        'SD' => 'South Dakota',
        'TN' => 'Tennessee',
        'TX' => 'Texas',
        'UT' => 'Utah',
        'VT' => 'Vermont',
        'VA' => 'Virginia',
        'WA' => 'Washington',
        'WV' => 'West Virginia',
        'WI' => 'Wisconsin',
        'WY' => 'Wyoming',
    ];
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

            <div class="form-content">
                <form action="ZacPost.php" method="POST">
                    <div class="name-group">
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
                        <label for="email">Email</label><br>
                        <input type="email" id="email" name="email" placeholder="johndoe@email.com" required>
                    </div>

                    <div>
                        <label for="jobTitle">Job Title</label><br>
                        <input type="text" id="jobTitle" name="jobTitle" placeholder="Vice President of Sales" required>
                    </div>

                    <div>
                        <label for="experienceYears">Years of Experience</label><br>
                        <input type="number" id="experienceYears" name="experienceYears" placeholder="8" required>
                    </div>

                    <div>
                        <label for="expectedSalary">Expected Salary</label><br>
                        <input type="number" id="expectedSalary" name="expectedSalary" placeholder="85,250" required>
                    </div>

                    <section>
                        <input type="checkbox" id="citizen" name="citizen" required>
                        <label for="citizen">Are you a U.S. Citizen?</label>
                    </section>

                    <section>
                        <label for="state">Which state are you from?</label>
                        <select name="state" id="state" required>
                            <?php foreach($states as $state): ?>
                                <option value="<?php echo $state ?>"><?php echo $state?></option>
                            <?php endforeach; ?>
                        </select>
                    </section>

                    <div>
                        <label for="comments">Additional Comments</label><br>
                        <textarea name="comments" id="comments" maxlength="800"></textarea>
                    </div>

                    <section class="button-group">
                        <input type="submit" value="Submit" class="form-button">
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