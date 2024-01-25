@if (request("search"))
    <h2 class="heading">Resultado da pesquisa: " {{ request("search")}}"  </h2>
@endif     
   
@if (request("tag"))
    <h2 class="heading">Pesquisa da Tag: " {{ request("tag")}}"  </h2>       
@endif

@if (request("category"))
    <h2 class="heading">Resultado da Categoria: " {{ request("category")}}"  </h2>       
@endif

