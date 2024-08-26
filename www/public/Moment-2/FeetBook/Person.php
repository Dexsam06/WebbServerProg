<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
class Person {

    private $förnamn;
    private $efternamn;
    private $användarnamn;
    private $lösenord;

    /**
     * Person konstruktor.
     */
    public function __construct($förnamn, $efternamn, $användarnamn, $lösenord) {
        $this->förnamn = $förnamn;
        $this->efternamn = $efternamn;
        $this->användarnamn = $användarnamn;
        $this->lösenord = $lösenord;
    }

    public function getförnamn() {
        return $this->förnamn;
    }

    public function getefternamn() {
        return $this->efternamn;
    }

    public function getanvändarnamn() {
        return $this->användarnamn;
    }

    public function getlösenord() {
        return $this->lösenord;
    }

    public function setlösenord($lösenord) {
        $this->lösenord = $lösenord;
    }
}
?>
</body>
</html>