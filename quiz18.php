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
            <h1>Quiz</h1>
            <br>
            <h3> 18. Takbo roon, takbo rito, hindi makaalis sa tayong ito.</h3>
            <br>
            <label>
                <input type="radio" value="A" name="answer" id="" required>
                A. Gulok/Itak
            </label>
            <br>

            <label>
                <input type="radio" value="B" name="answer" id="" required>
                B. Silyang tumba-tumba
            </label>
            <br>

            <label>
                <input type="radio" value="C" name="answer" id="" required>
                C. Duyan
            </label>
            <br>

            <label>
                <input type="radio" value="D" name="answer" id="" required>
                D. Bayong
            </label>
            <br>
            <br>
            <input type="submit" name="submit" value="Next">

        </form>
    </div>
<?php


    if(isset($_POST['submit'])){

                
            $answer = $_POST['answer'];

            if($answer == "C"){
                $_SESSION['score']++;
            }
        
            echo "<meta http-equiv='refresh' content='0;url=quiz19.php'>";

    }


?>



</body>
</html>