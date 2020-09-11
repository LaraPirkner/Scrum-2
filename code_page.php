<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/styles/default.min.css">
    <title>Bitbin</title>
</head>
<body>
    <?php
        require 'connect.php';

        if (isset($_GET['id'])) {
            $id = htmlspecialchars($_GET['id']);
        };

        $sql = ("SELECT * FROM code WHERE ID =:id");
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(':id' => $id));
        foreach ($stmt as $row) {
            $code = htmlspecialchars ($row['code']);
        };

        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
        $url = "https://";   
        else  
        $url = "http://";    
        $url.= $_SERVER['HTTP_HOST'];    
        $url.= $_SERVER['REQUEST_URI']; 

        echo "<h1> Dit is jouw code </h1>";
      //  echo "<p>" . $code . "</p>";
    ?>
    
    <pre>
        <code>
            <?php echo $code; ?>
        </code>
    </pre>
    <input type="url" value="<?php echo $url; ?>" id="myInput">

    <div class="copy">
        <button onclick="copyText()" onmouseout="outFunc()">
        <span class="coptied" id="copy_it">Copy to clipboard</span>
        </button>
    </div>

    <a href="index.php">Return to homepage</a>

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script> 
    <script src="script.js"></script>
</body>
</html>