<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo strip_tags("Hello <strong>World<strong><br>", "<strong><br>");
    echo("I en strip_tags används , efter för att deklerera vilka taggar som tillåts. 
    Det som är farligt med detta är att man kan skicka över taggar som kan vara skadliga och användas i XSS-attacker");
    include("../../footer.html");
    ?>
</body>
</html>