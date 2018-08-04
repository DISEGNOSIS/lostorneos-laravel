<div class="search">
    <form method="GET">
        {{-- @csrf --}}
        <input id="query" type="text" name="query" value="{{ old('query') }}" placeholder="Buscar Usuario..."/>
        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
</div>