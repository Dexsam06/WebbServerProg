
<?php
function cleanData($data)
{
    mb_internal_encoding("UTF-8");

    if (!mb_check_encoding($data)) {
        header('Location: start.php');
    }

    $data = strip_tags($data);
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}
?>
