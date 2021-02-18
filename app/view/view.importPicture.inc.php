<div class="container">
    <h1>Import Files</h1>
    <hr>
    <form action="?upload=allow" method="post" enctype="multipart/form-data">
        <input type="file" name="fileUpload[]" id="fileUpload" multiple="mutiple">
        <button class="btn btn-success" type="submit">Upload</button>
    </form>
    <hr>
    <button onclick="back()">Back</button>
    <script>
        function back(){
            window.history.back();
        }
    </script>
</div>