@extends('layouts.admin')

@section('title')
    Administración | Permisos - Los Torneos
@endsection

@section('content')
<article>
        <h1 class="listado">Permisos:</h1>
        {{-- @include('layouts.admin-partials.search') --}}
        <div class="new">
            <a href="{{ route('admin.permissions.create') }}"><i class="fas fa-plus-square"></i> Nuevo Permiso</a>
        </div>
        @if($permissions->count() > 0)
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
                    @foreach($permissions as $permission)
                        <tr>
                            <td>{{ $permission->id }}</td>
                            <td>
                                <a href="{{ route('admin.permissions.show', $permission->id) }}">{{ $permission->display_name }}</a>
                            </td>
                            <td>
                                <a class="edit" href="{{ route('admin.permissions.edit', $permission->id) }}"><i class="fas fa-edit"></i></a>
                            </td>
                            <td>    
                                <form action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST">
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
            <h2>No se han encontrado permisos</h2>    
        @endif
    </article>
    @if($permissions->count() > 0)
        {{ $permissions->links() }}
    @endif
@endsection

{{-- @section('scripts')
    <script src="{{ asset('js/ajax-permissions.js') }}"></script>
@endsection --}}