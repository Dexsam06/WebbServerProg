<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Persondata</title>
</head>
<body>
<h1>År till pension</h1>
<?php
    $namn = $_POST['namn'];
    $ålder = $_POST['ålder'];
    
   $pensionsålder = 65 - $ålder;

   echo "<p>Du heter ".$namn." och har ".$pensionsålder." år till pension</p>";
   include("../footer.html");
?>
</body>
</html>
