<x-layout titlePage="Criar Musica">
    <section id="createMusic">

        <div class="container">
            <h1>Publicar Musica</h1>
            @if (session()->has('successCreate'))
                <div class="secess">
                    <p>{{session('successCreate')}}</p>                
                </div>
            @endif

            <x-global.form />

        </div>


    </section>
</x-layout>