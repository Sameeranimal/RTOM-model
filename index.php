<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="index.css">
    
    
    
</head>
<body>




<div class="Home">
    
    <img src="morphens.png" width="500px" alt="">
    
    <a href="https://www.linkedin.com/company/morphe/posts/?feedView=all" class="fa fa-linkedin"></a>
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-youtube"></a>

    
    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>

         
        <div class="rtom"><a href="RTOM.php">RTOM-Model</a></div>

        <div class="ns"><img src="ns.png" width="300px" alt=""></div>

        <div class="logout">
        <ul><a href="logout.php">Logout</a></li></ul>
    </div>
        
        
       
        
        
        
    <?php else: ?>
        <div class="choice"><p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p></div>
        
    <?php endif; ?>
    </div>


</body>
</html>
    
    
    
    
    
    
    
    
    
    
    