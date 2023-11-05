<?php
session_start();

$_SESSION['score'] = 0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h1>Quiz</h1>
            <br>
            <h3>1. Kay lapit-lapit na sa mata, di mo pa rin makita</h3>
            <br>
            <label>
                <input type="radio" value="A" name="answer" id="" required>
                A. Tenga
            </label>
            <br>

            <label>
                <input type="radio" value="B" name="answer" id="" required>
                B. Ilong
            </label>
            <br>
            <label>
                <input type="radio" value="C" name="answer" id="" required>
                C. Mangga
            </label>
            <br>

            <label>
                <input type="radio" value="D" name="answer" id="" required>
                D. Langka
            </label>
            <br>
            
            <input type="submit" name="submit" value="Next">

        </form>
    </div>
<?php


    if(isset($_POST['submit'])){

                
            $answer = $_POST['answer'];

            if($answer == "A"){
                $_SESSION['score']++;
            }
        
            echo "<meta http-equiv='refresh' content='0;url=quiz2.php'>";

    }


?>



</body>
</html>