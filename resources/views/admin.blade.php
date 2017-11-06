@extends('template.main')
@section('tittle'){{'title'}}@endsection
@section('content')
<body>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
        @include('app')
            <main>
                <p>Admin</p>

                @if(\Session::has('alert'))
                <div class="col-md-12" style="padding-left: 25%; padding-top: 2.5%">
                    <div class="alert alert-dismissible alert-success">
                        <button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button>
                        <strong>Orden generada, con numero de servicio:  {{Session::get('alert')}}</strong>
                    </div>
                </div>
                @endif
                @if ($errors->count() > 0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button>
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <div class="col-md-3"></div>
                <div class="col-md-9 col-sm-3" style="padding-top: 2em;">
                    <div class="panel panel-default">
                        <div class="panel-heading">Ordenes de servicio pendientes</div>
                        <!--<div class="panel-body">-->
                            <table class="table table-striped table-responsive">
                                <thead style="background-color: #455a64; color: white">
                                    <tr>
                                        <th>Numero de Orden</th>
                                        <th>Tipo</th>
                                        <th>Prioridad</th>
                                        <th>Asunto</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr align="left">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="danger">Pendiente</td>
                                    </tr>
                                </tbody>
                            </table>
                        <!--</div>-->
                    </div>
                </div>

                <div class="col-md-3"></div>
                <div class="col-md-9 col-sm-3" style="padding-top: 2em;">
                    <div class="panel panel-default">
                        <div class="panel-heading">Ordenes de soporte pendientes</div>
                        <!--<div class="panel-body">-->
                            <table class="table table-striped table-responsive">
                                <thead style="background-color: #455a64; color: white">
                                    <tr>
                                        <th>Numero de Orden</th>
                                        <th>Marca</th>
                                        <th>Tipo de PC</th>
                                        <th>Estado</th>
                                        <th>Condición</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr align="left">
                                        <td></td>
                                        <td></td>
                                        <td>{</td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        <!--</div>-->
                    </div>
                </div>


            </main>
        </div>
        <!--Footer content-->
        @include('template.partials.footer')
    </div>
</body>
@stop