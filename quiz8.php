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
            <h3> 8. Ulan nang ulan, hindi pa rin mabasa ang tiyan.</h3>
            <br>
            <label>
                <input type="radio" value="A" name="answer" id="" required>
                A. Dahon ng gabi
            </label>
            <br>

            <label>
                <input type="radio" value="B" name="answer" id="" required>
                B. Talong
            </label>
            <br>

            <label>
                <input type="radio" value="C" name="answer" id="" required>
                C.Kamyas
            </label>
            <br>

            <label>
                <input type="radio" value="D" name="answer" id="" required>
                D. Kalabasa
            </label>
            <br>
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
        
            echo "<meta http-equiv='refresh' content='0;url=quiz9.php'>";

    }


?>



</body>
</html>