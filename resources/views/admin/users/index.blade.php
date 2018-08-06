@extends('layouts.admin')

@section('title')
    Administración | Usuarios - Los Torneos
@endsection

@section('content')
    
	<article>
        <h1 class="listado">Usuarios:</h1>
        @include('layouts.admin-partials.search')
        <div class="new">
            <a href="{{ route('admin.users.create') }}"><i class="fas fa-plus-square"></i> Nuevo Usuario</a>
        </div>
        @if($users->count() > 0)
            <table id="table" class="table">
                <thead>
                    <tr>
                        <th><i class="fas fa-cog"></i></th>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>e-Mail</th>
                        <th>País</th>
                        <th>Creado</th>
                        <th>Último Ingreso</th>
                        <th>Rol</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>
                                <a href="{{ route('admin.users.active', $user->id) }}"><i class="fas {{ $user->active ? 'fa-check' : 'fa-times' }}"></i></a>
                            </td>
                            <td>{{ $user->id }}</td>
                            <td>
                                <a href="{{ route('admin.users.show', $user->id) }}">{{ $user->name ? $user->name : '' }}</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.users.show', $user->id) }}">{{ $user->username }}</a>
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <img src="/img/flags/{{ $user->country ? strtolower($user->country->flag) : '' }}" alt="{{ $user->country ? $user->country->name : '' }}" class="flag"/>
                            </td>
                            <td>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                            <td>
                                {{ $user->last_sign_in ? \Carbon\Carbon::parse($user->last_sign_in)->diffForHumans() : '-' }}
                            </td>
                            <td>{{ $user->roles[0]->display_name }}</td>
                            <td>
                                <a class="edit" href="{{ route('admin.users.edit', $user->id) }}"><i class="fas fa-edit"></i></a>
                            </td>
                            <td>    
                                <form action="{{ route('admin.users', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete" href=""><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h2>No se han encontrado usuarios</h2>    
        @endif
    </article>
    <div id="pagination">
        @if($users->count() > 0)
            {{ $users->links() }}
        @endif
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/ajax-users.js') }}"></script>
@endsection