<?php
    class Ctrl extends Controller {
        private $readData;
        private $addData;

        public function __construct() {
            $this->readData = new Read();
            $this->addData = new Create();
        }

        public function run() {
            // Add Data
            // $quote = isset($_GET['quote']) ? $_GET['quote'] : null;
            // $price = isset($_GET['price']) ? $_GET['price'] : null;
            // if ($quote == null or $price == null) {
            //     include_once './app/view/view.createData.inc.php';
            // } else {
            //     $status = $this->addData->createData($quote, $price);
            //     if($status) {
            //         echo "<script>window.location.assign('?')</script>";
            //     }
            // }

            // Fetch All
            $data = $this->readData;
            include_once './app/view/view.fetchAll.inc.php';
        }
    }
