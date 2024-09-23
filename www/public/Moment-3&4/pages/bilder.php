<?php
if (!(isset($_SESSION['inloggad']))) {
    echo 'Du är inte inloggad';
} else {
    echo '<p>Bild 1</p> <p>Bild 2</p>';
}
?>
