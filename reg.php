
<html>
<head>
    <title> Registration form </title>
    <link rel="stylesheet" href="temp.css">
</head>
<body>
    <div  class="unlist">
        
    <ul>
        <div class="list">
    <li><a href="myhome.php">MYHOME</a></li>
    <li style="float:right"><a href="logout.php">LOGOUT</a></li>
        </div>
            </ul><br>
    </div>
    <form method="GET" action="regconnect.php">
        <fieldset>
        <legend>DETAILS</legend><br>
        COURSE NAME:
            <input list="courses" name="course">
        <datalist id="courses" >
    <option value="Python">
    <option value="MachineLearning">
    <option value="DataScience">
     </datalist><br><br>
        E-MAIL ID:
        <input type="email" name="email">
        MOBILE NUMBER:
        <input type="text" name="number"><br><br>
        MOTIVATION TO JOIN COURSE:<br><br>
        <textarea name="mot" ></textarea><br><br>
        QUALIFICATION:
        <input type="text" name="quali"><br><br>
        <br><br>
        <input type="submit" name="submit">
        </fieldset>
    </form>
</body>
</html>

