@php
use App\Models\Download;

$download = Download::all()->where('music_id',$music->id);

@endphp

@props(['music'])
<article class="box">
    <a href="{{ route('show', $music->slug) }}">
        <div class="img">
            <picture>
                <img src="{{ asset('storage/'.$music->path_cover) }}" alt="">
            </picture>
        </div>
        <div class="legend">
            <h3> {{ $music->title }} </h3>    
            <p class="medium">{{ $music->artist }}</p>
            <p class="small"> <span>Downloads:</span> 
            @if (count($download) === 0)
                Nenhum 
            @else
                {{count($download)}} 
            @endif 
            </p>                
        </div>
        <div class="download bi-arrow-down-circle-fill"></div>
    </a>
</article>

