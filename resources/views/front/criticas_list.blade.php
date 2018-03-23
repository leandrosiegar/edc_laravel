@include('front.header')

<div class="container sugerCentrada" style='display:block;'>
    <div class="movie-best">
        <h2 class="maintitle"><i class="fa fa-star" aria-hidden="true"></i>
            @lang('messages.criticas')
            <div class='row' style='margin-top:10px;'>
                @foreach ($criticas as $item)

                    <a class="fontYellow" href="buscar/{{$item["urlCorta"]}}">
                        <div class="col-md-2 col-xs-12 thumb imgActPortada" style='padding-top:10px;text-align:center;'>
                            <img class="fotosActPortada" alt='' src="http://i2.ytimg.com/vi/<?=$item["youtube"];?>/default.jpg">
                            <br>
                            {{$item["nom_pel_youtube"]}}
                        </div>
                    </a>
                @endforeach
            </div>
        </h2>
    </div>
</div>

@include('front.footer')