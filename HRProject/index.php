<?php
// if($_SERVER["REQUEST_METHOD"] == "POST"){
include 'dbconnect.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){


  $name=$_POST["name"];
  $degree=$_POST["degree"];
  $profile=$_POST["profile"];
  $phone_no=$_POST["phone_no"];
  $email=$_POST["email"];
  $file_name = $_FILES["resume"]["name"];


  $sql = ("INSERT INTO `user` (`name`, `degree`, `profile`, `phone_no`, `email`,`upload_resume`) VALUES ('$name', '$degree', '$profile', '$phone_no', '$email','$file_name')");
  $result = mysqli_query($conn, $sql) or die("Query failed!");

  

  if(isset($_FILES["resume"]) && 
  $_FILES["resume"]["error"] == 0) {
    
  $target_dir = "resumes"."/";
  $target_file = $target_dir 
    . basename($_FILES["resume"]["name"]);
  $uploadOk = 1;

  

  move_uploaded_file($_FILES["resume"]["tmp_name"],  $target_file);
  echo "The file ".  $_FILES["resume"]["name"].  " has been uploaded.";

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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-page">
        <div class="avatar">
          <img src="https://cdn.pixabay.com/photo/2014/04/02/14/10/female-306407_960_720.png" alt="Avatar">
        </div>
        <div class="form">
          <h2>Fill the form</h2>
          <form action="index.php" method="post"  enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="degree" placeholder="Degree/ Diploma">
            <input type="text" name="profile" placeholder="Profile">
            <input type="text" name= "phone_no" placeholder="Phone Number">
            <input type="mail" name= "email" placeholder="Email">

            <label  for="resume">Upload resume</label>

            <input type="file" name="resume" id="resume" />
            <br>
            <input type="submit" value="Submit"></a>
          </form>
        
        </div>
      </div>

      <script>
        
window.pressed = function(){
    var a = document.getElementById('aa');
    if(a.value == "")
    {
        fileLabel.innerHTML = "Upload Resume";
    }
    else
    {
        var theSplit = a.value.split('\\');
        fileLabel.innerHTML = theSplit[theSplit.length-1];
    }
};
      </script>
</body>
</html>