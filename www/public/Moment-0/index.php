<!doctype html>
<html>
<head lang="sv"></head>
<body>
<h1>Matematik-test</h1>
<form action="evaluate.php" method="post">
   <fieldset>
       <legend>Frågor</legend>
       <label>4 + 5 = </label>
       <input type="text" name="q1">
       <br>
       <label>3 x 5 = </label>
       <input type="text" name="q2">
       <br>
       <label>5 - 2 = </label>
       <input type="text" name="q3">
       <br>
       <label>6/3 = </label>
       <input type="text" name="q4">
       <br>
       <label>15 + 6 = </label>
       <input type="text" name="q5">
       <br>
       <label>Namn</label>
       <input type="text" name="namn">
       <br>
       <input type="submit" value="Rätta">
   </fieldset>
</form>
<?php
include("../footer.html");
?>
</body>
</html>