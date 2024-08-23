<!doctype html>
<html>
<head lang="sv"></head>
<body>
<h1>Matematiktest</h1>
<h2>Resultat</h2>
<?php
     	$ans1 = $_POST['q1'];
     	$ans2 = $_POST['q2'];
        $ans3 = $_POST['q3'];
        $ans4 = $_POST['q4'];
        $ans5 = $_POST['q5'];
        $ans5 = $_POST['q5'];
     	$points = 0;

     	if($ans1 == 10)
           $points++;
     	if($ans2 == 11)
           $points++;
        if($ans3 == 12)
           $points++;
        if($ans4 == 13)
           $points++;
        if($ans5 == 14)
           $points++;
        if($ans5 == 15)
           $points++;
     	echo("<p>Du fick " . $points . " av 6 möjliga</p>");
        if($points >= 5) {
           echo("<p>Bra, du behärskar det mesta</p>");
        }
        else if($points >= 3) {
            echo("<p>Godkänd</p>");
         }
        else {
            echo("<p>Läs på mer och försök igen</p>");
        }
        include("../footer.html");
?>
</body>
</html>