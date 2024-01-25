@props(['messages'])

@if ($messages)
<div class="inputError">
    @foreach ((array) $messages as $message)
    <p class="danger">{{ $message }}</p>
    @endforeach
</div>
@endif