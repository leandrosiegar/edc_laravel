@include('front.header')

<div class="container sugerCentrada" style='display:block;'>
    <div class="movie-best">
        <h2 class="maintitle"><i class="fa fa-star" aria-hidden="true"></i>
            @lang('messages.cineastas')
            <div class='row' style='margin-top:10px;'>
                @foreach ($cineastas as $item)
                    <a class="fontYellow" href="buscar-{{$item["nom_art_youtube"]}}.html">
                        <div class="col-md-2 col-xs-12 thumb imgActPortada" style='padding-top:10px;text-align:center;'>
                            <img class="fotosActPortada" alt='' src="{!! asset('images/cineastas/'.$item->nom_foto) !!}">
                            <br>
                            {{$item["nom_art_youtube"]}}
                        </div>
                    </a>
                @endforeach
            </div>
        </h2>
    </div>
</div>
@include('front.footer')