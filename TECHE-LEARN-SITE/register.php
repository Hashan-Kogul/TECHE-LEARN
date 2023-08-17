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
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Register</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet"> 
<link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet" media="screen">  
  <style type="text/css">
    #title-header {
    background-image: linear-gradient(135deg, #8d5891 25%, #4d3beb 80%);
    border-bottom: 1px solid #ddd; 
    height: 150px;  
    padding: 10px 0px;
    text-align: center;
    color: #fff;
    font-size: 18px;
  }
  #unilogo{
    background-size: 150px;
    width: 60px;
    height: 60px;
    align-items: left;
  }
  </style>
<section id="title-header">
  <div class="title">  
  <img id="unilogo" src="images/kkk.png">
     <p class="subtitle"> FACULTY OF TECHNOLOGICAL STUDIES <br> DEPARTMENT OF ICT <br> UNIVERSITY OF VAVUNIYA</p> 
  </div>
</section> 
 <div class="container" style="min-height: 500px;">  
      <p class="page-header" style="font-size: 30px;">Sign Up</p>
      <?php check_message(); ?>
    <div id="login-dp">
 <form class="form-horizontal span6" action="" method="POST" enctype="multipart/form-data" id="login-nav">
 

                <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "FNAME">First Name:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
                            "First Name" type="text" value="" required>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "LNAME">Last Name:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                            "Last Name" type="text" value=""  required>
                      </div>
                    </div>
                  </div>
  
                  <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "ADDRESS">Address:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="ADDRESS" name="ADDRESS" placeholder=
                            "Address" type="text" value=""  required>
                      </div>
                    </div>
                  </div> 
                 
                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "PHONE">Contact No.:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="PHONE" name="PHONE" placeholder=
                            "Contact Number" type="text" value="" pattern="^\d{10}$" required>
                      </div>
                    </div>
                  </div> 
                  
                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "USERNAME">Username:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="USERNAME" name="USERNAME" placeholder=
                            "Username" type="text" value="">
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "PASS">Password:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="PASS" name="PASS" placeholder=
                            "Password" type="password" value="" required minlength="8">
                      </div>
                    </div>
                  </div>
  
                 <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <button type="submit" name="btnRegister" class="btn btn-primary btn-sm">Register</button>
                           
                     </div>
                    </div>
                  </div> 
        
 
          
        </form>
       </div>
</div>


<?php 
if (isset($_POST['btnRegister'])) {
    # code...  

    $student = New Student(); 
    $student->Fname         = $_POST['FNAME']; 
    $student->Lname         = $_POST['LNAME'];
    $student->Address       = $_POST['ADDRESS']; 
    $student->MobileNo         = $_POST['PHONE'];  
    $student->STUDUSERNAME      = $_POST['USERNAME'];
    $student->STUDPASS      = sha1($_POST['PASS']); 
    $student->create();  

    message("Your now succefully registered. You can login now!","success");
    redirect("login.php");
}

?>
   <footer style="height: 90px;border-top:1px solid #ddd;padding: 5px;background-image: linear-gradient(135deg, #8d5891 25%, #4d3beb 80%); color:#fff;">
              <p align="center">&copy; <b>TECHE-LEARN GROUP-24 <br> Developed By <br> Y.Hashan Kogul <br> L.W.L.S MADUSANKA </p>
     </footer>
 </section>
 