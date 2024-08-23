<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Kalkylator</title>
</head>
<body>
<h1>Kalkylator</h1>
<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    
    $summa = $n1 + $n2;

   echo "<p>Summan av ".$n1." och ".$n2." är ".$summa."</p>";
   include("../footer.html");
?>
</body>
</html>
