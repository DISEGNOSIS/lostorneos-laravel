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
            <button type="submit" form="admin-posts-create">Guardar</button>
            <a href="{{ route('admin.posts') }}">Cancelar</a>
        </div>
        <h1>Publicar Noticia</h1>
        @include('flash::message')
        <section class="formulario1">
            <form id="admin-posts-create" action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if($errors->has('title'))
                    <p class="error" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </p>
                @endif
                <div class="campo">
                    <input id="title" type="text" class="{{ $errors->has('title') ? ' error' : '' }}" name="title" value="{{ old('title') }}" placeholder="Título" autofocus required/>
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
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div id="image" class="campo">
                    <input type="file" name="image" value="<?= isset($_FILES["image"]["name"]) ? $_FILES["image"]["name"] : "" ?>" accept="image/*">
                </div>
                <div class="checkbox">
                    <label class="container">Publicado
                        <input type="radio" name="active" value="1" checked="checked"/>
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Despublicado
                        <input type="radio" name="active" value="0"/>
                        <span class="checkmark"></span>
                    </label>
                </div>
                @if($errors->has('content'))
                    <span class="error" role="alert">
                        <strong>{{ $errors->first('content') }}</strong>
                    </span>
                @endif
                <div class="campo">
                    <textarea id="my-editor" class="{{ $errors->has('content') ? ' error' : '' }}" name="content" placeholder="Contenido..." rows="10" autofocus required>{{ old('content') }}</textarea>
                </div>
                <h2>Tags:</h2>
                <div class="datos-checkbox">
                    @foreach($tags as $tag)
                        <label class="container">{{ $tag->name }}
                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
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
    <script> $(function() { $('textarea').froalaEditor({
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
    }) });

    </script>

@endsection