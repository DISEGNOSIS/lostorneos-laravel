@extends('layouts.admin')

@section('title')
    Administración | Noticias - Los Torneos
@endsection

@section('content')
    
	<article>
        <h1 class="listado">Noticias:</h1>
        @include('layouts.admin-partials.search')
        <div class="new">
            <a href="{{ route('admin.posts.create') }}"><i class="fas fa-plus-square"></i> Nueva Noticia</a>
        </div>
        @if($posts->count() > 0)
            <table id="table" class="table">
                <thead>
                    <tr>
                        <th><i class="fas fa-cog"></i></th>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Categoría</th>
                        <th>Usuario</th>
                        <th>Publicado</th>
                        <th>Creado</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>
                                <a href="{{ route('admin.posts.active', $post->id) }}"><i class="fas {{ $post->active ? 'fa-check' : 'fa-times' }}"></i></a>
                            </td>
                            <td>{{ $post->id }}</td>
                            <td>
                                <a href="{{ route('admin.posts.show', $post->id) }}">{{ $post->title }}</a>
                            </td>
                            <td>
                                <a href="{{-- {{ route('admin.categories.show', $post->category->id) }} --}}">{{ $post->category['name'] }}</a>
                            </td>
                            <td>{{ $post->user['username'] }}</td>
                            <td>{{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->diffForHumans() : '-' }}
                            </td>
                            <td>{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</td>
                            <td>
                                <a class="edit" href="{{ route('admin.posts.edit', $post->id) }}"><i class="fas fa-edit"></i></a>
                            </td>
                            <td>    
                                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
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
            <h2>No se han encontrado posts</h2>    
        @endif
    </article>
    <div id="pagination">
        @if($posts->count() > 0)
            {{ $posts->links() }}
        @endif
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/ajax-posts.js') }}"></script>
@endsection