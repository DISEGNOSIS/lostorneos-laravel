<div class="search">
    <input id="search" value="{{ request()->session()->get('search') }}" onkeydown="if(event.keyCode == 13) ajaxLoad('{{url('admin.users')}}?search='+this.value)" placeholder="Buscar Usuario" name="search" type="text"/>
    <button type="submit" onclick="ajaxLoad('{{url('admin.users')}}?search='+$('#search').val())">
        <i class="fa fa-search" aria-hidden="true"></i>
    </button>
</div>

{{-- <div class="search">
    <form action="{{ route('admin.users.search') }}" method="get">
        <input type="text" name="query" value="{{ old('query') }}"/>
        <button type="submit">Buscar</button>
    </form>
</div> --}}