<?php
    
    /**
     * Author: Bora
     * Contact: manasijevic.bora@gmail.com
     * Date: 11/13/2015
     * Project name: RegistrationLoginSystem_oop
     * File name: User.php
     * Desc: Contains various methods regarding users. Like loging in, registering, etc.
     */
    class User {

        /* Methods */

        // Set message to store in session
        protected function setMessage($msg)
        {
            echo "<script>
                    alert('$msg');
                </script>";
        }

        // Method for checking if fields are not empty in registration form
        protected function checkRegistrationForEmpty($username, $email, $pass)
        {
            if (!empty($username) && !empty($email) && !empty($pass)) {
                return true;
            } else {
                return false;
            }
        }

        // Method for checking if fields are not empty in login form
        protected function checkLoginForEmpty($username, $pass)
        {
            if (!empty($username) && !empty($pass)) {
                return true;
            } else {
                return false;
            }
        }

        // Method for sanitizing user input
        protected function sanitize($input)
        {
            // We need to access database object
            global $database;

            $sanitizedInput = $database->escapeString(trim($input));

            return $sanitizedInput;
        }

        // Method for registering user
        public function register($username, $email, $pass)
        {
            // We need to access database object
            global $database;       


            if ($this->checkRegistrationForEmpty($username, $email, $pass)) {

                // Sanitizing user input
                $safeUsername = $this->sanitize($username);
                $safeEmail    = $this->sanitize($email);
                $safePass     = $this->sanitize($pass);
        // First check if there is an existing user with that username and if there is, reject registration
                $sql       = "SELECT username FROM users WHERE username = {$safeUsername}";
                $resultSet = $database->query($sql);

                if ($result = @$database->numRows($resultSet)) {
                    // There is an user with that username, so reject registration
                    // We are using here simple echo function, ofcourse,you could redirect him to error page, or make fancier error message
                    /*echo "<p>Sorry, there is already user with the same username you provided in our database.</p>";*/
                    $this->setMessage("Sorry, there is already user with the same username you provided in our database.");
                } else {
                    // We can freely register him

                    // First, make hash of the password user provided
                    $hash = password_hash($safePass, PASSWORD_BCRYPT); // We are using BlowFish algo, which is currently the strongest algo avaliable to us

                    $sql       = "INSERT INTO users VALUES (null, '{$safeUsername}', '{$safeEmail}', '{$hash}')";
                    $resultSet = $database->query($sql);

                    if ($database->affectedRows()) {
                        header("Location: index.php");
                    } else {
                        $this->setMessage("System Error: We could not add new User");
                    }
                }
            } else {
                $this->setMessage("Please, fill out all fields");
            }
        }

        // Method for loging user in
        public function logIn($username, $pass)
        {
            // We need to access database object
            global $database;

            if ($this->checkLoginForEmpty($username, $pass)) {

                $safeUsername = $this->sanitize($username);
                $safePass     = $this->sanitize($pass);

                // First,we access the existing pass hash from table
                $sql       = "SELECT pass FROM users WHERE username = '{$safeUsername}' LIMIT 1";
                $resultSet = $database->query($sql);

                // If there is a user with that username
                if ($database->numRows($resultSet)) {
                    // Extract hash from resultSet
                    $extractedHash = $resultSet->fetch_object();

                    // Verify password
                    if (password_verify($safePass, $extractedHash->pass)) {
                        header("Location: success.php");
                    } else {
                        $this->setMessage("Error, incorrect password.");
                    }
                } else {
                    $this->setMessage("There is no user with those credentials");
                }
            } else {
                $this->setMessage("Please, fill out all fields.");
            }
        }

        // Method for displaying users fetched from resultSet
        private function display($resultSet)
        {
            // Here you can edit this method,if you want to display users in different way/format
            echo "<ul>";
            while($row = $resultSet->fetch_object()) {
                echo "<li>{$row->username} - {$row->email}";
            }
            echo "</ul>";

        }

        // Method for fetching existing users
        public function fetchAllUsers()
        {
            // We need to access database object
            global $database;

            $sql = "SELECT * FROM users";
            $resultSet = $database->query($sql);

            if($database->numRows($resultSet)) {
                $this->display($resultSet);
            } else {
                echo "<p>There are no registered users, nothing to show.</p>";
            }

        }
    }