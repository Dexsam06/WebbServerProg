<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeetBook</title>
</head>
<body>
    <h1>FeetBook</h1>
    <form action="" method="post">
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
       <input type="text" name="lösenord">
       <input type="submit" value="Sign Up">
   </fieldset>
    </form>

    <form action="" method="post">
   <fieldset>
       <legend>Sign in</legend>
       <input type="hidden" name="form_id" value="sign_in">
       <label>Skriv användarnamn</label>
       <input type="text" name="användarnamn">
       <label>Skriv lösenord</label>
       <input type="text" name="lösenord">
       <input type="submit" value="Sign in">
   </fieldset>
    </form>

    <?php
    include('cleanData.php');
    include('user.php');
    include('addUser.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['form_id'] === 'sign_up') {
            $förnamn = cleandata($_POST['förnamn']);
            $användarnamn = cleandata($_POST['användarnamn']);
            $lösenord = cleandata($_POST['lösenord']);
            $efternamn = cleandata($_POST['efternamn']);

            $newUser = new user($förnamn, $efternamn, $användarnamn, $lösenord);
            addUser($newUser, $file);
        }
        if ($_POST['form_id'] === 'sign_in') {
            $användarnamn = cleandata($_POST['användarnamn']);
            $lösenord = cleandata($_POST['lösenord']);
            readUser($file, $användarnamn, $lösenord); 
        }


    }
    include("../../footer.html");
    ?>
</body>
</html>