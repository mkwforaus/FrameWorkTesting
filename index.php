<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Framework testing</title>
    </head>
    <body>
        <?php
            function writeMsg($yourMsg) {
                echo "<p>" . $yourMsg . "</p>";
                return $yourMsg;
                }
            
            writeMsg("Hello");    
        ?>
    <body>
</html>

