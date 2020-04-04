<?php

$info = new mysqli('localhost','root','','edu');

function student_grade_point($num){
   if($num>=0 &&  $num<=32){
   	$grade=0;
   }else if($num>=33 && $num<=39){
        $grade=1;
   }else if($num>=40 && $num<=49){
        $grade=2;
   }else if($num>=50 && $num<=59){
        $grade=3;
   }else if($num>=60 && $num<=69){
        $grade=3.5;
   }else if($num>=70 && $num<=79){
        $grade=4;
   }else if($num>=80 && $num<=100){
        $grade=5;
   }else{
        $grade='invalid';
   }
   return $grade;
}

function student_grade($num){
   if($num>=0 &&  $num<=32){
    $grade='F';
   }else if($num>=33 && $num<=39){
        $grade='D';
   }else if($num>=40 && $num<=49){
        $grade='C';
   }else if($num>=50 && $num<=59){
        $grade='B';
   }else if($num>=60 && $num<=69){
        $grade='A-';
   }else if($num>=70 && $num<=79){
        $grade='A';
   }else if($num>=80 && $num<=100){
        $grade='A+';
   }else{
        $grade='invalid';
   }
   return $grade;
}
function cgpa_student($b,$e,$m,$ss,$s,$r ){
  if($b>0 && $e>0 && $m>0 && $ss>0 && $s>0 && $r>0){
    $total =$b+ $e+ $m+ $ss + $s + $r>0;
     $cgpa=$total/6;
    return $cgpa;
  }else{
    return "F";
  }
  
  
}

?>