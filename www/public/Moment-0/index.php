<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8" />
    <title>Quiz med Formulär och PHP</title>
</head>
<body>
<h1>Quiz</h1>
<form action="result.php" method="post">
    <label>I vilket språk programmerar vi i på kursen?<br>    
        <input type="radio" name="qOne" value="php">PHP<br>
        <input type="radio" name="qOne" value="asp">ASP<br>
        <input type="radio" name="qOne" value="jsp">JSP<br><br>
    </label>
    <label>Vilket språk är ett klientskriptspråk<br>  
        <input type="radio" name="qTwo" value="jsp">JSP<br>
        <input type="radio" name="qTwo" value="js">JavaScript<br>
        <input type="radio" name="qTwo" value="basic">Basic<br><br>
    </label>
    <input type="submit" value="Skicka" />
        
    <a href="result.php?id=21&name=kalle&age=13">Nästa</a>
</form>
</body>
</html>