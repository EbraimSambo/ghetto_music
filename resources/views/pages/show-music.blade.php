<x-layout titlePage="{{ $music->title . ' - ' .$music->artist }}">
    <section id="showMuisc">
        <x-music.single-music :music="$music" :download="$download" />
    </section>
</x-layout>
