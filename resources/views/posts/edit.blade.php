<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Noithat c3</title>
    <meta name="theme-color" content="#fafafa">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

<div class="container mt-5" style="margin-bottom: 5rem; margin-top: 5rem;">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col-md-9">
        <form role="form" action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="method" value="PUT">
            <b class="text-blue">Status</b>
            <select class="form-control mb-3" name="status">
                <option value="1" @if($post->status) selected @endif>Publish</option>
                <option value="0" @if(!$post->status) selected @endif>Pending</option>
            </select>
            <div class="form-group">
                <b class="text-blue">Title (<span style="color:red"> Min 36, Max 255 Character</span>)</b>
                <input type="text" name="title" class="form-control" placeholder="Enter Title"
                       value="{{$post->title}}" required>
            </div>
            <div class="form-group">
                <b class="text-blue">Thumbnail Image (size<span style="color:red"> 370x250</span>)</b>
                <div class="row">
                    <div class="col-md-6"><input type="file" name="image" class="form-control"
                                                 onchange="readURL(this);"/></div>
                    <div class="col-md-6"><img width="370px" height="250px" src="{{asset($post->image)}}" id="blah"/>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <b class="text-blue">Content</b>
                <textarea id="post_content" type="text"
                          style="height: 500px;"
                          name="post_content" class="form-control" placeholder="Enter Content" required>
                                            {{old('post_content')}}
                    {{$post->content}}
                                        </textarea>
            </div>

            <button type="submit" class="btn btn-primary mb-5" style="float: right;">Update</button>
        </form>

        <form role="form" action="{{route('posts.destroy', $post->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <a class="mr-3 btn btn-primary" href="{{route('posts.index')}}">View List</a>
            <button type="submit" class="btn btn-danger my-auto">Delete</button>
        </form>
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
                    .width(370)
                    .height(250);
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





