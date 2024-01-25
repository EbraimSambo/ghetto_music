<x-layout titlePage="Home">

    @empty(!$tops)
        <section id="start_home">
            <h2>Os Mais Baixados</h2>
            <x-music.musics :musics="$tops"  />
        </section>        
    @endempty

    <section id="start_home">
        <h2>Causando Empacto</h2>
        <x-music.musics :musics="$musics"  />
    </section>

    <section id="artist-home">
        <h2>Artistas mais ouvidos</h2>
        <x-music.artists-container />
    </section>

</x-layout>
