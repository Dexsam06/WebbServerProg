<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeetBook</title>
</head>
<body>
    <h1>FeetBook</h1>
    <form action="" method="post">
   <fieldset>
       <legend>Sign up</legend>
       <label>Skriv förnamn</label>
       <input type="text" name="förnamn">
       <label>Skriv efternamn</label>
       <input type="text" name="efternamn">
       <label>Skriv användarnamn</label>
       <input type="text" name="användarnamn">
       <label>Skriv lösenord</label>
       <input type="text" name="lösenord">
       <input type="submit" value="signUp">
   </fieldset>
</form>
    <?php
    include('cleanData.php');
    
    ?>
</body>
</html>