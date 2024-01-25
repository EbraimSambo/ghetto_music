@props(['music','download'])
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
            <h1> {{$music->title}} </h1>
            <ul>
                <li>
                    <h2><span class="bi-eye-fill"></span> 200</h2>
                </li>
                <li>
                    <h2><span class="bi-calendar-event"></span> {{ $music->created_at->diffForHumans() }} </h2>
                </li>
                <li>
                    <h2><span class="bi-arrow-down-square"></span> 
                       {{ count($download) }}
                    </h2>
                </li>
            </ul>
            <p>
                Lorem ipsum dolor sit amet consectetur
                 adipisicing elit. Molestiae numquam
                  sit suscipit nobis veniam nemo laudantium 
                  doloremque culpa earum sed, minima at eum. 
                  Et consequuntur odio fugit facere qui nulla?
            </p>
        </div>


</div>
