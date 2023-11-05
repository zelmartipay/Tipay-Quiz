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
            <h3> 15. Hindi ako sikat na pilosopo, tulad ng henyong kapangalan ko, pero mahal din ako ng tao, dahil kinakainan ako.</h3>
            <br>
            <label>
                <input type="radio" value="A" name="answer" id="" required>
                A. Sandok
            </label>
            <br>

            <label>
                <input type="radio" value="B" name="answer" id="" required>
                B. Salamin
            </label>
            <br>

            <label>
                <input type="radio" value="C" name="answer" id="" required>
                C.Salamin
            </label>
            <br>

            <label>
                <input type="radio" value="D" name="answer" id="" required>
                D. Banig
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
        
            echo "<meta http-equiv='refresh' content='0;url=quiz16.php'>";

    }


?>



</body>
</html>