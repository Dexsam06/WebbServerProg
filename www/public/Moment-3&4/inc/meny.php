<nav>
    <h1>Innehåll</h1>
    <ul>
        <li><a href="index.php">Hem</a></li>
        <li><a href="index.php?page=blogg">Blogg</a></li>
        <li><a href="index.php?page=bilder">Bilder</a></li>
        <li><a href="index.php?page=kontakt">Kontakt</a></li>
        <li><a href="index.php?page=klotter">Klotter</a></li>
        <?php
            if(!(isset($_SESSION['inloggad']))) {
                echo '<li><a href="inLoggning.php">Logga in</a></li>';
            }
             else {
            echo '<li><a href="loggOut.php">Logga ut</a></li>';
              }
        ?>
    </ul>
</nav>