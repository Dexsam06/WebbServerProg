<?php
    session_start();
    
    $_SESSION = array(); // Tömmer sessionsarrayen    
    session_regenerate_id(true);
    
    header("Location: index.php");
?>