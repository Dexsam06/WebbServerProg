<?php
if ((isset($_SESSION['inloggad']))) {
    echo 'Du är inloggad<br> Välkommen ' . $_SESSION['förnamn'] . ' ' . $_SESSION['efternamn'];
} else {
    echo 'Du är inte inloggad';
}
?>