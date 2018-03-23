@include('front.header')

<div class="container sugerCentrada" style='display:block;'>
    <div class="movie-best">
        <h2 class="maintitle"><i class="fa fa-star" aria-hidden="true"></i>
            Sugerencias Cineastas
            <div class='row' style='margin-top:10px;'>
                @foreach ($cineastas as $clave=>$valor)
                    <a class="fontYellow" href="buscar-{{$valor->nombre}}.html">
                        <div class="col-md-2 col-xs-12 thumb imgActPortada" style='padding-top:10px;text-align:center;'>
                            <img class="fotosActPortada" alt='' src="{!! asset('images/cineastas/'.$valor->fotoCineasta) !!}">
                            <br>
                            {{ $valor->nombre }}
                        </div>
                    </a>
                @endforeach
            </div>
        </h2>
    </div>
</div>








@include('front.footer')

