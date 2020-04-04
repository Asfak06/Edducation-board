<?php
include"inc/function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Registration</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container" style="background-color: gray;">
          <?php
                         
                         if(isset($_POST['sub'])){
                          $name=$_POST['name'];
                          $uname=$_POST['uname'];
                          $pass=$_POST['pass'];
                          $phone=$_POST['phone'];
                          $img=$_FILES['img']['name'];
                          $timg=$_FILES ['img']['tmp_name'];
                              $imgname=explode('.',$img);
                              $eximg=end($imgname);
                              $uimg=md5(time().$img).'.'.$eximg;

                              if(empty($name)||empty($uname)||empty($pass)||empty($phone)||empty($img)){
                              	echo" <h1>field must not be empty </h1>";
                              }
                              elseif(in_array($eximg,['jpg','jpeg','png','gif'])==false){
                              	echo"<h1>invalid image format</h1>";
                              }else{
                              	$info->query("INSERT INTO user (name,user,pass,phone,img) VALUES('$name','$uname','$pass','$phone','$uimg')");
                              	move_uploaded_file($timg,'images/'.$uimg);

                              }
                         }

              ?>

       
         <br>
          
         <h1 style="text-align: center; color:lightpink">Ragistration</h1>
         <hr style="height: 2px;background-color: black; width: 450px;">
         <form action="" method="POST" enctype="multipart/form-data" style="margin:auto;text-align: center; width:450px;background-color:lightblue; color:deeppink; font-weight: bold;">
                    <br>
                       <div class="form-group">
                       <label for=""> Name</label>
                       <input type="text" name="name"class="form-control w-75"style="margin:auto" >
                       </div>
                         <div class="form-group">
                       <label for="">User Name</label>
                       <input type="text" name="uname" class="form-control w-75" style="margin:auto">
                       </div>
                        <div class="form-group">
                       <label for="">Password</label>
                       <input type="text" name="pass" class="form-control w-75" style="margin:auto">
                       </div>
                       <div class="form-group">
                       <label for="">Phone number</label>
                       <input type="text" name="phone" class="form-control w-75" style="margin:auto">
                       </div>
                       
                         <div class="form-group">
                       <label for=""> User Image</label>
                       <input type="file" name="img"class="form-control w-75 " style="margin:auto;height:60px; " >
                       </div>
                         
                       
                        
                       <div class="form-group">
                           <input type="submit" name="sub"class="btn btn-info form-control w-50" value="submit" style="margin:auto">
                       </div>
                      <br>                   
                      <div class="btn btn-info" ><a href="index.php"style="color: white;"> login</a></div>                
                      <br>
                      <br>
              
             </form>
         <br>
         <br>
         <br>

</div>

  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>