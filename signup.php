<html>
<head>
    <title> first form
    </title>
    <link rel="stylesheet" href="temp.css">
</head>
<body>
    <div  class="unlist">
        
    <ul>
        <div class="list">
    <li><a href="ocrshome.php">HOME</a></li>
    <li><a href="login.php">LOGIN</a></li>
        </div>
            </ul><br>
    </div>
    <form method="POST" name="ff" action="insert.php">
        <fieldset>
        <legend> PERSONAL DETAILS</legend><br>
        FIRST NAME:
        <input type="text" name="first"><br><br>
        LAST NAME:
        <input type="text" name="last"><br><br>
        GENDER:
        <input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">female
        <input type="radio" name="gender" value="other">other<br><br>
        MOBILE NUMBER:
        <input type="text" name="number"><br><br>
        AGE:
        <input type="number" name="age" min="18" max="150"><br><br>
        DOB:
        <input type="date" name="date"><br><br>
        E-MAIL ID:
        <input type="text" name="email"><br><br>
        USERNAME:
        <input type="text" name="uname"><br><br>
        PASSWORD:
        <input type="password" name="password"><br><br>
        <input type="submit" value="submit">
    
        </fieldset>
    </form>
</body>
</html>

