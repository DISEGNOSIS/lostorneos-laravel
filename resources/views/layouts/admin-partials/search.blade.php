<div class="search">
    <form method="GET">
        {{-- @csrf --}}
        <i class="fa fa-search" aria-hidden="true"></i>
        <input id="query" type="text" name="query" value="{{ old('query') }}" placeholder="Buscar..."/>
        <i class="fas fa-times" id="reset"></i>
    </form>
</div>