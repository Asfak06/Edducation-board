<?php
include"inc/function.php";
session_start();
if(isset($_SESSION['name'])AND isset($_SESSION['phone'])){
  header("location:profile.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Education Board Result</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PHP</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
      
    if(isset($_POST['sub'])){

       $uname=$_POST['uname'];
       $pass=$_POST['pass'];
       $data=$info->query("SELECT * FROM user WHERE user='$uname' AND pass='$pass' ");
        $row=$data->num_rows;
        while($mm=$data->fetch_assoc()){

        $_SESSION['name']=$mm['name'];
        $_SESSION['phone']=$mm['phone'];
        $_SESSION['img']=$mm['img'];
      }
              if($row==1){
                  header("location:profile.php");
              }else{
                  echo "<h1 style='text-align:center; color:red;' >Register first</h1>";
              }


    }



?>








<div class="container bg-dark">
         <br>
         <br>
         <br>
         <div class="login  m-auto" style="color:lightpink; margin-top: 20px !important; text-align: center;">
            <h2 style="text-align: center; color: pink;">log in</h2>
                <form action="" method="POST" style="background-color:lightblue;width:500px;text-align: center;  margin: auto;">
                   <div class="form-group" >
                     <label for=""  style="color:lightblue;">USER NAME</label>
                     <input type="text" class="form-control " name="uname" style="color:lightblue; width: 400px; margin:auto;">
                   </div>
                   <div class="form-group" >
                     <label for="" style="color:lightblue;">PASSWORD</label>
                     <input type="password" class="form-control " name="pass" style="color:lightblue; width: 400px; margin:auto;">
                   </div>

                   <div class="form-group">
                     <input type="submit" class="btn btn-block bg-primary w-25 m-auto" name="sub" value="login">
                   </div>
                </form>
                   <hr style="border:1px solid deeppink;width: 500px;">
                   <a href="reg.php" style= " text-align:center; font-weight: bold;">Registration</a><br>
                   <a href="result/index.php" style= " text-align:center; font-weight: bold;">Result page</a>
         <br>
         </div>
        
         <br>
         <br>

</div>

  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>