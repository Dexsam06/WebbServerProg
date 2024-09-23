<?php
if (!(isset($_SESSION['inloggad']))) {
    echo 'Du är inte inloggad';
} else {
    echo '<p>TelefonNummber: 112</p>
<p>Get help today call your mother</p>
';
}
?>
