<?php

class Contact {
    private $fname;
    private $lname;
    private $email;
    private $subject;

    // Getter and Setter methods for First Name
    public function getFname() {
        return $this->fname;
    }

    public function setFname($fname) {
        $this->fname = $fname;
    }

    // Getter and Setter methods for Last Name
    public function getLname() {
        return $this->lname;
    }

    public function setLname($lname) {
        $this->lname = $lname;
    }

    // Getter and Setter methods for Email
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    // Getter and Setter methods for Message
    public function getSubject() {
        return $this->subject;
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }
}

?>
