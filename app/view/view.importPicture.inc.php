<div class="container">
    <h1>Import Files</h1>
    <hr>
    <form action="?upload=allow" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <input class="form-control" type="file" name="fileUpload[]" id="fileUpload" multiple="mutiple">
            </div>
            <div class="col-md-3 col-sm-3">
                <button class="btn btn-info" type="submit">Upload</button>
            </div>
        </div>
    </form>
    <hr>
    <button class="btn btn-danger" onclick="back()">Back</button>
    <script>
        function back(){
            window.history.back();
        }
    </script>
</div>