<!doctype html>
<html>
<head lang="sv"></head>
<body>
<h1>Moment-1</h1>
<form action="currency.php" method="post">
   <fieldset>
       <legend>Valutakonverterare</legend>
       <label>Ange ett belopp i dollar</label>
       <input type="text" name="currency">
       <input type="submit" value="Rätta">
   </fieldset>
</form>

<form action="persondata.php" method="post">
   <fieldset>
       <legend>Persondata</legend>
       <label>Skriv in namn</label>
       <input type="text" name="namn">
       <label>Skriv in ålder</label>
       <input type="text" name="ålder">
       <input type="submit" value="Rätta">
   </fieldset>
</form>

<form action="kalkylator.php" method="post"> 
   <fieldset>
       <legend>Kalkylator</legend>
       <input type="number" name="n1"> +
       <input type="number" name="n2">
       <br>
       <input type="submit" value="Beräkna">
   </fieldset>
</form>

<form action="persondata2.php" method="get">
   <fieldset>
       <legend>Persondata</legend>
       <label>Skriv in namn</label>
       <input type="text" name="namn">
       <label>Skriv ditt födelseår</label>
       <input type="text" name="födelseår">
       <input type="submit" value="Rätta">
   </fieldset>
</form>

<form action="quiz.php" method="post">
   <fieldset>
       <legend>Quiz</legend>
       <label>Vad är den 10:n siffran?</label>
       <input type="text" name="q1">
       <label>Vad är den 11:n siffran?</label>
       <input type="text" name="q2">
       <label>Vad är den 12:n siffran?</label>
       <input type="text" name="q3">
       <label>Vad är den 13:n siffran?</label>
       <input type="text" name="q4">
       <label>Vad är den 14:n siffran?</label>
       <input type="text" name="q5">
       <label>Vad är den 15:n siffran?</label>
       <input type="text" name="q6">
       <input type="submit" value="Rätta">
   </fieldset>
</form>
<?php
include("../footer.html");
?>
</body>
</html>