@extends('layouts.admin')

@section('title')
    Administración | Usuarios - Los Torneos
@endsection

@section('content')
	<article>
        <h1>Crear un Usuario</h1>
        @include('flash::message')
        <section class="formulario">
            <form id="admin-users-create" action="{{ route('admin.users.store') }}" method="POST">
                @csrf
                <div class="campo">
                    <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nombre" autofocus/>
                    @if($errors->has('name'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="campo">
                    <input id="username" type="text" class="{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Usuario" required autofocus/>

                    @if($errors->has('username'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="campo">
                    <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required/>

                    @if($errors->has('email'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="custom-select">
                    <select name="country">
                       <option value="" disabled>País</option>
                       @foreach($countries as $country)
                            @if($country->id == 10)
                                <option value="{{ $country->id }}" selected>{{ $country->name }}</option>
                            @else
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endif
                       @endforeach
                	</select>
                </div>
                <div class="custom-select">
                    <select name="role">
                        <option value="" disabled>Rol</option>
                        @foreach($roles as $role)
                            @if($role->id == 6)
                                <option value="{{ $role->id }}" selected>{{ $role->display_name }}</option>
                            @else
                                <option value="{{ $role->id }}">{{ $role->display_name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="campo">
                    <input id="score" type="text" class="{{ $errors->has('score') ? ' is-invalid' : '' }}" name="score" value="{{ old('score') }}" placeholder="Puntuación" autofocus/>

                    @if($errors->has('score'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('score') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="checkbox">
					<label class="container">Generar la Contraseña
						<input id="generate-password" type="radio" name="generate-password" value="1"/>
						<span class="checkmark"></span>
					</label>
					<label class="container">Ingresar la Contraseña
						<input id="set-password" type="radio" name="generate-password" value="0"/>
						<span class="checkmark"></span>
					</label>
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
                    <input id="password_confirmation" type="password" class="hidden password" name="password_confirmation" placeholder="Confirmar Contraseña"/>
                </div>
                <div class="campo">
                    <button type="submit">Registrarme</button>
                    <button type="reset">Borrar</button>
                </div>
            </form>
        </section>
	</article>
@endsection

@section('scripts')
    <script src="/js/admin-user-create.js"></script>
    <script src="/js/select.js"></script>
@endsection