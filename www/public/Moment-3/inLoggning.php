<?php
include('dataBas/user.php');
include('dataBas/addUser.php');
include('dataBas/cleanData.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Management for the rich</title>
</head>

<body>
    <h1>Account Management for the rich</h1>
    <form method="post">
        <fieldset>
            <legend>Sign up</legend>
            <input type="hidden" name="form_id" value="sign_up">
            <label>Skriv förnamn</label>
            <input type="text" name="förnamn">
            <label>Skriv efternamn</label>
            <input type="text" name="efternamn">
            <label>Skriv användarnamn</label>
            <input type="text" name="användarnamn">
            <label>Skriv lösenord</label>
            <input type="password" name="lösenord">
            <input type="submit" value="Sign Up">
        </fieldset>
    </form>

    <form method="post">
        <fieldset>
            <legend>Sign in</legend>
            <input type="hidden" name="form_id" value="sign_in">
            <label>Skriv användarnamn</label>
            <input type="text" name="användarnamn">
            <label>Skriv lösenord</label>
            <input type="password" name="lösenord">
            <input type="submit" value="Sign in">
        </fieldset>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['form_id'] === 'sign_up') {
            $förnamn = cleandata($_POST['förnamn']);
            $användarnamn = cleandata($_POST['användarnamn']);
            $lösenord = cleandata($_POST['lösenord']);
            $efternamn = cleandata($_POST['efternamn']);

            $newUser = new user($förnamn, $efternamn, $användarnamn, $lösenord);
            addUser($newUser, $file);
        }
        if ($_POST['form_id'] === 'sign_in') {
            $lösenord = cleandata($_POST['lösenord']);
            $användarnamn = cleandata($_POST['användarnamn']);

            foreach (readUserData($file) as $user) {
                if ($lösenord == $user->getLösenord() && $användarnamn == $user->getAnvändarnamn()) {
                    $_SESSION['inloggad'] = true;    // Användaren har anget rätt uppgifter.
                    $_SESSION['förnamn'] = $user->getFörnamn();
                    $_SESSION['efternamn'] = $user->getEfternamn();
                    break;
                }
            }
            // Om lyckad inloggning gå till index.php. Annars gå vidare och visa formuläret.
            if (isset($_SESSION['inloggad'])) {
                include("dataBas/besökRäknare.php");
                header("Location: index.php");
            }
        }
    }
    include("../footer.html");
    ?>
</body>

</html>