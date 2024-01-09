
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
   
</head>
<style>
    
    *{
        margin: 0;
        padding: 0;
    }
    body{
        display: flex;
        /*justify-content: center;
        align-items: center;*/
        background-image: url(src/images/chatbot-banner-resize.jpg);
        background-size: cover;
    }
    .main{
            width: 100%;
            background-position: center;
            background-size: cover;
            height: 99vh;
    }
    
.navibar{
    width: 100%;
    height: 75px;
    margin: auto;
    display: flex;
}
.pagename
{
    width: 600px;
    float: left;
    height: 70px;
    padding-right: 300px;
}
.logo{
    color:rgb(189, 0, 255);
    font-size: 30px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 15px;
   
}


.startbutton{


  width: 600px;
  
 
}
.buttonradius{
     padding-left: 200px;
     padding-top: 25px; 
}
.butt{
    width: 50%;
    height: 30px;
    border: none;
    outline: none;
    border-radius: 10px;
    font-weight: 600;
    background: linear-gradient(90deg, hsla(197, 100%, 63%, 1) 0%, hsla(294, 100%, 55%, 1) 100%, hsla(356, 53%, 57%, 1) 100%);
}

.cname{
    width: 600px;
    height: 75px;
    padding-top: 150px;
    padding-left: 50px;
    font-size: 50px;
    font-family: Arial, Helvetica, sans-serif;
    color: aliceblue;
   
}
p{
    padding-left: 50px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
    color: rgb(108, 91, 206);
}
.main_page_button{
    padding-left: 50px;
}
.button2{
    width: 20%;
    height: 40px;
    border: none;
    outline: none;
    border-radius: 10px;
    font-weight: 600;
    background: linear-gradient(90deg, hsla(197, 100%, 63%, 1) 0%, hsla(294, 100%, 55%, 1) 100%, hsla(356, 53%, 57%, 1) 100%);
}
</style>
<body>
    
    <div class="main">
        
   <div class="navibar">
    <div class="pagename">
        <h2 class="logo">eGovernance chatbot</h2>
    </div>
    
    <div class="startbutton">
            <div class="buttonradius">
       <a href="login.php"> <button type="submit" class="butt" href="login.php" >get started</button></a></div>
    </div>
   </div> 
   <hr>

    <h1 class="cname">eGovernance Revolution:<br> A Digital Future for Governance</h1>
    <br><br><br><br><br><br><br><br><br>

    <p>"Experience seamless governance with our eGovernance Chatbot <br>
         your virtual assistant for efficient public services. Simplify interactions, <br>
         access information, and streamline citizen engagement effortlessly.<br> 
         Empowering communities through smart, accessible, and responsive <br>online governance solutions."</p>
         <br>
         <div class="main_page_button"><a href="login.php"><button type="submit" class="button2">Get started</button></a>
  </div> 
   </div>


</body>
</html>