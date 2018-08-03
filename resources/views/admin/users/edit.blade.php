@extends('layouts.admin')

@section('title')
    Administración | Usuarios - Los Torneos
@endsection

@section('content')
    <div class="heading">
        <h1>Editar Usuario</h1>
        @include('flash::message')
        <div class="botones">
            <button type="submit" form="admin-users-edit">Guardar</button>
            <a href="{{ route('admin.users') }}">Cancelar</a>
        </div>
    </div>
    <article class="col-2">
        <section class="left">
            <img src="{{ asset('storage/img/avatar/' . $user->avatar) }}" alt="Foto Perfil" class="imagen-usuario" />
            <a id="change-avatar">Cambiar la Imagen de Perfil</a>
            <a id="change-password">Cambiar la Contraseña</a>
        </section>
        <section class="formulario right">
            <form id="admin-users-edit" action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="campo">
                    <label for="name">Nombre:</label>
                    <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name ? $user->name : old('name') }}" placeholder="Nombre" autofocus/>
                    @if($errors->has('name'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="campo">
                    <label for="username">Usuario:</label>
                    <input id="username" type="text" class="{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ $user->username }}" placeholder="Usuario" required autofocus/>

                    @if($errors->has('username'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="campo">
                    <label for="email">e-Mail:</label>
                    <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" placeholder="Email" required/>

                    @if($errors->has('email'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="campo">
                    <label for="country">País:</label>
                    <select name="country">
                       <option value="" disabled>País</option>
                       @foreach($countries as $country)
                            @if($user->country_id == $country->id)
                                <option value="{{ $country->id }}" selected>{{ $country->name }}</option>
                            @else
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endif
                       @endforeach
                	</select>
                </div>
                <div class="campo">
                    <label for="score">Puntuación:</label>
                    <input id="score" type="text" class="{{ $errors->has('score') ? ' is-invalid' : '' }}" name="score" value="{{ $user->score ? $user->score : old('score') }}" placeholder="Puntuación" autofocus/>

                    @if($errors->has('score'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('score') }}</strong>
                        </span>
                    @endif
                </div>
                <div id="password" class="campo hidden">
                    <label for="password">Contraseña:</label>
                    <input type="password" class="password {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña"/>

                    @if($errors->has('password'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div id="password_confirmation" class="campo hidden">
                    <label for="password_confirmation">Confirmar Contraseña:</label>
                    <input type="password" class="password" name="password_confirmation" placeholder="Confirmar Contraseña"/>
                </div>
                <div id="avatar" class="campo hidden">
                    <label for="avatar">Avatar:</label>
                    <input type="file" name="avatar" value="<?= isset($_FILES["avatar"]["name"]) ? $_FILES["avatar"]["name"] : "" ?>" accept="image/*">
                </div>
            </form>
        </section>
	</article>
@endsection

@section('scripts')
    <script src="/js/admin-user-edit.js"></script>
@endsection