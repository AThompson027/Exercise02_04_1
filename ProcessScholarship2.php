<!doctype>


<html>
    
    <head>
       <title>Process Scholarship 2</title> 
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale-1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    
    <body>
        <h2>Process Scholarship 2</h2>
        <?php
        //trace how many errors are going to come up when validating
        $errorCount = 0;
        // this function will display the required fields that need to have data
        function displayRequired($fieldName) {
            echo "The field \"$fieldName\" is required!<br>\n";
        }
        
        function validateInput($data, $fieldName) {
            // global variable
            global $errorCount;
            if (empty($data)) {
                displayRequired($fieldName);
                ++$errorCount;
                $retval = "";
            } else {
                // This trims the white spaces from the data inserted into the inputs by the user
                $retval = trim($data);
                // takes the slashes out of the data from the input element if the user inserts slashes in the input field
                $retval = stripslashes($retval);
            }
            return $retval;
        }
        
        function redisplayForm($firstName, $lastName) {
            // This function displays the form again underneath the error messages when the input data is incorrect.
        ?>
        
        
        <h2 style="text-align: center">Scholarship Form 2</h2>
<!--        The php file ProcessScholarship2.php is scripted to this HTML file-->
        <form name="scholarship" action="ProcessScholarship2.php" method="post">
            <p>First name: <input type="text" name="fName" value="<?php echo $firstName;?>"></p>
            <p>Last name: <input type="text" name="lName" value="<?php echo $lastName;?>"></p>
            <p>
                <input type="reset" value="Clear Form">&nbsp;&nbsp;
                <input type="submit" value="Send Form">
            </p>
        </form>
        
        
        <?php
        }
        $firstName = validateInput($_POST['fName'], "First Name");
        $lastName = validateInput($_POST['lName'], "Last Name");
        if ($errorCount > 0) {
            echo "$errorCount error(s): Please re-enter the information below.<br>\n";
            redisplayForm($firstName, $lastName);
        } else {
            echo "Thank you for filling out the scholarship form, " . $firstName . " " . $lastName . ".";
        }
        ?>
    </body>
    
</html>