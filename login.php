<?php
    require_once 'config/db.php';
    $username = "";
    $pass = "";
    $mess = "";
    if (isset($_POST['usename']))
    {
        $username = $_POST['usename'];
    }

    if (isset($_POST['pass']))
    {
        $pass = $_POST['pass'];
    }

    
    if (isset($_POST['sbLogin']))
    {
        $sql = "select * from admin where username = '$username'and pass = '$pass'";
        $listAdmin = executeResult($sql);

       if ($listAdmin)
       {
        header('location: index.php?page_layout=danhsach');
       }
       else
       {
       $mess = "Tài khoản hoặc mật khẩu sai";
       }
    }
?>



<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
   <link rel="stylesheet" href="./css/style.css">

</head>

<body>
   
   <div class="container-fluid su_wrap">
      <div id="particles-js"></div>
      <div class="content_signup" id="content_signup">
       
        <div class="sign_up-content">
            <h4>SIGN IN</h4>
            <span id="login_error"><?php echo $mess;?></span>
            <form action="" method="post">
              
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="usename" placeholder="name@example.com">
                </div>
              
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" name="pass" placeholder="******">

                </div>
                <p id="term">When click to sign up button, you agree with CodeLearn <a href="">terms and conditons of use</a></p>
                <button type="submit" name="sbLogin" class="btn btn-primary">SIGN IN</button>
            </form>
            <p id="or">Or</p>
            <p id="text">sign in with</p>
            <div class="quick_login">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-github"></i>
                <i class="fab fa-twitter-square"></i>
            </div>
           
        </div>

        <div class="image">
          <img src="./img/it.jpg" alt="">
        </div>
    </div>
   </div>
</body>
<script src="./javascripts/particles/particles.js"></script>
<script src="./javascripts/particles/app.js"></script>
</html>