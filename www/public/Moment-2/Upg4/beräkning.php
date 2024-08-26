<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include('math.php'); 

    $summa = sum(2, 5); 
    $sum = subtract(4, 1);
    $prod = multiply(2, 5);
    $divi = division(6, 2);
    
    header('Content-Type: text/html; charset=utf-8');
    echo "Summan av 2 och 5 är $summa<br>";
    echo "Differansen av 4 och 1 är $sum<br>";
    echo "Produkten av 2 och 5 är $prod<br>";
    echo "Kvoten av 2 och 5 är $divi";

    include("../../footer.html");
?>
</body>
</html>