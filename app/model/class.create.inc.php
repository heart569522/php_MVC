<?php
    class Create extends Database {
        public function createData($quote, $price) {
            $this->statement = $this->connect->prepare("INSERT INTO common_stock (quote, price) VALUES (?, ?)");
            $this->statement->bind_param("sd", $quote, $price);
            if($this->statement->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function createPicture($idcom, $name, $path) {
            $this->statement = $this->connect->prepare("INSERT INTO picture (idcom, name, path) VALUES (?, ?, ?)");
            $this->statement->bind_param("iss", $idcom, $name, $path);
            if($this->statement->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
