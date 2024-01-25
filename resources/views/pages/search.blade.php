<x-layout titlePage="Musicas ({{ count($musics) }})">
    <section id="start_home">
        <x-music.query-desc />
        <x-music.musics :musics="$musics"  />
    </section>

    @if (request('search') || request('tag') || request('category'))
        <section id="start_home">
            <h2>Sugetões</h2>
            <x-music.musics :musics="$suegets"  />
        </section>        
    @endif

</x-layout>

