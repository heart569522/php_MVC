<?php
    class Ctrl extends Controller {
        private $readData;
        private $addData;
        private $command;

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

            $this->command = isset($_GET['add_data']) ? $_GET['add_data'] : null;
            if($this->command == "allow"){
                include_once './app/view/view.createData.inc.php';
            } elseif(isset($_GET['write']) == "allow"){
                $quote = isset($_GET['quote']) ? $_GET['quote'] : null;
                $price = isset($_GET['price']) ? $_GET['price'] : null;
                $status = $this->addData->createData($quote, $price);
                if($status){
                    echo "<scriptt>alert('Saved.')</scriptt>";
                    echo "<scriptt>window.location = './'</scriptt>";
                }
            } else {
                // Fetch All
                $data = $this->readData;
                include_once './app/view/view.fetchAll.inc.php';
            }   
        } //function run()
    }
