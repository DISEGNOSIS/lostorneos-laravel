@extends('layouts.admin')

@section('title')
    Administración | Tags - Los Torneos
@endsection

@section('content')
    <article>
        <h1 class="listado">Tags:</h1>
        {{-- @include('layouts.admin-partials.search') --}}
        <div class="new">
            <a href="{{ route('admin.tags.create') }}"><i class="fas fa-plus-square"></i> Nuevo Tag</a>
        </div>
        @if($tags->count() > 0)
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
                    @foreach($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>
                                <a href="{{ route('admin.tags.show', $tag->id) }}">{{ $tag->name }}</a>
                            </td>
                            <td>
                                <a class="edit" href="{{ route('admin.tags.edit', $tag->id) }}"><i class="fas fa-edit"></i></a>
                            </td>
                            <td>    
                                <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST">
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
            <h2>No se han encontrado Tags</h2>    
        @endif
    </article>
    @if($tags->count() > 0)
        {{ $tags->links() }}
    @endif
@endsection

{{-- @section('scripts')
    <script src="{{ asset('js/ajax-roles.js') }}"></script>
@endsection --}}