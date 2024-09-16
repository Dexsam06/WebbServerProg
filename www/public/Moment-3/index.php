<?php
session_start();
?>
<!doctype html>
<html lang="sv">

<head>
        <meta charset="utf-8">
        <title>Länka in sidor med PHP</title>
        <link href="css/styleSheet.css" rel="stylesheet" type="text/css">
</head>

<body>
        <div id="wrapper">
                <?php
                include("inc/header.php");
                ?>

                <section id="leftColumn">
                        <?php
                        include("inc/meny.php");
                        include("inc/aside.php");
                        ?>
                </section>
                <!-- End leftColumn -->
                <?php

                $page = "start";
                if (isset($_GET['page']))
                        $page = $_GET['page'];

                switch ($page) {
                        case 'blogg':
                                include('pages/blogg.php');
                                break;
                        case 'bilder':
                                include('pages/bilder.php'); 
                                break;
                        case 'kontakt':
                                include('pages/kontakt.php'); 
                                break;
                        case 'klotter':
                                include('pages/klotter.php');
                                break;
                        default:
                                include('pages/start.php');
                }
                include("inc/footer.php");

                if (file_exists("../../hit.dat")) {
                        $hit = file_get_contents("../../hit.dat");
                }
                echo "Antal användare: " . $hit;
                ?>
        </div>
        <!-- End wrapper -->
</body>

</html>