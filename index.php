<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Conversion</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    
</head>
<body>
    
    <div class="nav" id="home">
        <ul class="nav-list">
            <li><a href="#home">Home</a></li>
            <li><a href="#contact-info">Contact</a></li>
            <li><a href="#aboutus">About Us</a></li>
        </ul>
    </div>
    <h1>Temperature Conversion</h1>
    <div class="maindiv">
<div class="left">
<img src="ab.jpeg" alt="img">
</div>
<div class="right"> <form action="" method="post">
    <input type="text" name="input" class="input" placeholder="Enter your number">

    <div class="selection">
        <label>Celsius</label>
        <input type="radio" name="units" value="Celsius" >
        <label>Fahrenheit </label>
        <input type="radio" name="units" value="Fahrenheit" >
    </div>
<input type="submit" name="submit" value="Check now" class="btn">
</form>
<p>
<?php
    if(isset($_POST['submit'])){
        $num = $_POST['input'];
        $temp = $_POST['units']; 
        
        if($temp == "Celsius"){ 
            $results = $num * 9/5 + 32;
            echo "The Conversion Value of Celsius to Fahrenheit is: " . $results;
        } elseif($temp == "Fahrenheit"){ 
            $results = ($num - 32) * 5/9;
            echo "The Conversion Value of Fahrenheit to Celsius is: " . $results;
        }
    }
?>

</p>
</div>


    </div>
    <div id="aboutus">
    <h2>ABOUT US</h2>
        <h5>
    
        our platform dedicated to converting temperatures between Celsius and Fahrenheit scales.<br>
        With a focus on simplicity and efficiency, our tool provides users with the ability tose<br>
        eamlessly convert temperatures from Celsius to Fahrenheit and vice versa. Whether you'r<br>
         a student, traveler,or weather enthusiast, our website aims to make temperature conve<br>
        rsions a breeze. Our team is committed to delivering accurate and reliable results,ens<br>
        uring that you have a dependable resource for all your temperature conversion needs.<br> 
        Whether youre curious about the weather in a foreign city or need to convert scientific<br>
        data for your studies, our website is here to help with its user-friendly interface and p<br>
        erecise conversion algorithms.Explore our platform and experience the convenience of <br>
        effo rtless temperature conversions at your fingertips.
        </h5>
    </div>

    <div class="footer" >
        <div id="contact-info" >
            <p>Contact us <br>
               Mobile : 9818041863</p>
            <p>Email: kumarneupane123456@gmail.com</p>
        </div>
        <p>&copy; 2024 Temperature Conversion. All Rights Reserved.</p>
    </div>
</body>
</html>