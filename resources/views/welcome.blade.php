@extends('template.main')
@section('tittle'){{'title'}}@endsection
@section('content')
<body>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <main>
            <img name="cube" border="0" class="img-background">
                <div class="col-md-12" style="padding-top: 5%; z-index: 1">
                    <div class="jumbotron">
                        <h1>TAXI</h1>
                        <h3>ALIANZA DE PERMISIONARIOS Y CONDUCTORES DE AUTOMOVILES DE ALQUILER</h3>
                        <h4>SITIO</h4>    
                        <p>"Santiago, Las Hadas, A.C"</p>
                        <p>Manzanillo, Colima, México</p>
                    </div>
                    <div>
                        @if (Auth::guest())
                            <a href="{{ url('/auth/login') }}"><button type="button" class="btn btn-default btn-lg">ENTRAR</button></a>
                        @else
                            <a href="{{ url('/desktop') }}"><button type="button" class="btn btn-default btn-lg">PANEL DE CONTROL</button></a>
                        @endif
                    </div>
                </div>
            </main>
        <!--Footer Content-->
        @include('template.partials.footer')
    </div>
</body>
@stop
