@props(['value'])
<select name="category" id="category">
    @foreach ( \App\Enums\CategoryType::cases() as $category)
        <option value="{{ $value ?? $slot }}"> {{ $category->name}} </option>
    @endforeach
</select>
@error('category')
<div class="inputError">
    <p class="danger"> {{$message}} </p>
</div>
@enderror