<div class="container">
    <h1>Import Files</h1>
    <hr>
    <form action="?upload=allow" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-10 col-sm-10">
                <input class="form-control" type="file" name="fileUpload[]" id="fileUpload" multiple="mutiple">
                <button class="btn btn-success" type="submit">Upload</button>
            </div>
        </div>
    </form>
    <hr>
    <button onclick="back()">Back</button>
    <script>
        function back(){
            window.history.back();
        }
    </script>
</div>