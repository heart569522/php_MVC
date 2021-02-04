<?php
    Class Read extends Database {
        public function fetchAll() {
            $this->statement = $this->connect->prepare("SELECT * FROM common_stock");
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $row){
                echo "<tr>
                        <th class='text-center' scope='row'>".$row['id']."</th>
                        <td> <a href='?id={$row['id']}'>".$row['quote']."</a> </td>
                        <td>".$row['price']."</td>
                        <td class='text-center'>
                            <a class='btn btn-danger' href='?idd={$row['id']}&delete=allow'>Delete</a>
                            <a class='btn btn-warning' href='?idu={$row['id']}&edit=allow&update=disallow'>Edit</a>
                        </td>
                      </tr>";
                  
            }
        }
    }
    
?>

