<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Noithat c3</title>
    <meta name="theme-color" content="#fafafa">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

<div class="container mt-5" style="margin-bottom: 5rem; margin-top: 5rem;">
    <div class="row mb-5">
        <div class="col-2">
            <a class="btn btn-primary" href="{{route('posts.create')}}">Add New</a>
        </div>
        <div class="col-2">
            <a class="btn btn-primary" href="/">Home page</a>
        </div>
    </div>
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-3">
                <a href="{{route('posts.edit', $post->id)}}">
                    <div class="card" style="background-color: @if($post->status) white @else gray @endif">
                        <img class="card-img-top" src="{{asset($post->image)}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-title">{{$post->title}}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

</body>

<script src="https://cdn.tiny.cloud/1/1d6jqo997q7f2kocdrlmwhmmrpfxerg0dog0roijz9ltnaaq/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    tinymce.init({
        selector: "#post_content",
        relative_urls: false,
        paste_data_images: true,
        image_title: true,
        automatic_uploads: true,
        images_upload_url: "/post/image/upload",
        file_picker_types: "image",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar1:
            "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        toolbar2: "print preview media | forecolor backcolor emoticons",
        // override default upload handler to simulate successful upload
        file_picker_callback: function (cb, value, meta) {
            var input = document.createElement("input");
            input.setAttribute("type", "file");
            input.setAttribute("accept", "image/*");
            input.onchange = function () {
                var file = this.files[0];

                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                    var id = "blobid" + new Date().getTime();
                    var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(",")[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), {title: file.name});
                };
            };
            input.click();
        }
    });
</script>


</html>





