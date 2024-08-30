<?php
class user {

    private $förnamn;
    private $efternamn;
    private $användarnamn;
    private $lösenord;

    public function __construct($förnamn, $efternamn, $användarnamn, $lösenord) {
        $this->förnamn = $förnamn;
        $this->efternamn = $efternamn;
        $this->användarnamn = $användarnamn;
        $this->lösenord = $lösenord;
    }

    public function getFörnamn() {
        return $this->förnamn;
    }

    public function getEfternamn() {
        return $this->efternamn;
    }

    public function getAnvändarnamn() {
        return $this->användarnamn;
    }

    public function getLösenord() {
        return $this->lösenord;
    }

    public function setLösenord($lösenord) {
        $this->lösenord = $lösenord;
    }
}
?>
