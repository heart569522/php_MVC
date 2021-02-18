<?php
    class Upload extends Database {
        public function uploadFile($fileTmp, $targetFile, $targetName) {
            return move_uploaded_file($fileTmp, $targetFile.$fileName);
            // $this->statement = $this->connect->prepare("UPDATE common_stock SET quote, price WHERE id = ?");
            // $this->statement->bind_param("i", $fileTmp, $targetFile, $targetName);

            // if($this->statement->execute()){
            //     return true;
            // } else {
            //     return false;
            // }
        }
    }
