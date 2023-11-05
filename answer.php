<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="answer.css">

</head>
<body>
    <div class="container">
    <?php

    session_start();

    echo "Your score is: ".$_SESSION['score'];
   
    
    ?>
    <br>
    <a href="quiz1.php">Try Again? </a>
    </div>
</body>
</html>