<div class="search">
    <form action="{{ route('admin.users.search') }}" method="get">
        <input type="text" name="query" value="{{ old('query') }}"/>
        <button type="submit">Buscar</button>
    </form>
</div>