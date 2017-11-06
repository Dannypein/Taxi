@extends('template.main')
@section('tittle'){{'title'}}@endsection
@section('content')
<body>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
        @include('app')
            <main>

            @if(\Session::has('alert'))
                <div class="col-md-12" style="padding-left: 25%; padding-top: 2.5%">
                    <div class="alert alert-dismissible alert-success">
                        <button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button>
                        <strong>{{Session::get('alert')}}</strong>
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

            @include('template.partials.menu-user-left')

                <div class="col-md-9 col-sm-3" style="padding-top: 2em;">
                    <div class="panel panel-default">
                        <div class="panel-heading">Actualización de pólizas</div>
                        <div class="panel-body">
                            <a href="" class="btn btn-1a btn-block"><i class="fa fa-file-o" aria-hidden="true"></i>  Actualizar Póliza de seguro</a>
                            <a href="" class="btn btn-1a btn-block"><i class="fa fa-id-card-o" aria-hidden="true"></i> Actualizar Datos de los Choferes</a>
                            <a href="" class="btn btn-1a btn-block"><i class="fa fa-address-book-o" aria-hidden="true"></i> Actualizar Ajustadores</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3"></div>
                <div class="col-md-9 col-sm-3" style="padding-top: 2em;">
                    <div class="panel panel-default">
                        <div class="panel-heading">Pólizas por Vencer</div>
                        <!--<div class="panel-body">-->
                            <table class="table table-striped table-responsive">
                                <thead>
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
                                    </tr>
                                </tbody>
                            </table>
                        <!--</div>-->
                    </div>
                </div>

                <div class="col-md-3"></div>
                <div class="col-md-9 col-sm-3" style="padding-top: 2em;">
                    <div class="panel panel-default">
                        <div class="panel-heading">Ultimas Pólizas Modificadas</div>
                        <!--<div class="panel-body">-->
                            <table class="table table-striped table-responsive">
                                <thead>
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
                                        <td></td>
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