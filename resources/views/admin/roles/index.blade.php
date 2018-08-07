@extends('layouts.admin')

@section('title')
    Administración | Roles - Los Torneos
@endsection

@section('content')
    <article>
        <h1 class="listado">Roles:</h1>
        {{-- @include('layouts.admin-partials.search') --}}
        <div class="new">
            <a href="{{ route('admin.roles.create') }}"><i class="fas fa-plus-square"></i> Nuevo Rol</a>
        </div>
        @if($roles->count() > 0)
            <table id="table" class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $rol)
                        <tr>
                            <td>{{ $rol->id }}</td>
                            <td>
                                <a href="{{ route('admin.roles.show', $rol->id) }}">{{ $rol->display_name }}</a>
                            </td>
                            <td>
                                <a class="edit" href="{{ route('admin.roles.edit', $rol->id) }}"><i class="fas fa-edit"></i></a>
                            </td>
                            <td>    
                                <form action="{{ route('admin.roles.destroy', $rol->id) }}" method="POST">
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
            <h2>No se han encontrado roles</h2>    
        @endif
    </article>
    @if($roles->count() > 0)
        {{ $roles->links() }}
    @endif
@endsection

{{-- @section('scripts')
    <script src="{{ asset('js/ajax-roles.js') }}"></script>
@endsection --}}