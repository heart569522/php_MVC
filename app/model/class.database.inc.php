<?php
    class Database {
        protected $host;
        protected $user;
        protected $password;
        protected $database;
        protected $charactor;
        protected $connect;
        protected $statement;

        public function __construct() {
            $this->host = "localhost";
            $this->user = "root";
            $this->password = "";
            $this->database = "mvc";
            $this->charactor = "utf8mb4";
            $this->connect = new mysqli($this->host, $this->user, $this->password, $this->database);
            $this->connect->set_charset($this->charactor);
        }
    }
