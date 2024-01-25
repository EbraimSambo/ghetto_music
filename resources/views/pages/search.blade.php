<x-layout titlePage="Musicas ({{ count($musics) }})">
    <section id="start_home">
        <x-music.query-desc />
        <x-music.musics :musics="$musics"  />
    </section>
</x-layout>

