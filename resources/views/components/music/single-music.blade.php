@props(['music','download'])

@php
    $tagsSearch = explode(',', $music->tags)
@endphp

<div class="container">
       <div class="division">
            <div class="cover">
                <img src="{{ asset('storage/' .$music->path_cover)}}" alt="">
            </div>      

            <div class="button-container">
                <a href="{{ url('download/' .$music->id)}}" class="share gradientYellow"><span class="bi-arrow-down-square"></span> Baixar Musíca</a>
                <a href="" class="btn-download blue"><span class="bi-share-fill"></span> Partilhar</a>
            </div>  
       </div>
        <div class="description">
            <ul>
                <li> <h1>{{$music->title}}</h1> </li>
                <li> <span class="desc">Artista:</span> <h2>{{$music->artist}}</h2> </li>
                <li> <span class="desc">Publicado: </span> <span class="resp">{{$music->created_at->diffForHumans()}}</span> </li>
                <li>
                    <span class="desc">Downloads:</span> 
                    @if (count($download) === 0)
                        <span class="resp"> Nenhun Download</span> 
                    @else
                        <span class="resp d"> {{count($download)}}</span> 
                    @endif 
                </li>
                <li>
                    <span class="desc">Descrição:</span>
                    <span class="resp">{{$music->description}}</span>
                </li>
                <li id="tags">
                    <ul class="container">
                        <li class="desc">Tags:</li>
                        @foreach ($tagsSearch as $tag)
                        <a class="blue" href="{{ route('search', 'tag='.$tag) }}"> {{$tag}} </a>        
                        @endforeach  
                    </ul>
                </li>
            </ul>
        </div>
</div>


