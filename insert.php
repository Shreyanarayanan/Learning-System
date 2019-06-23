<?php
include("connect.php");

$f1=$f2=$f3=$f4=$f5=$f6=$f7=$f8=$f9=" ";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $f1=$_POST["first"];
     $f2=$_POST["last"];
     $f3=$_POST["gender"];
     $f4=$_POST["number"];
     $f5=$_POST["age"];
     $f6=$_POST["date"];
     $f7=$_POST["email"];
     $f8=$_POST["uname"];
     $f9=$_POST["password"];

    $query= "INSERT INTO userdb(f_name,l_name,gender,mob_no,age,dob,email,uname,password) VALUES ('$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$f9');";
    if(mysqli_query($con,$query))
    {
        $f1=$f2=$f3=$f4=$f5=$f6=$f7=$f8=$f9=" ";
        header("location: login.php");
    }
    else
    {
        echo "<script>
alert('Error in signing up!!');
window.location.href='signup.php';
</script>";
    }
    
}
?>
