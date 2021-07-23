<?php

// User model
class User {
    private $database;

    public function __construct() {
        $this->database = new Database;
    }

    // Register the user 
    public function register($data) {
        $this->database->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password);');
        // Bind the values to named perameter
        $this->database->bind(':name', $data['name']);
        $this->database->bind(':email', $data['email']);
        $this->database->bind(':password', $data['password']);

        // Execute
        if ($this->database->execute()) {
            return true;
        } else {
            return false;
        } 
    }

    // Log the user in
    public function login($email, $password) {
        $this->database->query('SELECT * FROM users WHERE email = :email');
        $this->database->bind(':email', $email);

        $row = $this->database->single();

        $hashed_password = $row->password;
        if(password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }

    public function createUserSession($user) {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_name'] = $user->name;
    }

    // Find user by thier email address
    public function findUserByEmail($email) {
        $this->database->query('SELECT * FROM users WHERE email = :email');
        // Bind the value to named perameter
        $this->database->bind(':email', $email);

        $row = $this->database->single();

        // Check result
        if($this->database->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}