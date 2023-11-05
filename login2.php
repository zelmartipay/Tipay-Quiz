<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opening</title>
    <link rel="stylesheet" href="styles2.css">
    <form action="answer.php" method="post"></form>
</head>
<body>
<?php
session_start(); 

if (isset($_POST['submit'])) {
    $Username = $_POST['Username'];
    $Address = $_POST['Address'];
    $size = strlen($Username);

    if ($size>= 4) {
        echo "<h2>Name must be at least 4 characters in length...</h2>";
    } else {
        $_SESSION['name'] = $Username;
        $_SESSION['address'] = $Address;

        header('Location: quiz1.php');
        exit;
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

        
        <input type="submit" name="submit" value="Submit" class="Submit">

        
        

    </form>

</div>


</body>
</html>