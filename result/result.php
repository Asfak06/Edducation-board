<?php include "../inc/function.php"; ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title> Education Board Bangladesh</title>
  <link rel="stylesheet" href="styl.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="images/logo_1.png" />
</head>
<body>

   
     <section class="main"> 
         <div class="head"> 
             <div class="logo"> 
           <img src="images/bd_logo.png" alt="" /> 
       </div>
       
             <div class="logo1">
           <h1>Ministry of Education </h1>
       </div> 
       
             <div class="banner"> 
           <img src="images/banner_flag.jpg" alt=""/> 
             </div>


             <div class="head2"> 
           <h3>Intermediate and Secondary Education Boards Bangladesh</h3>
       </div> 

              <div class="blar"> 
           <a href="index.php">Official Website of Education Board</a> 
        </div>
         </div>


<?php 

  $board = $_POST['board'];
  $year = $_POST['year'];
  $roll = $_POST['roll'];

  $data = $info ->query("SELECT * FROM student WHERE board='$board' AND year='$year' AND  roll = '$roll' ");

  while ( $res = $data->fetch_assoc()):

 ?>

      <div class="result alert alert-info m-auto" style="width: 670px; overflow: hidden;">
        <div class="student-info">
          <div class="s-img" style="float: left;">
            <img src="../studentimages/<?php echo $res['img']; ?>" alt="" style="width: 100px;
                          height: 100px;
                          border-radius: 50%;
                          border: 5px dotted deeppink;">
          </div>
          <div class="s-data" style="float: left; margin-left: 10px;">
             <ul class="list-unstyled">
              <li>
                <h5>Name: <?php echo $res['name']; ?></h5>
              </li>
              <li>
                <h5>Father's Name: <?php echo $res['fname']; ?></h5>
              </li>
              <li>
                <h5>Roll: <?php echo $res['roll']; ?></h5>
              </li>
              <li>
                <h5>Board: <?php echo $res['board']; ?></h5>
              </li>
              <li>
                <h5>Year: <?php echo $res['year']; ?></h5>
              </li>
             </ul>
          </div>
        </div>  
        <div class="student-result" style="clear:both;margin:auto;">
          
          <table style=" width: 100%;">
              <tr>
                <th>Subject Name</th>
                <th>Marks</th>
                <th>Grade</th>
                <th>GPA</th>
                <th>CGPA</th>
              </tr>
              <tr>
                <td> Bangla</td>
                <td> <?php echo $res['bang_o']; ?></td>
                <td> <?php echo $res['bang_g']; ?></td>
                <td> <?php echo $res['bang_gp']; ?></td>
                <td rowspan="6" ><?php echo $res['CGPA'] ?></td>
              
              </tr>
              <tr>
                <td> English</td>
                <td> <?php echo $res['eng_o']; ?></td>
                <td> <?php echo $res['eng_g']; ?></td>
                <td> <?php echo $res['eng_gp']; ?></td>
              </tr>
              <tr>
                <td> Math</td>
                <td> <?php echo $res['math_o']; ?></td>
                <td> <?php echo $res['math_g']; ?></td>
                <td> <?php echo $res['math_gp']; ?></td>
                
              </tr>
              <tr>
                <td> Social Science</td>
                <td> <?php echo $res['ss_o']; ?></td>
                <td> <?php echo $res['ss_g']; ?></td>
                <td> <?php echo $res['ss_gp']; ?></td>
              </tr>
              <tr>
                <td> Science</td>
                <td> <?php echo $res['s_o']; ?></td>
                <td> <?php echo $res['s_g']; ?></td>
                <td> <?php echo $res['s_gp']; ?></td>
              </tr>
              <tr>
                <td> Religion</td>
                <td> <?php echo $res['r_o']; ?></td>
                <td> <?php echo $res['r_g']; ?></td>
                <td> <?php echo $res['r_gp']; ?></td>
              </tr>
          </table>

        </div>  
      </div>


     <?php endwhile; ?>
         <div class="footer">  

             <div class="footer1">
           <p>©2005-2019 Ministry of Education, All rights reserved.</p> 
             </div>
             <div class="footer2">
           <p>Powered by</p>
       </div>
     
           <div class="footer3">
           <img src="images/tbl_logo.png" alt="" />
       </div>    
         </div>
     </section> 


     <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>
</html>