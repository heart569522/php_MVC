<div class="container">
    <h1>Common Stock</h1>
    <a class="btn btn-primary" href="?add_data=allow">Add Common Stock</a>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <th class='text-center' width="10%" scope="col">ID</th>
            <th width="35%" scope="col">Symbol</th>
            <th width="35%" scope="col">Price</th>
            <th class='text-center' width="20%" scope="col">Common</th>
        </thead>
        <tbody>
            <?php
                $data->fetchAll();
            ?>
        </tbody>
    </table>
</div>