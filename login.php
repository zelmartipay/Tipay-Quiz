<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>

    <?php
            session_start();

            if(isset($_POST['submit'])){

                $p1 = $_POST['Password'];
                $p2 = $_POST['Confirm pasword'];
                $size = strlen($p1);

                if($p1 != $p2){
                    echo "<h2>Password not match</h2>";

                }else if($size < 4){
                    echo "<h2>Password must be atleast 4 characters in length</h2>";

                }else{
                    echo "<meta http-equiv='refresh' content='0;url=quiz1.php'>";

                
                }
                
            }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice8</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
<div class="container">
    <form action="" method="post">
        <h1>Registration Form</h1>
        <div class="input-box">
            <input type="text" placeholder= "Username"required>
           

        <div class="input-box">
            <input type="text" placeholder= "Address"required>
            
        </div>

        <div class="input-box">
            <input type="text" placeholder= "Contact number"required>
            
        </div>

        <div class="input-box">
            <input type="password" placeholder= "Password"required>
            
        </div>

        <div class="input-box">
            <input type="password" placeholder= "Confirm pasword"required>
            
        </div>
       
        <div class="remember-forgot">
            <label><input type="checkbox"> Remember me </label>
            <a href="#"> Forgot Password?</a>
        </div>

        <button type="submit" class="btn">Login</button>

        <div class="register-link">
            <p>Don't have an account? <a href="#"> register </a></p>
        </div>
        

    </form>

</div>


</body>
</html>