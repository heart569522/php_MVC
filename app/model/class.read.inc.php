<?php
    Class Read extends Database {
        public function fetchAll() {
            $this->statement = $this->connect->prepare("SELECT * FROM common_stock");
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $datas){
                echo "<tr>
                        <th class='text-center' scope='row'>".$datas['id']."</th>
                        <td> <a href='?id={$datas['id']}'>".$datas['quote']."</a> </td>
                        <td>".$datas['price']."</td>
                        <td class='text-center'>
                            <a class='btn btn-danger' href='?idd={$datas['id']}&delete=allow'>Delete</a>
                            <a class='btn btn-warning' href='?idu={$datas['id']}&edit=allow&update=disallow'>Edit</a>
                        </td>
                      </tr>";
                  
            }
        }
    }
    
?>

