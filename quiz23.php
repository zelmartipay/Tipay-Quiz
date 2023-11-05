<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h2>23. Everyone has me but nobody can lose me.What am I?.</h2>
            <label>
                <input type="radio" value="A" name="answer" id="" required>
                A. Noise    
            </label>
            <br>

            <label>
                <input type="radio" value="B" name="answer" id="" required>
                B.Dark
            </label>
            <br>

            <label>
                <input type="radio" value="C" name="answer" id="" required>
                C. Lightssss
            </label>
            <br>

            <label>
                <input type="radio" value="D" name="answer" id="" required>
                D. Shadow
            </label>
            <br>
            <br>
            <input type="submit" name="submit" value="Next">

        </form>
    </div>
<?php


    if(isset($_POST['submit'])){

                
            $answer = $_POST['answer'];

            if($answer == "D"){
                $_SESSION['score']++;
            }
        
            echo "<meta http-equiv='refresh' content='0;url=quiz24.php'>";

    }


?>



</body>
</html>