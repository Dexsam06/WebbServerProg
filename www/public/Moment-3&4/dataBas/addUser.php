<?php

  $file = "../../userM3.dat";

  function addUser($newUser, $file) {
    
    if(file_exists($file)){ 
        $users = unserialize(file_get_contents($file)); 
        $users[] = $newUser; 
      file_put_contents($file, serialize($users));  
      } else {
        $users = array();
        $users[] = $newUser; 
      file_put_contents($file, serialize($users));  
      }
  }
  
  function readUserData($file) {
    if(file_exists($file)){
        $users = unserialize(file_get_contents($file));
     }
     return $users;
  }
?>
