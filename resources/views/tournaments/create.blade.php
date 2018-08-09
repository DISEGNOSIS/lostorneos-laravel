@extends('layouts.default')

@section('title')
    Los Torneos - Crear Torneo.
@endsection

@section('head')
    <!-- Include external CSS. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
 
    <!-- Include Editor style. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.4/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.4/css/froala_style.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection

@section('content')
    <main>
        <article>        
            <div class="botones">
                <button type="submit" form="tournaments-create">Guardar</button>
                <a href="{{ route('my-account') }}">Cancelar</a>
            </div>
            <h1>Crear Torneo</h1>
            @include('flash::message')
            <section class="formulario1">
                <form id="tournaments-create" action="{{ route('tournaments.store') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
                    @csrf
                    @if($errors->has('name'))
                        <p class="error" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </p>
                    @endif
                    <div class="campo">
                        <input id="name" type="text" class="{{ $errors->has('name') ? ' error' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nombre" autofocus required/>
                    </div>
                    @if($errors->has('game'))
                        <p class="error" role="alert">
                            <strong>{{ $errors->first('game') }}</strong>
                        </p>
                    @endif
                    <div class="custom-select">
                        <select name="game" required>
                            <option value="" disabled selected>Juego:</option>
                            @foreach($games as $game)
                                <option value="{{ $game->id }}">{{ $game->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="custom-select">
                        <select name="country" required>
                            <option value="" disabled selected>País:</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div id="image" class="campo">
                        <input type="file" name="image" value="<?= isset($_FILES["image"]["name"]) ? $_FILES["image"]["name"] : "" ?>" accept="image/*">
                    </div>
                    @if($errors->has('prize'))
                        <p class="error" role="alert">
                            <strong>{{ $errors->first('prize') }}</strong>
                        </p>
                    @endif
                    <div class="campo">
                        <input id="prize" type="text" class="{{ $errors->has('prize') ? ' error' : '' }}" name="prize" value="{{ old('prize') }}" placeholder="Premio" autofocus/>
                    </div>
                    @if($errors->has('information'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('information') }}</strong>
                        </span>
                    @endif
                    <div class="campo">
                        <textarea id="my-editor" class="{{ $errors->has('information') ? ' error' : '' }}" name="information" placeholder="Información..." rows="10" autofocus>{{ old('information') }}</textarea>
                    </div>
                    <br/>
                    @if($errors->has('start'))
                    <p class="error" role="alert">
                        <strong>{{ $errors->first('start') }}</strong>
                    </p>
                    @endif
                    <div class="campo">
                        <input id="datepicker" type="text" class="{{ $errors->has('start') ? ' error' : '' }}" name="start" value="{{ old('start') }}" placeholder="Comienza" autofocus required/>
                    </div>
                    @if($errors->has('end'))
                    <p class="error" role="alert">
                        <strong>{{ $errors->first('end') }}</strong>
                    </p>
                    @endif
                    <div class="campo">
                        <input id="datepicker1" type="text" class="{{ $errors->has('end') ? ' error' : '' }}" name="end" value="{{ old('end') }}" placeholder="Finaliza" autofocus required/>
                    </div>
                    {{-- <div class="datos-checkbox">
                        <label class="container">Destacado
                            <input type="checkbox" name="featured"/>
                            <span class="check-box"></span>
                        </label>
                    </div> --}}
                </form>
            </section>
        </article>
    </main>
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

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
        $( "#datepicker" ).datepicker();
        $( "#datepicker1" ).datepicker();
    } );
    </script>

@endsection