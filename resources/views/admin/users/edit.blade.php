@extends('layouts.admin')

@section('title')
    Administración | Usuarios - Los Torneos
@endsection

@section('content')
    <h1>Editar Usuario</h1>
    @include('flash::message')
    <article class="col-2">
        <section class="left">
            <img src="{{ $user->avatar }}" alt="Foto Perfil" class="imagen-usuario" />
            <a id="change-avatar">Cambiar la Imagen de Perfil</a>
            <a id="change-password">Cambiar la Contraseña</a>
        </section>
        <section class="formulario right">
            <form id="admin-users-edit" action="{{ route('admin.users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="campo">
                    <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" placeholder="Nombre" autofocus/>
                    @if($errors->has('name'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="campo">
                    <input id="username" type="text" class="{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ $user->username }}" placeholder="Usuario" required autofocus/>

                    @if($errors->has('username'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="campo">
                    <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" placeholder="Email" required/>

                    @if($errors->has('email'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="campo">
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
                    <input id="score" type="text" class="{{ $errors->has('score') ? ' is-invalid' : '' }}" name="score" value="{{ $user->score }}" placeholder="Puntuación" autofocus/>

                    @if($errors->has('score'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('score') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="campo">
                    <input id="password" type="password" class="hidden password {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña"/>

                    @if($errors->has('password'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="campo">
                    <input id="password-confirm" type="password" class="hidden password" name="password_confirmation" placeholder="Confirmar Contraseña"/>
                </div>
                <div class="campo">
                    <input id="avatar" type="file" class="hidden" name="avatar" value="<?= isset($_FILES["avatar"]["name"]) ? $_FILES["avatar"]["name"] : "" ?>" accept="image/*">
                </div>
                <div class="campo">
                    <button type="submit">Guardar</button>
                    <button type="reset">Cancelar</button>
                </div>
            </form>
        </section>
	</article>
@endsection

@section('scripts')
    <script src="/js/form.js"></script>
@endsection