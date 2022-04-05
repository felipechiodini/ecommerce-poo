<?php

class Session {
    private $isLoged;

    public function __get($name) {
        return $this->$name;
    }

    public function login(User $user) {
        if ($user->email == "felipechiodinibona@hotmail.com" && $user->password == "132567") {
            $this->isLoged = true;
            return true;
        }

        $this->isLoged = false;
        return false;
    }

    public function logoff() {
        $this->isLoged = false;
    }

}

?>