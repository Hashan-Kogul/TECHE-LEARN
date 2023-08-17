<!-- <h1><?php echo $title;?></h1> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

  .mimg{
      width: 150px;
      height: 150px;
      border-radius: 8px;
  }
  .image-container .left {
  float: left;
  width: 50%;
}
.image-container{
  text-align: center;
}
.image-container .right{
  float: right;
  width: 50%;
}

.pp {
	font-family: Poppins-Regular;
	font-size: 14px;
	line-height: 1.4;
	color: #666666;
	margin: 0px;
  
}

/* Form styles */
form {
  max-width: 500px;
  margin: auto;
  padding: 20px;
  background-color: #f7f7f7;
  border: 1px solid #ddd;
  border-radius: 5px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 3px;
  resize: none;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

/* Email/Phone styles */
.po {
  max-width: 500px;
  margin: auto;
  padding: 20px;
  background-color: #f7f7f7;
  border: 1px solid #ddd;
  border-radius: 5px;
  text-align: center;
  font-size: 18px;
}

a {
  color: #333;
  text-decoration: none;
}

a:hover {
  color: #000;
  text-decoration: underline;
}

h4, h5{
  font-size: 170%;
}

   
    </style>
    <title>About Us</title>
</head>
<body>

<div class="col-lg-12">  
<h4>Contact Us</h4>
<p>If you have any questions, comments or feedback, please feel free to contact us by email or phone:</p>
</div>
<div  class="col-lg-6">
 
<form action="your_email_address_here" method="post">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required><br><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required><br><br>
  <label for="message">Message:</label>
  <textarea id="message" name="message" required></textarea><br><br>
  <input type="submit" value="Submit">
</form>
 
</div>
<div  class="col-lg-6">

<h5>Our Team</h5> 

  <div class="image-container">
    <div class="left">
<img src="images/LahiruDp.jpg" alt="lahiru" class="mimg">
        <h2>Lahiru Sujith</h2>
        <p class="pp">2018ICTS72</p>
        <p class="pp">University of Vavuniya.</p>
        <p class="pp">lahirusujith9999@gmail.com</p>
</div>
<div class="right">
<img src="images/HasDp.jpg" alt="hashan" class="mimg">
        <h2>Hashan Kogul</h2>
        <p class="pp">2018ICTS85</p>
        <p class="pp"> University of Vavuniya.</p>
        <p class="pp">hashankogul0326@gmail.com</p>
</div>
</div>

</body>
</html>
