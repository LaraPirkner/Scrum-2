<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Bitbin</title>
</head>
<body>

    <?php 
        require 'connect.php';

        echo "<h1>Your code here</h1>";
        echo "<form method='post' action='./upload_code.php'>";
        echo "<p><textarea type='text' name='code' 
        rows='15' cols='40' id='codeBlock'></textarea></p>";
        echo "<input type='submit' value='Paste it'>";
        echo "</form>"; 
    

        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $url = "https://";
        else
        $url = "http://";
        // Append the host(domain name, ip) to the URL.   
        $url.= $_SERVER['HTTP_HOST'];
        // Append the requested resource location to the URL   
        $url.= $_SERVER['REQUEST_URI'];
    ?>
    
</body>
</html>