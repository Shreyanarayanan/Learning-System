<?php

include("connect.php");

if($_SERVER["REQUEST_METHOD"]=="GET")
{
     $f1=$_GET["course"];
     $f2=$_GET["number"];
     $f3=$_GET["mot"];
     $f4=$_GET["quali"];
     $f5=$_GET["email"];
     
    $query= "INSERT INTO python(email,mob_no,qualification,mot_course,course_name) VALUES ('$f5','$f2','$f4','$f3','$f1');";
    $query2= "INSERT INTO regdb(email,course) VALUES ('$f5','$f1');";
    if(mysqli_query($con,$query))
    {
        $f1=$f2=$f3=$f4=$f5=" ";
    }
    if(mysqli_query($con,$query2))
    {
        $f5=$f1=" ";
    }
    
    $query3="UPDATE course SET no_stud = no_stud + 1 WHERE course_name='python';";
 mysqli_query($con,$query3);
    header("location:pdfpy.php");
}
 else
    {
        echo "<script>
alert('Problem Occurred');
window.location.href='reg.php';
</script>";
    }
?>

