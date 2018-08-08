@extends('layouts.admin')

@section('title')
    Administración | Categorías - Los Torneos
@endsection

@section('content')
    <article>
        <h1 class="listado">Categorías:</h1>
        {{-- @include('layouts.admin-partials.search') --}}
        <div class="new">
            <a href="{{ route('admin.categories.create') }}"><i class="fas fa-plus-square"></i> Nueva Categoría</a>
        </div>
        @if($categories->count() > 0)
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
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>
                                <a href="{{ route('admin.categories.show', $category->id) }}">{{ $category->name }}</a>
                            </td>
                            <td>
                                <a class="edit" href="{{ route('admin.categories.edit', $category->id) }}"><i class="fas fa-edit"></i></a>
                            </td>
                            <td>    
                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
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
            <h2>No se han encontrado Categorías</h2>    
        @endif
    </article>
    @if($categories->count() > 0)
        {{ $categories->links() }}
    @endif
@endsection

{{-- @section('scripts')
    <script src="{{ asset('js/ajax-roles.js') }}"></script>
@endsection --}}