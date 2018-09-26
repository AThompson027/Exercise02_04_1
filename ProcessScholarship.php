<!doctype>


<html>
    
    <head>
       <title>Process Scholarship</title> 
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale-1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    
    <body>
        <h2>Process Scholarship</h2>
        <?php
        // This code will display the echo of the data the has been inserted into the input elements on the HTML file and also strips away the unwanted slashes that cause bugs in the code. 
        $firstName = stripslashes($_POST['fName']);
        $lastName = stripslashes($_POST['lName']);
        echo "Thank you for filling out the scholarship form, " . $firstName . " " . $lastName . ".";
        ?>
    </body>
    
</html>