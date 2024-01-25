@props(['musics'])

@unless (count($musics) == 0 )
    <div id="musicContainer">
        @foreach ($musics as $music)
            <x-music.card-music :music="$music" />        
        @endforeach
    </div>        
    @else
    <h2>Nenhua Musica encontrda</h2>     
@endunless

