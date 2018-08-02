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
        <table id="table" class="table">
            <thead>
                <tr>
                    <th><a ><i class="fas fa-cog"></i></a></th>
                    <th onclick="sortTableNumeric()">ID</th>
                    <th onclick="sortTable(0)">Nombre</th>
                    <th onclick="sortTable(1)">Usuario</th>
                    <th onclick="sortTable(2)">e-Mail</th>
                    <th onclick="sortTable(3)">País</th>
                    <th>Creado el</th>
                    <th>Último Ingreso</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td><a href="#"><i class="fas {{ $user->active ? 'fa-check' : 'fa-times' }}"></i></a></td>
                        <td>{{ $user->id }}</td>
                        <td><a href="{{ route('admin.users.show', $user->id) }}">{{ $user->name ? $user->name : '' }}</a></td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td><img src="/img/flags/{{ $user->country ? $user->country->flag : '' }}" alt="{{ $user->country ? $user->country->name : '' }}" class="flag"/></td>
                        <td>{{ $user->created_at->toDayDateTimeString() }}</td>
                        <td>{{ $user->last_sign_in ? $user->last_sign_in->toDayDateTimeString() : '' }}</td>
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
	</article>
    {{ $users->links() }}
@endsection

@section('scripts')
    <script src="/js/sortTable.js"></script>
@endsection