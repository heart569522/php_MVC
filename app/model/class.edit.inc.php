<?php
    class Edit extends Database {
        public function editData($id) {
            $this->statement = $this->connect->prepare("UPDATE common_stock SET quote, price WHERE id = ?");
            $this->statement->bind_param("i", $id);

            if($this->statement->execute()){
                return true;
            } else {
                return false;
            }
        }
    }
