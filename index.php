<?php
$insert = false;
if(isset($_POST['name'])){
$server = "localhost";
$uname = "root";
$pwd = "";

$conn = mysqli_connect($server, $uname, $pwd);
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$sql = "INSERT INTO `travelform`.`travelform` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', 
current_timestamp( )  );";
//echo $sql;
if($conn->query($sql) == true){
    $insert = true;
}
else{
    echo "Wrong: $sql  <br> $con->error  ";
}
$conn->close();

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <link rel="stylesheet" href="style.css">
</head>
<body>
       <div class="container">
       	<h3>Welcome to our website</h3>
       	<p> Once you fill the form and submit, we'll get back to you within 24 hours</p>
       <?php 
        if($insert)
        echo "Thank you for submitting the form guys!!!!"
       ?>
       <form method="POST" action="index.php">
              <input type="text" name="name" id="name" placeholder="Enter your name">
              <input type="text" name="age" id="age" placeholder="Enter your age">
              <input type="text" name="gender" id="gender" placeholder="Enter your gender">
              <input type="text" name="email" id="email" placeholder="Enter your email">
              <input type="text" name="phone" id="phone" placeholder="Enter your phone">
              <textarea   name="desc" id="desc" placeholder="Enter your textarea"></textarea>
              <button type="submit" name="submit" class="btn">Submit</button>
              <button type="submit" name="submit" class="btn">Reset</button>
       </form>
</div>
<script type="text/javascript" src="travel.js" ></script>
</body>
</html>