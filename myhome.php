<html>
<head>
    <title>my home</title>
    <link rel="stylesheet" href="temp.css">
    <style>
        p{
            font-family: sans-serif;
            font-size: 23px;
            padding-left: 450px;
        }
        h1{
            font-size: 50px;
            padding-left: 450px;
        }
        h3{
            font-size: 35px;
            padding-left: 450px;
        }
        .button {
          display: inline-block;
          border-radius: 4px;
          background-color: #f4511e;
          border: none;
          color: #FFFFFF;
          text-align: center;
          font-size: 28px;
          padding: 20px;
          width: 200px;
          transition: all 0.5s;
          cursor: pointer;
          margin: 5px;
        }

        .button span {
          cursor: pointer;
          display: inline-block;
          position: relative;
          transition: 0.5s;
        }

        .button span:after {
          content: '\00bb';
          position: absolute;
          opacity: 0;
          top: 0;
          right: -20px;
          transition: 0.5s;
        }

        .button:hover span {
          padding-right: 25px;
        }

        .button:hover span:after {
          opacity: 1;
          right: 0;
        }
    </style>
</head>
<body>
    <div  class="unlist">
        <ul>
            <div class="list">
                
                <li><a href="courselogged.php">EXPLORE COURSES</a></li>       
                <li style="float:right"><a href="logout.php">LOGOUT</a></li>
            </div>
        </ul>
    </div>
    <div>
        <?php
        include("connect.php");
        session_start();
        $mailid= $_SESSION["email"];
        $query = "SELECT f_name,l_name,gender,age,dob,mob_no,email FROM userdb WHERE email = '$mailid';";
        $result = mysqli_query($con, $query);
        $data = mysqli_fetch_array($result);
        echo "	<h1>YOUR PROFILE <br/> </h1>";
        /*echo "---------------------------- <br/>";*/
        echo "<p><b>FIRST NAME:</b> " .$data['f_name']."<br/><br/>" ;
        echo "<b>LAST NAME</b>: " .$data['l_name']."<br/><br/>" ;
        echo "<b>GENDER: </b>" .$data['gender']."<br/><br/>" ;
        echo "<b>AGE: </b>" .$data['age']."<br/><br/>" ;
        echo "<b>DOB:</b> " .$data['dob']."<br/><br/>" ;
        echo "<b>MOBILE NUMBER:</b> " .$data['mob_no']."<br/><br/>" ;
        echo "<b>EMAIL ID:</b> " .$data['email']."<br/><br/></p>" ;
        ?>
        <h3>ENROLLED COURSES</h3>
        <?php
        $query3 = "SELECT course FROM regdb WHERE email='$mailid';";
        $result2=mysqli_query($con,$query3);
        while($row = mysqli_fetch_array($result2))
        {
        $course=$row['course'];
        ?>
        <center>
            <button class="button" style="vertical-align:middle"><span> <?php echo $course ?> </span>
            </button><br><br>
        </center>
        <?php
            }
        ?>

    </div>
</body>
</html>