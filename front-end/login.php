
<?php
session_start();
include_once "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            
            

            // Store user information in the session (you can add more user details if needed)
            $_SESSION['email'] = $email;
            $_SESSION['type'] = $row['type']; // Assuming the user type is stored in the 'type' column
            
            header("Location: index.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }

    // Close statement
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
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
.wrapper .forgot-conditions{
    display: flex;
    justify-content: space-between;
    font-size: 10px;
    margin: -15px 0 15px;
}
.forgot-conditions label input{
    accent-color: #fff;
    margin-right: 3px;
    
}
.forgot-conditions a{
    color: #333;
    text-decoration: none;
}
.forgot-conditions a:hover{
    text-decoration: underline;
}
.wrapper .login-link{
    width: 100%;
    height: 45px;
    background:#fff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0,0,0, .1);
    cursor: pointer;
    color: #333;
    font-weight: 600;
}
.wrapper .registration-link{
    
    font-size: 14.5px;
    text-align: center;
    margin-top: 20px;
}
.registration-link a{
    text-decoration: none;
    color: #333;
}
.registration-link a:hover{
    text-decoration: underline;
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
        <form action="login.php" method="POST">
            <center><img src="src/images/undraw_pic_profile_re_7g2h.svg"></center>
            <h1>Login</h1>
            
            <div class="input-box">
                <input type="text" placeholder="Email " name="email" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="forgot-conditions">
                
                <lable>
                    
                    <a href="#">Forgot password?</a>
                </lable>
               
            </div>
            <button type="submit" class="login-link" name="login" >login</button>
           
           
            <div class="registration-link">
              <p> Don't have an account? 
              
                <a href="signup.php">sign up now</a>
              </p>
            </div>
            
        </form>
</div>
</div>
</body> 
</body>
</html>