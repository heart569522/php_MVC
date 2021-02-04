<?php
    class Delete extends Database {
        public function deleteData($id) {
            $this->statement = $this->connect->prepare("DELETE FROM common_stock WHERE id = ?");
            $this->statement->bind_param("i", $id);

            if($this->statement->execute()){
                return true;
            } else {
                return false;
            }
        }
    }
