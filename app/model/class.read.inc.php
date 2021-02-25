<?php
    Class Read extends Database {
        public function fetchAll() {
            $this->statement = $this->connect->prepare("SELECT * FROM common_stock");
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_all(MYSQLI_ASSOC);
            $row = 1;
            foreach ($data as $datas){
                echo "<tr>
                        <th class='text-center' scope='row'><a href='?idcom={$datas['id']}'>".$row."</a></th>
                        <td> <a href='?id={$datas['id']}'>".$datas['quote']."</a> </td>
                        <td>".$datas['price']."</td>
                        <td class='text-center'>
                            <a class='btn btn-info' href='?idp={$datas['id']}&upload=disallow'>Upload</a>
                            <a class='btn btn-danger' href='?idd={$datas['id']}&delete=allow'>Delete</a>
                            <a class='btn btn-warning' href='?idu={$datas['id']}&edit=allow&update=disallow'>Edit</a>
                        </td>
                      </tr>";
                $row++;
            }
        }

        public function readPicture($id) {
            $this->statement = $this->connect->prepare("SELECT * FROM picture WHERE idcom = ?");
            $this->statement->bind_param('i', '$id');
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_assoc();
            return array($data['$id'], $data['name'], $data['path'], $data['']);
        }

        public function fetchAssoc($id) {
            $this->statement = $this->connect->prepare("SELECT * FROM common_stock WHERE idcom = ?");
            $this->statement->bind_param('i', '$id');
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_all(MYSQI_ASSOC);

            foreach($data as $row) {
                $id = $row['id'];
                $quote = $row['quote'];
                $price = $row['price'];
            }
            return array($row['$id'], $row['qoute'], $row['price']);
        }
    }
    
?>

