<?php
    class Update extends Database {
        public function updateData($id, $qoute, $price) {
            $this->statement = $this->connect->prepare("UPDATE common_stock SET quote = ?, price = ? WHERE id = ?");
            $this->statement->bind_param("sdi", $qoute, $price, $id);

            return $this->statement->execute();
        }
    }
