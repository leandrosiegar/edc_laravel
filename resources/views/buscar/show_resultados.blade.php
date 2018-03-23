@include('intranet.header')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


<h1>{{ $arrBusq[0]["nom_pel_youtube"] }} ({{ $arrBusq[0]["anno"] }})</h1>
<h2>Director: {{  }}</h2>




@include('intranet.footer')