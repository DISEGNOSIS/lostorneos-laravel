{{-- @extends('layouts.admin')

@section('title')
    Administración | Usuarios - Los Torneos
@endsection

@section('content') --}}
	<article>
        <h1>Usuarios:</h1>
        @include('layouts.admin-partials.search')
        <div class="new">
            <a href="{{ route('admin.users.create') }}"><i class="fas fa-plus-square"></i> Nuevo Usuario</a>
        </div>
        @if($users->count() > 0)
            <table id="table" class="table">
                <thead>
                    <tr>
                        <th><a href="javascript:ajaxLoad('{{ url('users?field=active&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc')) }}')"><i class="fas fa-cog"></i></a>
                            {{ request()->session()->get('field')=='active'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):'' }}
                        </th>
                        <th>
                            <a href="javascript:ajaxLoad('{{url('users?field=id&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">ID</a>
                            {{request()->session()->get('field')=='id'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                        </th>
                        <th>
                            <a href="javascript:ajaxLoad('{{url('users?field=name&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Nombre</a>
                            {{request()->session()->get('field')=='name'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                        </th>
                        <th>
                            <a href="javascript:ajaxLoad('{{url('users?field=username&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Usuario</a>
                            {{request()->session()->get('field')=='username'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                        </th>
                        <th>
                            <a href="javascript:ajaxLoad('{{url('users?field=email&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">e-Mail</a>
                            {{request()->session()->get('field')=='email'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                        </th>
                        <th>
                            <a href="javascript:ajaxLoad('{{url('users?field=country_id&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">País</a>
                            {{request()->session()->get('field')=='country_id'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                        </th>
                        <th>
                            <a href="javascript:ajaxLoad('{{url('users?field=created_at&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Creado el</a>
                            {{request()->session()->get('field')=='created_at'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                        </th>
                        <th>
                            <a href="javascript:ajaxLoad('{{url('users?field=last_sign_in&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Último Ingreso</a>
                            {{request()->session()->get('field')=='last_sign_in'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                        </th>
                        {{-- <th onclick="sortTableNumeric()">ID</th>
                        <th onclick="sortTable(0)">Nombre</th>
                        <th onclick="sortTable(1)">Usuario</th>
                        <th onclick="sortTable(2)">e-Mail</th>
                        <th onclick="sortTable(3)">País</th>
                        <th>Creado el</th>
                        <th>Último Ingreso</th> --}}
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td><a href="{{ route('admin.users.active', $user->id) }}"><i class="fas {{ $user->active ? 'fa-check' : 'fa-times' }}"></i></a></td>
                            <td>{{ $user->id }}</td>
                            <td><a href="{{ route('admin.users.show', $user->id) }}">{{ $user->name ? $user->name : '' }}</a></td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td><img src="/img/flags/{{ $user->country ? strtolower($user->country->flag) : '' }}" alt="{{ $user->country ? $user->country->name : '' }}" class="flag"/></td>
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
        @else
            <h2>No se han encontrado usuarios</h2>    
        @endif
    </article>
    @if($users->count() > 0)
        {{ $users->links() }}
    @endif
{{-- @endsection

@section('scripts')
    <script src="{{ asset('js/ajax-users.js') }}"></script>
@endsection --}}