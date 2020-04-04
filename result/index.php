<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title> Education Board Bangladesh</title>
  <link rel="stylesheet" href="styl.css" />
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
           <a href="#">Official Website of Education Board</a> 
        </div>
         </div>
      <div class="result alert alert-success m-auto" style="width: 670px">
        <form action="result.php" method="POST">
          <div class="form-group">
            <label for="" class="pl-1">Board</label>
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
            <label for="" class="pl-1">Years</label>
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
            <label for="" class="pl-1">Roll</label>
            <input type="text" name="roll" class="form-control">
          </div>
          <div class="form-group">
            <input type="submit" name="sub" class="btn btn-block alert-primary" value="Result">
          </div>
        </form> 
      </div>
         <div class="fotter">  

             <div class="fotter1">
           <p>©2005-2019 Ministry of Education, All rights reserved.</p> 
             </div>
             <div class="fotter2">
           <p>Powered by</p>
       </div>
     
           <div class="fotter3">
           <img src="images/tbl_logo.png" alt="" />
       </div>    
         </div>
     </section> 


     <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>
</html>