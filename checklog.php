<?PHP

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location: logreg.php");

}

else
{
    header("location: reg.php");
}

?>