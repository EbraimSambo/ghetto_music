@props(['desc', 'for'])
<label for="{{ $for ?? $slot }}"> {{ $desc ?? $slot }} </label>