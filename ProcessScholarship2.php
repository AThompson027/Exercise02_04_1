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
        
        $firstName = validateInput($_POST['fName'], "First Name");
        $lastName = validateInput($_POST['lName'], "Last Name");
        if ($errorCount > 0) {
            echo "$errorCount error(s): Please use the \"Back\" button to re-enter the data.<br>\n";
        } else {
            echo "Thank you for filling out the scholarship form, " . $firstName . " " . $lastName . ".";
        }
        ?>
    </body>
    
</html>