@extends('layouts.admin')

@section('title')
    Administración | Usuarios - Los Torneos
@endsection

@section('content')
	<article>
        <h1>Usuarios:</h1>
        <div class="new">
            <a href="{{ route('admin.users.create') }}"><i class="fas fa-plus-square"></i> Nuevo Usuario</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>e-Mail</th>
                    <th>País</th>
                    <th>Creado el</th>
                    <th>Último Ingreso</th>
                    <th>Editar &nbsp; Borrar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->active }}</td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name ? $user->name : '' }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td><img src="{{ $user->country->flag }}" alt="{{ $user->country->name }}" class="flag"/></td>
                        <td>{{ $user->created_at->toDayDateTimeString() }}</td>
                        <td>{{ $user->last_sign_in ? $user->last_sign_in->toDayDateTimeString() : '' }}</td>
                        <td>
                            <div class="actions">
                                <a class="edit" href="{{ route('admin.users.edit', $user->id) }}"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('admin.users', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete" href=""><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
	</article>
    {{ $users->links() }}
@endsection