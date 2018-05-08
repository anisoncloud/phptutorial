<?php
    
    /**
     * Author: Bora
     * Contact: manasijevic.bora@gmail.com
     * Date: 11/13/2015
     * Project name: RegistrationLoginSystem_oop
     * File name: Database.php
     * Desc:
     */
    class Database {

        /* Constants */
        const HOST = 'localhost';
        const USER = 'root';
        const PASS = '';
        const DB = 'dd3';

        /* Properties */
        private $conn;

        // Constructor:
        public function __construct()
        {
            // At instantiation of the class/object, we will connect to our database.
            $this->connect();
        }

        /* Methods */

        // Method for connecting to database
        private function connect()
        {
            $this->conn = new mysqli(self::HOST, self::USER, self::PASS, self::DB);

            if($this->conn->connect_errno) {
                die("Error connecting to database: " . $this->conn->connect_error);
            }
        }

        // Method for doing query
        public function query($sql)
        {
           $resultSet = $this->conn->query($sql);

            return $resultSet;
        }

        // Method for real escaping string (we will call it from User class)
        public function escapeString($input)
        {
            $escapedString = $this->conn->real_escape_string($input);

            return $escapedString;
        }

        // Method for checking number of returned rows (when doing select queries)
        public function numRows($resultSet)
        {
            $numRows = $resultSet->num_rows;

            if($numRows > 0) {
                return $numRows;
            } else {
                return false;
            }
        }

        // Method for checking number of affected rows (when doing insert/update/delete queries etc..)
        public function affectedRows()
        {
            $affectedRows = $this->conn->affected_rows;

            if($affectedRows > 0) {
                return $affectedRows;
            } else {
                return false;
            }
        }
    }

    $database = new Database();