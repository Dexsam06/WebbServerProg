<?php
include('cleanData.php');
if(isset($_POST['message']) && $_SESSION['CSRFToken'] === $_POST['CSRFToken']) {
    $name = "<hr><p>Från: " . $_SESSION['förnamn'] . ' ' . $_SESSION['efternamn'] ."</p>";
    $msg = "<p>" . $_POST['message'] . "</p>";
    $msg = cleanData($msg);

    file_put_contents("../../msg.dat", $name . $msg, FILE_APPEND);
}

?>