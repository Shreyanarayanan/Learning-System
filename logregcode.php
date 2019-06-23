<?php
include("connect.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $uname = $_POST["email"];
    $pword = $_POST["pword"];

    $sql = "SELECT * FROM userdb WHERE email = '$uname' and password = '$pword'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);



    // If result matched $myusername and $mypassword, table row must be 1 row

    if(mysqli_num_rows($result))
    {
         $_SESSION["login"]="OK";
        $_SESSION["email"]=$uname;
        header("location: reg.php");
    }
    else
    {
        echo "<script>
alert('Wrong Username or Password');
window.location.href='logreg.php';
</script>";
    }
}

?>