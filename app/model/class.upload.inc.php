<?php
    class Upload extends Database {
        public function uploadFile($fileTmp, $targetFile, $fileName) {
            return move_uploaded_file($fileTmp, $targetFile.$fileName);
        }
    }
