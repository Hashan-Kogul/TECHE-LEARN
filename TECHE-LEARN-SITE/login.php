<?php 
require_once ("include/initialize.php");   
if (isset($_SESSION['StudentID'])) {
  # code...
  redirect('index.php');
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>

<style type="text/css">
#abc{
  text-color: red;
  color: white;
}
  #title-header {
  background-image: linear-gradient(135deg, #8d5891 25%, #4d3beb 80%); 
  border-bottom: 1px solid #ddd; 
  height: 150px;  
  padding: 10px 0px;
  text-align: center;
  color: #fff;
  font-size: 18px;
}
.title{
  text-align: center;
  text-transform: uppercase;
  font-size: 18px;
  font-weight: bold;
  color: white;
}
.subtitle{
  text-align: center;
  text-transform: uppercase;
  font-size: 14px;
  font-weight: bold;
  color: white;
  }
.login100-pic{
  width: 100%;
  height: 100%;
  background-image: url("./");
  background-size: cover;
}
.login100-form{
  width: 100%;
  height: 100%;
  background-color: #fff;
  background-size: cover;
  border-radius: 5px;
  border: 1px solid #ddd;
}
.login100-form-title1{
  width: 100%;
  height: 100%;
  background-color: #fff;
  background-size: cover;
  border-radius: 5px;
  border: 1px solid #ddd;

}
.login100-form-title-text{
    width: 100%;
    height: 50%;
    background-color: #fff;
    background-size: cover;
    border-radius: 5px;
    border: 1px solid #ddd;
}
#unilogo{
  background-size: 150px;
  width: 60px;
  height: 60px;
  align-items: left;
}
.container-login101 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  background-image: url("images/welcome.jpg");
}

.wrap-login101 {
  width: 900px;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  padding: 30px 100px 33px 50px;
  margin-top: -100px;
}
.conte{
        position:absolute;
        text-align: center;
        background-color: hsla(0,0%,0%,0.6);
        margin-top:-600px;
        width: 100%;
      }
      .marquee {
    animation: marquee 15s linear infinite;
    animation-delay: 2s;
}

@keyframes marquee {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(-100%);
    }
}

.login100-form {
  width: 290px;
  padding: 10px;
  border-radius: 10px;
  background-color: #e0e0e03f;
  border: 1px solid #e0e0e0;
  border-bottom-color: #e0e0e0;
  border-top-color: #e0e0e0;
}

.login100-form-title {
  font-family: Poppins-Bold;
  font-size: 24px;
  color: #333333;
  line-height: 1.2;
  text-align: center;
  width: 100%;
  display: block;
  padding-bottom: 30px;
}
.p-t-13610 {padding-top: 10px;}
.login100-pic img {
  max-width: 100%;
  margin-top: 30px;
  padding: -80px;
}

</style>
  <title>Student Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

<link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet"> 
<link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet" media="screen">  
 
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>css/main.css">
<!--===============================================================================================-->
</head>
<body>
<section id="title-header">
  <div class="title">  
     <img id="unilogo" src="images/kkk.png">
     <p class="subtitle"> FACULTY OF TECHNOLOGICAL STUDIES <br> DEPARTMENT OF ICT <br> UNIVERSITY OF VAVUNIYA</p> 
  </div>
  <div class="limiter">
    <div class="container-login101">
      <div class="conte">
        <div class="marquee">
      <p style="color: white">Welcome to TECHE-LEARN System</p>
      <p style="color: white">We are happy to help you improve your knowledge and skills through this e-learning platform.</p>
    </div></div>
        <?php check_message(); ?>
      <div class="wrap-login101">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="images/img.jpg" style="width: 100%;object-fit: contain;height: 100%" alt="IMG"><br>
        </div>
        <form class="login100-form validate-form" action="" method="POST"> 
          <span class="login100-form-title">
            Student Login 
          </span>
          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="user_email" placeholder="Username">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="user_pass" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" name="btnLogin">
              Login
            </button>
          </div>

          <div class="text-center p-t-12">
            <span class="txt1">
              Forgot
            </span>
            <a class="txt2" href="#">
              Username / Password?
            </a>
          </div> 
          <div class="text-center p-t-13610">
            <a class="txt2" href="register.php">
              Create your Account
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>

<!---------------------------------------------------------------------------- -->



<?php 

if(isset($_POST['btnLogin'])){
  $email = trim($_POST['user_email']);
  $upass  = trim($_POST['user_pass']);
  $h_upass = sha1($upass);
  
   if ($email == '' OR $upass == '') {

      message("Invalid Username and Password!", "error");
      redirect (web_root."login.php");
         
    } else {  
      //it creates a new objects of member
        $student = new Student();
        //make use of the static function, and we passed to parameters
        $res = $student::studentAuthentication($email, $h_upass);
        if ($res==true) {  
             redirect(web_root."index.php"); 

          echo $_SESSION['StudentID'];
        }else{
          message("Account does not exist! Please contact Administrator.", "error");
          redirect (web_root."login.php");
        }
   }
 } 
 ?> 

<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/jquery.js"></script>
<script src="<?php echo web_root; ?>js/bootstrap.min.js"></script> 
<!--===============================================================================================-->
  <script src="<?php echo web_root; ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root; ?>vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>