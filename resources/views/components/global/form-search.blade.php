<form action="{{ route('search')}}">
    <input type="search" value="{{ request("search") }}" name="search" id="search" placeholder="Pesquisar">
    <label for="search" class="bi-search"></label>
</form>
