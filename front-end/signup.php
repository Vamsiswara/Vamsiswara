<?php
include_once "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_query = "SELECT id FROM user WHERE username = ?";
    $check_stmt = $conn->prepare($check_query);
    $check_stmt->bind_param("s", $username);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        echo "Username already exists. Please choose a different username.";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user
        $insert_query = "INSERT INTO user (username,email, password) VALUES (?, ?, ?)";
        $insert_stmt = $conn->prepare($insert_query);
        $insert_stmt->bind_param("sss", $username, $email ,$hashed_password);

        if ($insert_stmt->execute()) {
            echo "Registration successful. You can now <a href='login.php'>login</a>.";
        } else {
            echo "Registration failed. Please try again later.";
        }
    }

    // Close statements
    $check_stmt->close();
    $insert_stmt->close();
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
body{
    
    
    align-items: center;
    min-height: 100vh;
    background-image: url(src/images/chatbot-banner-resize.jpg);
    background-size: cover;
   
}
.main{
    width: 100%;
    background-position: center;
    background-size: cover;
    height: 99vh;
    
}
.login-page{
    padding-left: 125px;
    padding-top: 50px;

}
.wrapper{
    
    width: 420px;
    border-radius: 10px;
    padding: 30px 40px;
    box-shadow: 0 0 10px rgba(0,0, 0, .2);
    background: linear-gradient(90deg, hsla(197, 100%, 63%, 1) 0%, hsla(294, 100%, 55%, 1) 100%, hsla(356, 53%, 57%, 1) 100%);
    backdrop-filter: blur(20px);
    
   
}
    
.wrapper h1{
    font-size: 36px;
    text-align: center;
}
.wrapper .input-box{
    width: 100%;
    height: 50px;
    
    margin: 30px 0;
}
.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(0,0,0,.8);
    border-radius: 40px;
    font-size: 16px;
    color:#333;
    padding:20px 45px 20px 20px;
}
.input-box input::placeholder{
    color: #333;
}


img{
    width: 100px;
    height: 100px;
}
.navibar{
    width: 100%;
    height: 75px;
    display: flex;
    
}
.pagename
{
    width: 600px;
    float: left;
    height: 70px;
    
    
}
.logo{
    color:rgb(189, 0, 255);
    font-size: 50px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 15px;
   
}
.submit-bnt{
    width: 100%;
    height: 45px;
    background: #ffffff;
    border: none;
    outline: none;
    
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0,0, 0, 0.2);
    cursor: pointer;
    color: black;
    font-weight: 600;
}
.main .login-link{
    font-size: 12px;
    text-align: center;
    margin-top: 4px;
}
.login-link a{
    text-decoration: none;
    color: #111;
}
.login-link a:hover{
    text-decoration: underline;
}
.main .agreement{
    font-size: 12px;
}
</style>
<body>
    <div class="main">
    <div class="navibar">
        <div class="pagename">
            <h2 class="logo">eGovernance chatbot</h2>
        </div>
        
        </div> 
       <hr>
       <div class="login-page">
    <div class="wrapper">
        <form action="" method="POST" name="registrationForm" >
            <center><img src="src/images/undraw_pic_profile_re_7g2h.svg"></center>
            <h1>sign up</h1>
            
            <div class="input-box">
                <input type="text" placeholder="full name "  name="username" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Email id" name="email" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="agreement">
                <input type="checkbox" class="king" required>
                <span>i agree to the terms and conditions</span>
            </div>
            <button type="submit" class="submit-bnt"  name="register">submit</button>
            <div class="login-link">
                <p>already have a account?
                <a href="login.php">login here</a></p>
            </div>
            
        </form>
</div>
</div>
</body> 
</body>
</html>