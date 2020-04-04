<?php
include "inc/function.php";
session_start();
if(empty($_SESSION['name']) || empty($_SESSION['phone'])){
  header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>profile</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
 <div class="top-bar">
 	<div class="container">
 		<ul>
 			<li><a href="inc/Log out.php">log OUT</a></li>
      <li><a href="result/index.php">Result</a></li>
 		    <li><?php echo$_SESSION['name'] ?></li>
 		    <li><?php echo$_SESSION['phone'] ?></li>
 		    <li><img src="images/<?php echo $_SESSION['img'] ; ?>" alt=""></li>
 		</ul>
 	</div>
</div>  
<?php
      if(isset($_POST['bub'])){
        $name=$_POST['name'];
        $fname=$_POST['fname'];
        $roll=$_POST['roll'];
        $img=$_FILES['img']['name'];
        $timg=$_FILES['img']['tmp_name'];
        $board=$_POST['board'];
        $year=$_POST['year'];
        $imgname=explode('.',$img);
        $eximg=end($imgname);
        $uimg=md5(time().$img).'.'.$eximg;

        $bang_o=$_POST['ban'];
        $bang_g=student_grade($bang_o);
        $bang_gp=student_grade_point($bang_o);
        $eng_o=$_POST['e'];
        $eng_g=student_grade($eng_o);
        $eng_gp=student_grade_point($eng_o);
        $math_o=$_POST['m'];
        $math_g=student_grade($math_o);
        $math_gp=student_grade_point($math_o);
        $s_o=$_POST['s'];
        $s_g=student_grade($s_o);
        $s_gp=student_grade_point($s_o);
        $ss_o=$_POST['ss'];
        $ss_g=student_grade($bang_o);
        $ss_gp=student_grade_point($bang_o);
        $rs_o=$_POST['rs'];
        $rs_g=student_grade($rs_o);
        $rs_gp=student_grade_point($rs_o);

        $mark=cgpa_student($bang_gp,$eng_gp,$math_gp,$s_gp,$ss_gp,$rs_gp);

        if(empty($name)||empty($fname)||empty($roll)||empty($board)||empty($img)||empty($bang_o)||empty($eng_o)||empty($math_o)||empty($s_o)||empty($ss_o)||empty($rs_o)){
                                echo" <h1>field must not be empty </h1>";
                              }
                              elseif(in_array($eximg,['jpeg','png','jpg','gif'])==false){
                                echo"<h1>invalid image format</h1>";
                              }else{
                                $info->query("INSERT INTO student (name,fname,img,roll,board,year,bang_o,bang_g,bang_gp,eng_o,eng_g, eng_gp,math_o,math_g,math_gp, ss_o,ss_g,ss_gp,s_o,s_g,s_gp ,r_o, r_g, r_gp,CGPA) VALUES('$name','$fname','$uimg','$roll','$board',
                                  '$year','$bang_o','$bang_g','$bang_gp','$eng_o','$eng_g','$eng_gp','$math_o','$math_g','$math_gp','$ss_o','$ss_g','$ss_gp','$s_o','$s_g','$s_gp','$rs_o','$rs_g','$rs_gp','$mark')");
                                move_uploaded_file($timg,'studentimages/'.$uimg);
                                 }
          }
  ?>

<div class="container">
	                 <h2 style="text-align: center; color:lightblue;">Insert student information</h2>
 		        <form action="" method="POST" enctype="multipart/form-data" style="margin:auto;text-align: center; width:450px;background-color:black; color:deeppink; font-weight: bold;">
                    <br>
                       <div class="form-group">
                       <label for=""> Student Name</label>
                       <input type="text" name="name"class="form-control w-75"style="margin:auto" >
                       </div>
                         <div class="form-group">
                       <label for="">Student Roll</label>
                       <input type="text" name="roll" class="form-control w-75" style="margin:auto">
                       </div>
                        <div class="form-group">
                       <label for="">Father's name</label>
                       <input type="text" name="fname" class="form-control w-75" style="margin:auto">
                       </div>
                       <!-- <div class="form-group">
                       <label for="">Phone number</label>
                       <input type="text" name="ph" class="form-control w-75" style="margin:auto">
                       </div> -->
                       
                         <div class="form-group">
                       <label for=""> student Image</label>
                       <input type="file" name="img"class="form-control w-75 " style="margin:auto;height:60px; " >
                       </div>
                         
                       <div class="form-group">
                              <label for="">Board</label>
                              <select name="board" class="form-control w-75" style="margin:auto">
                                <option value="">Select</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Cumilla">Cumilla</option>
                                <option value="Narayanganj">Narayanganj</option>
                                <option value="Bogura">Bogura</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Chittagong">Chittagong</option>                  
                              </select>
                       </div>
                       <div class="form-group">
                              <label for="">Passing Year</label>
                              <select name="year" class="form-control w-75" style="margin:auto">
                                <option value="">Select</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>                  
                              </select>
                       </div>
                        <div class="form-group">
                             <label for="">Gender</label>
                               <br>
                               <input type="radio" name="gen" id="aa" value="male">
                               <label for="aa"style="font-weight:normal;">male</label>
                               <input type="radio" name="gen" id="bb" value="female">
                               <label for="bb" style="font-weight:normal;">female</label>

                       </div>


                       <div class="form-group">
                       <label for=""> Bangla</label>
                       <input type="text" name="ban"class="form-control w-75"style="margin:auto" >
                       </div>
                       <div class="form-group">
                       <label for=""> English</label>
                       <input type="text" name="e"class="form-control w-75"style="margin:auto" >
                       </div>
                       <div class="form-group">
                       <label for=""> Math</label>
                       <input type="text" name="m"class="form-control w-75"style="margin:auto" >
                       </div>
                       <div class="form-group">
                       <label for=""> science</label>
                       <input type="text" name="s"class="form-control w-75"style="margin:auto" >
                       </div>
                       <div class="form-group">
                       <label for=""> social science</label>
                       <input type="text" name="ss"class="form-control w-75"style="margin:auto" >
                       </div>
                       <div class="form-group">
                       <label for=""> Religious studies</label>
                       <input type="text" name="rs"class="form-control w-75"style="margin:auto" >
                       </div>


                       <div class="form-group">
                           <input type="submit" name="bub"class="btn btn-info form-control w-50" value="submit" style="margin:auto">
                       </div>
                      <br>                   
                      <br>                   
               </div>
 		
 	</div>
 
  

  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>