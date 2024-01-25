@props(['tags'])
@php
    $tagsSearch = explode(',', $tags->tags)
@endphp

<div class="tags">
    @foreach ($tagsSearch as $tag)
        <a href="{{ route('search', $tag) }}"></a>        
    @endforeach
</div>