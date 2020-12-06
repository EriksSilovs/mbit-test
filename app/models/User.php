<?php
class User {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function register($data) {
        $this->db->query('INSERT INTO users (username, email, password) VALUES(:username, :email, :password)');

        //Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($email, $password) {
        $this->db->query('SELECT * FROM users WHERE email = :email');

        //Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $hashedPassword = $row->password;

        $passwordCheck = password_verify($password, $hashedPassword) ;
        if( ! $passwordCheck ){
            header("Location: ../error=wrong?email?or?password?");
        }
        else {
            return $row;
       }
    
    }

    public function findUserByEmail($email) {

        $this->db->query('SELECT * FROM users WHERE email = :email');

        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
           return true;
        } else {
            return false;
        }
    }
}
