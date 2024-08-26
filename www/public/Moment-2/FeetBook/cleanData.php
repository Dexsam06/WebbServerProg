<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function cleanData($data) {
        mb_internal_encoding("UTF-8");     

        if(!mb_check_encoding($data)){
            header('Location: start.php');
        }
        
        $data = strip_tags($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }
?>
</body>
</html>