<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8" />
    <title>Quiz med Formulär och PHP</title>
</head>
<body>
<h1>Resultat</h1>
<?php 
    $points = 0;
    $ansOne = $_POST['qOne'];
    $ansTwo = $_POST['qTwo'];

    if($ansOne == 'php')
        $points++;
    if($ansTwo == 'js')
        $points++;

    echo '<strong>Du fick '.$points.' av 2 möjliga</strong>';

    
    $id = $_GET['id'];
    $name = $_GET['name'];
    $age = $_GET['age'];

    echo '<p>Du är '.$age.' och heter '.$name.' och har id '.$id.'</p>';
    echo '<p>Det här är ett test</p>';
    echo '<p>Försök två att inte ha merge conflicts</p>';
    echo '<p>Försök 3</p>';
?>
</body>
</html>