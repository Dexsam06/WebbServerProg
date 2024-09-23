<?php
if (!(isset($_SESSION['inloggad']))) {
    echo 'Du är inte inloggad';
} else {
    $Token = $_SESSION['CSRFToken'];
    echo "<h1>Klotterplanket</h1>
    <form method='post'>
        <label>Meddelande</label><br>
        <textarea name='message' cols='45' rows='5'></textarea><br />
        <input type='hidden' name='CSRFToken' value='$Token'>
        <input type='submit' value='Skicka'>
    </form>";
    include('dataBas/saveMSG.php');
    if (file_exists("../../msg.dat")) {
        echo file_get_contents("../../msg.dat");
    }
}
