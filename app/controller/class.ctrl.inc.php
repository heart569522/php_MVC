<?php
    class Ctrl extends Controller {
        private $readData;
        private $addData;
        private $command;
        private $deleteData;

        public function __construct() {
            $this->readData = new Read();
            $this->addData = new Create();
            $this->deleteData = new Delete();
        }

        public function run() {

            $this->command = isset($_GET['add_data']) ? $_GET['add_data'] : null;
            if($this->command == "allow"){
                include_once './app/view/view.createData.inc.php';
            } elseif(isset($_GET['write']) == "allow"){
                $quote = isset($_GET['quote']) ? $_GET['quote'] : null;
                $price = isset($_GET['price']) ? $_GET['price'] : null;
                $status = $this->addData->createData($quote, $price);
                    if($status){
                        echo "<script>alert('Saved.')</script>";
                        echo "<script>window.location = './'</script>";
                    }
            } elseif(isset($_GET['delete']) == "allow"){
                $id = isset($_GET['idd']) ? $_GET['idd'] : null;
                if($id){
                    $status = $this->deleteData->deleteData($id);
                    if($status){
                        echo "<script>window.location.assign('?')</script>";
                    }
                }
            } elseif(isset($_GET['upload']) == "allow") {
                $targetFile = "picture/";
                if(isset($_FILES['fileUpload'])) {
                    foreach($_FILES['fileUpload']['tmp_name'] as $key => $val) {
                        $fileName = $_FILES['fileUpload']['name'][$key];
                        $fileSize = $_FILES['fileUpload']['size'][$key];
                        $fileTmp = $_FILES['fileUpload']['tmp_name'][$key];
                        $fileType = $_FILES['fileUpload']['type'][$key];
                        if($this->objUploadPicture->uploadFile($fileTmp, $targetFile, $fileName)) {
                            $status = $this->objCreatePicture->objUploadPicture($_SESSION['IDCOM'], $fileName, $targetFile);
                            
                        } else {

                        }
                    }
                } else {
                    $_SESSION['IDCOM'] = $_GET['idp'];
                    include_once './app/view/view.importPicture.inc.php';
                }
            } else {
                // Fetch All
                $data = $this->readData;
                include_once './app/view/view.fetchAll.inc.php';
            }   
        } //function run()
    }
