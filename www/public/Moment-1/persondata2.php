<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Persondata2</title>
</head>
<body>
<h1>Födelseår</h1>
<?php
    $namn = $_GET['namn'];
    $födelseår = $_GET['födelseår'];

   echo "<p>Du heter ".$namn." och var född ".$födelseår."</p>";
   include("../footer.html");
?>
</body>
</html>
