@props(['musics'])
<div id="musicContainer">
    @foreach ($musics as $music)
        <x-music.card-music :music="$music" />        
    @endforeach

</div>
