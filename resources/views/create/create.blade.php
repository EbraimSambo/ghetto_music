<x-layout titlePage="Criar Musica">
    <section id="createMusic">

        <div class="container">
            <h1>Publicar Musica</h1>
            @if (session()->has('successCreate'))
                <div class="secess">
                    <p>{{session('successCreate')}}</p>                
                </div>
            @endif
            <form action="{{ route('music.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <x-global.input-label :for="__('path_cover')" :desc="__('Capa da Músic')" />
                    {{-- <input type="text" value="{{old('path_cover')}}" name="path_cover" id="path_cover"> --}}
                    <input type="file"  name="path_cover" id="path_cover">
                    <x-global.input-error  :messages="$errors->get('path_cover')" />
                </div>

                <div class="input-group">
                    <x-global.input-label :for="__('title')" :desc="__('Titulo da Música')" />
                    <input type="text"  value="{{old('title')}}" name="title" id="title" />
                    <x-global.input-error  :messages="$errors->get('title')" />
                </div>

                <div class="input-group">
                    <label for="tags">Tags</label>
                    <input type="text" value="{{old('tags')}}" name="tags" id="tags">
                    <x-global.input-error  :messages="$errors->get('tags')" />
                </div>

                <div class="input-group">
                    <label for="artist">Artista</label>
                    <input type="text" value="{{old('artist')}}" name="artist" id="artist">
                    <x-global.input-error  :messages="$errors->get('artist')" />
                </div>

                <div class="input-group">
                    <label for="category">Categoria</label>
                    <x-global.select />
                </div>

                <div class="input-group">
                    <label for="description">Descrição</label>
                    <textarea name="description" id="description">
                        {{old('description')}}
                    </textarea>
                    <x-global.input-error  :messages="$errors->get('description')" />
                </div>

                <div class="input-group">
                    <label for="path_music">Arquivo da Música</label>
                    <input type="file" value="{{old('path_music')}}" name="path_music" id="path_music">
                    <x-global.input-error  :messages="$errors->get('path_music')" />
                </div>

                <div class="input-group">
                    <button type="submit" class="gradientYellow">Publicar Musica</button>
                </div>

            </form>

        </div>


    </section>
</x-layout>