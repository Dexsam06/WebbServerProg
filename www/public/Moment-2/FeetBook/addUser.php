<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Filhantering Läs</title>
</head>
<body>
<?php

  $file = "../../../user.dat";

  function addUser($newUser, $file) {
    
    if(file_exists($file)){ 
        $users = unserialize(file_get_contents($file)); 
      }else{
        echo "Filen finns inte!!!";
        exit;
      }
      if (!is_array($users)) {
        $users = [];
        } else {
        // If file does not exist, initialize as an empty array
     $users = [];
     }
     $users[] = $newUser; 
      file_put_contents($file, serialize($users));  
  }
  
  function readUser($file, $användarnamn, $lösenord) {
    if(file_exists($file)){
        $users = unserialize(file_get_contents($file));
     }else{
        // Filen finns ej!! Kör om programmet “personWrite.php”
     }
  
     header('Content-Type: text/html; charset=utf-8');
     
     foreach($users as $user) {
        if ($user->getAnvändarnamn() == $användarnamn && $user->getLösenord() == $lösenord) {
            echo('Välkommen ' . $user->getFörnamn() . " " . $user->getEfternamn());
            break;
        }
     }
  }
?>
</body>
</html>