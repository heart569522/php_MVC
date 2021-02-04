<div class="container">
    <h1>Common Stock</h1>
    <a class="btn btn-primary" href="?add_data=allow">Add Common Stock</a>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <th scope="col">ID</th>
            <th scope="col">Symbol</th>
            <th scope="col">Price</th>
            <th scope="col">Common</th>
        </thead>
        <tbody>
            <?php
            $data->fetchAll();
            ?>
        </tbody>
    </table>
</div>