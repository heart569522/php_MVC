<div class="container">
    <h1>Common Stock</h1>
    <a class="btn btn-primary" href="?add_data=allow">Add Common Stock</a>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <th width="10%" scope="col">ID</th>
            <th width="30%" scope="col">Symbol</th>
            <th width="30%" scope="col">Price</th>
            <th width="30%" scope="col">Common</th>
        </thead>
        <tbody>
            <?php
                $data->fetchAll();
            ?>
        </tbody>
    </table>
</div>