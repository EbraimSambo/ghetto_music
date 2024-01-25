<x-layout titlePage="Resultados ({{ count($musics) }})">
    <section id="start_home">
        <h2>Todas as Músicas</h2>
        <x-music.musics :musics="$musics" />
    </section>
</x-layout>

