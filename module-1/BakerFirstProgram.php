<!-- Zac Baker -->
<!-- Hello World web application for first program assignment utilizing PHP -->

<html>
    <head>
        <title>CSD-440: Server-Side Scripting</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <h1>Module 1.3 Assignment</h1>
        <div class="quote">
            <blockquote>
                <?php 
                    echo "Hello World!";
                    $author = "Zac Baker"
                ?>
                <footer>
                    - <cite>
                        <?php echo $author ?>
                    </cite>
                </footer>
            </blockquote>
        </div>
    </body>
</html>