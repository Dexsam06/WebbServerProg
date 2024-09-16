<?php
if(isset($_POST['message'])) {
    $name = "<hr><p>Från: " . $_SESSION['förnamn'] . ' ' . $_SESSION['efternamn'] ."</p>";
    $msg = "<p>" . $_POST['message'] . "</p>";

    file_put_contents("../../msg.dat", $name . $msg, FILE_APPEND);
}

?>