<!DOCTYPE html>
<html lang="pt-AO">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="expected-hostname" content="ghettomusic.com">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> {{ $titlePage ? $titlePage . ' - Ghetto Music' : 'Ghetto Music'  }} </title>
        <link rel="stylesheet" href="{{ url('assets/styles/css/global.css') }}">
        <link rel="shortcut icon" href="{{ url('assets/images/logos/logo-1-png.png') }}" type="image/x-icon">
        <meta name="description" 
        content="{{ $description ? 
        $description : ' A Ghetto Music é um serviço de música digital que te dá acesso a milhões de músicas gratuítas, 
        Descubra uma nova forma de se conectar com as música angolanas. Baixe músicas gratuitas.
        A plataforma de streaming Ghetto Music oferece acesso ilimitado às melhores músicas, 
        playlists personalizadas e descobertas exclusivas. Explore um mundo de sons e artistas 
        enquanto desfruta de uma experiência de áudio de alta qualidade. 
        Sintonize-se com a música que ama e descubra novos favoritos com o Ghetto Music.' }}"
        >
      <meta name="keywords" content="{{ $keywords ? $keywords : 'Musícas, Download, Free, baixar, gratis'}}">
      <x-global.metatags />
      <meta property="og:image" content="{{ url('assets/images/logos/logo-1-png.png') }}"/>
    </head>
    <body>
        <div id="appLayout">
            <div id="rigth">
                <x-header />
                <x-global.descApp />
            </div>
            <div id="left">
                <main id="main">
                    {{ $slot }}
                </main>
                <x-footer />
            </div>
        </div>
    </body>
</html>
