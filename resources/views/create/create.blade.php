<x-layout titlePage="Criar Musica">
    <section id="createMusic">

        <div class="container">
            <h1>Publicar Musica</h1>
            <form action="{{ route('music.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <label for="path_cover">Capa da Música</label>
                    {{-- <input type="text" value="{{old('path_cover')}}" name="path_cover" id="path_cover"> --}}
                    <input type="file"  name="path_cover" id="path_cover">
                    @error('path_cover')
                        <div class="inputError">
                            <p class="danger"> {{$message}} </p>
                        </div>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="title">Titulo da Música</label>
                    <input type="text" value="{{old('title')}}" name="title" id="title">
                    @error('title')
                        <div class="inputError">
                            <p class="danger"> {{$message}} </p>
                        </div>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="tags">Tags</label>
                    <input type="text" value="{{old('tags')}}" name="tags" id="tags">
                    @error('tags')
                        <div class="inputError">
                            <p class="danger"> {{$message}} </p>
                        </div>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="artist">Artista</label>
                    <input type="text" value="{{old('artist')}}" name="artist" id="artist">
                    @error('artist')
                        <div class="inputError">
                            <p class="danger"> {{$message}} </p>
                        </div>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="category">Categoria</label>
                    <select name="category" id="category">
                        @foreach ( \App\Enums\CategoryType::cases() as $category)
                            <option value="{{ $category->value}}"> {{ $category->name}} </option>
                        @endforeach
                    </select>
                    @error('category')
                        <div class="inputError">
                            <p class="danger"> {{$message}} </p>
                        </div>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="description">Descrição</label>
                    <textarea name="description" id="description">
                        {{old('description')}}
                    </textarea>
                    @error('description')
                        <div class="inputError">
                            <p class="danger"> {{$message}} </p>
                        </div>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="path_music">Arquivo da Música</label>
                    <input type="file" value="{{old('path_music')}}" name="path_music" id="path_music">
                    @error('path_music')
                        <div class="inputError">
                            <p class="danger"> {{$message}} </p>
                        </div>
                    @enderror
                </div>

                <div class="input-group">
                    <button type="submit" class="gradientYellow">Publicar Musica</button>
                </div>

            </form>

        </div>


    </section>
</x-layout>