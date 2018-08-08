@extends('layouts.admin')

@section('title')
    Administración | Noticias - Los Torneos
@endsection

@section('head')
    <!-- Include external CSS. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
 
    <!-- Include Editor style. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.4/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.4/css/froala_style.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
	<article>        
        <div class="botones">
            <button type="submit" form="admin-posts-edit">Guardar</button>
            <a href="{{ route('admin.posts') }}">Cancelar</a>
        </div>
        <h1>Editar Noticia</h1>
        @include('flash::message')
        <section class="formulario1">
            <form id="admin-posts-edit" action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if($errors->has('title'))
                    <p class="error" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </p>
                @endif
                <div class="campo">
                    <input id="title" type="text" class="{{ $errors->has('title') ? ' error' : '' }}" name="title" value="{{ $post->title ? $post->title : old('title') }}" placeholder="Título" autofocus required/>
                </div>
                @if($errors->has('category'))
                    <p class="error" role="alert">
                        <strong>{{ $errors->first('category') }}</strong>
                    </p>
                @endif
                <div class="custom-select">
                    <select name="category" required>
                        <option value="" disabled selected>Categoría:</option>
                        @foreach($categories as $category)
                            @if($post->category_id == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                @if($post->image)
                    <div class="post">
                        <img id="preview" src="{{ asset('storage/img/posts/' . $post->image) }}" class="image" alt="{{ $post->title }}"/>
                        <br/>
                        <p>
                            <a href="javascript:changeProfile();">Cambiar</a> |
                            <a style="color: red" href="javascript:removeImage()">Borrar</a>
                            <input type="hidden" style="display: none" value="0" name="remove" id="remove">
                        </p>
                    </div>
                @else
                    <div id="image" class="campo">
                        <input id="image" type="file" name="image" value="<?= isset($_FILES["image"]["name"]) ? $_FILES["image"]["name"] : "" ?>" accept="image/*">
                    </div>
                @endif
                <div class="checkbox">
                    <label class="container">Publicado
                        <input type="radio" name="active" value="1" {{ $post->active ? 'checked="checked"' : ''}}/>
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Despublicado
                        <input type="radio" name="active" value="0" {{ !$post->active ? 'checked="checked"' : ''}}/>
                        <span class="checkmark"></span>
                    </label>
                </div>
                @if($errors->has('content'))
                    <span class="error" role="alert">
                        <strong>{{ $errors->first('content') }}</strong>
                    </span>
                @endif
                <div class="campo">
                    <textarea id="my-editor" class="{{ $errors->has('content') ? ' error' : '' }}" name="content" placeholder="Contenido..." rows="10" autofocus required>{{ $post->content ? $post->content : old('content') }}</textarea>
                </div>
                <h2>Tags:</h2>
                <div class="datos-checkbox">
                    @foreach($tags as $tag)
                        <label class="container">{{ $tag->name }}
                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}" {{ $post->tags->contains($tag->id) ? 'checked="checked"' : '' }}>
                            <span class="check-box"></span>
                        </label>
                    @endforeach
                </div>
            </form>
        </section>
	</article>
@endsection

@section('scripts')
    <script src="/js/select.js"></script>
    <!-- Include external JS libs. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
 
    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.4/js/froala_editor.pkgd.min.js"></script>
 
    <!-- Initialize the editor. -->
    <script> 
    
        function changeProfile() {
            $('#image').click();
        }
        $('#image').change(function () {
            var imgPath = $(this)[0].value;
            var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
            if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
                readURL(this);
            else
                alert("Please select image file (jpg, jpeg, png).")
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.readAsDataURL(input.files[0]);
                reader.onload = function (e) {
                    $('#preview').attr('src', e.target.result);
                    $('#remove').val(0);
                }
            }
        }
        function removeImage() {
            $('#preview').attr('src', '{{url('images/noimage.jpg')}}');
            $('#remove').val(1);
        }
    
        $(function() { $('textarea').froalaEditor({
            language: 'es',

            heightMin: 300,
            imageMove: true,
            imageUploadParam: 'file',
            imageUploadMethod: 'post',
            // Set the image upload URL.
            imageUploadURL: '/file-upload',
            imageUploadParams: {
                froala: 'true', // This allows us to distinguish between Froala or a regular file upload.
                _token: "{{ csrf_token() }}" // This passes the laravel token with the ajax request.
            }
        /* imageMaxSize: 5 * 1024 * 1024,
        imageAllowedTypes: ['jpeg', 'jpg', 'png', 'gif'],
        imageDefaultAlign: 'center', */


        //})
       /*  .on('froalaEditor.image.beforeUpload', function (e, editor, images) {
        // Return false if you want to stop the image upload.
        })
        .on('froalaEditor.image.uploaded', function (e, editor, response) {
        // Image was uploaded to the server.
        })
        .on('froalaEditor.image.inserted', function (e, editor, $img, response) {
        // Image was inserted in the editor.
        })
        .on('froalaEditor.image.replaced', function (e, editor, $img, response) {
        // Image was replaced in the editor.
        })
        .on('froalaEditor.image.error', function (e, editor, error, response) {
        // Bad link.
        if (error.code == 1) { ... }

        // No link in upload response.
        else if (error.code == 2) { ... }

        // Error during image upload.
        else if (error.code == 3) { ... }

        // Parsing response failed.
        else if (error.code == 4) { ... }

        // Image too text-large.
        else if (error.code == 5) { ... }

        // Invalid image type.
        else if (error.code == 6) { ... }

        // Image can be uploaded only to same domain in IE 8 and IE 9.
        else if (error.code == 7) { ... } */

        // Response contains the original server response to the request if available.


        /* // Set the file upload parameter.
        fileUploadParam: 'file_param',
 
        // Set the file upload URL.
        fileUploadURL: 'files',
 
        // Additional upload params.
        fileUploadParams: {id: 'my_editor'},
 
        // Set request type.
        fileUploadMethod: 'POST',
 
        // Set max file size to 20MB.
        fileMaxSize: 20 * 1024 * 1024,
 
        // Allow to upload any file.
        fileAllowedTypes: ['*']
      })
      .on('froalaEditor.file.beforeUpload', function (e, editor, files) {
        // Return false if you want to stop the file upload.
      })
      .on('froalaEditor.file.uploaded', function (e, editor, response) {
        // File was uploaded to the server.
      })
      .on('froalaEditor.file.inserted', function (e, editor, $file, response) {
        // File was inserted in the editor.
      })
      .on('froalaEditor.file.error', function (e, editor, error, response) {
        // Bad link.
        if (error.code == 1) { ... }
 
        // No link in upload response.
        else if (error.code == 2) { ... }
 
        // Error during file upload.
        else if (error.code == 3) { ... }
 
        // Parsing response failed.
        else if (error.code == 4) { ... }
 
        // File too text-large.
        else if (error.code == 5) { ... }
 
        // Invalid file type.
        else if (error.code == 6) { ... }
 
        // File can be uploaded only to same domain in IE 8 and IE 9.
        else if (error.code == 7) { ... }
 
        // Response contains the original server response to the request if available. */

    }) }); </script>

@endsection