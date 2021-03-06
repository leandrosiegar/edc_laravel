@include('front.header')


<div class="container sugerCentrada" style='display:block;'>
    <div class="movie-best">
        <h2 class="maintitle"><i class="fa fa-star" aria-hidden="true"></i>
            @lang('messages.qgeec')
            <div class='row' style='margin-top:10px;'>
                @foreach ($garci as $item)
                    <?php
                    $aFoto = str_replace("http://www.youtube.com/embed/", "", $item->foto_video_garci);
                    ?>
                    <a class="fontYellow" href="buscar-{{$item["nom_pel_youtube"]}}.html">
                        <div class="col-md-2 col-xs-12 thumb imgActPortada" style='padding-top:10px;text-align:center;'>
                            <img class="fotosActPortada" alt='' src="http://i2.ytimg.com/vi/<?=$aFoto;?>/default.jpg">
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
