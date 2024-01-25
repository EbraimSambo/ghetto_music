<x-layout titlePage="{{ $music->title . ' - ' .$music->artist }}">
    <section id="showMuisc">
        <x-music.single-music :music="$music" :download="$download" />
    </section>

    @empty(!$artist)
        <section id="similar">
            <h2 class="heading">Obras de {{$music->artist }} </h2>
            <x-music.musics :musics="$artist"  />
        </section>  
    @endempty

    <section id="similar">
        <h2 class="heading">Semelhantes a {{$music->title }} </h2>
        <x-music.musics :musics="$similar"  />
    </section>

</x-layout>
