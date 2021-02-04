<body>
    <div class="container">
        <h1>Add Common Stock</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            <input type="hidden" name="query" value="allow">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <label class="form-label">Quote</label>
                    <input class="form-control" type="text" name="quote">
                </div>
                <div class="col-md-6 col-sm-6">
                    <label class="form-label">Price</label>
                    <input class="form-control" type="text" name="price">
                </div>
            </div>
            <br>
            <button class="btn btn-success" type="submit">Save</button>
            <button class="btn btn-danger" onclick="previous()">Cancel</button>
        </form>
    </div>