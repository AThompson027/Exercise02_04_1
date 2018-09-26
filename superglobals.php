<!doctype>


<html>
    
    <head>
       <title>Super Globals</title> 
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale-1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    
    <body>
        <h2>Super Globals</h2>
        <?php
        // This code shows us how superglobals work and what information they pull into the variable from the superglobal array.
        echo "<h3>Superglobal Array \$_SERVER[]</h3>";
        echo "<p>The name of the current script is: ", $_SERVER["SCRIPT_NAME"], "<br></p>";
        echo "<p>This script was executed with the following server software: ", $_SERVER["SERVER_SOFTWARE"], "<br></p>";
        echo "<p>This script was requested by the following server protocol: ", $_SERVER["SERVER_PROTOCOL"], "<br></p>";
        echo "<p>This script is running on the following server: ", $_SERVER["SERVER_NAME"], "<br></p>";
        echo "<p>This script is running on the following server address: ", $_SERVER["SERVER_ADDR"], "<br></p>";
        echo "<p>This script is running with the following gateway interface: ", $_SERVER["GATEWAY_INTERFACE"], "<br></p>";
        echo "<p>This script is running with the following request method: ", $_SERVER["REQUEST_METHOD"], "<br></p>";
    
        ?>
    </body>
    
</html>