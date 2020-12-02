@extends('dashboard')
@section('title_dashboard','Litado tipo maestro')
@section('breadcrumbs')
    {{ Breadcrumbs::render('tiposmaestro.index') }}
@endsection
@section('content')
    @include('fragmento.error')
    @include('fragmento.msj')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="pull-right">
                @can('Crear Tipo Maestro')
                    <a class="btn btn-success" href="{{route('tiposmaestro.create')}}"><i class="fa fa-plus"></i>Crear nuevo</a>
                @endcan
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Estado</th>
                        <th>Fecha de creación</th>
                        <th>Fecha de actualización</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tiposmaestro as $tipo)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$tipo->nombre}}</td>
                            <td>{{$tipo->estado}}</td>
                            <td>{{$tipo->created_at}}</td>
                            <td>{{$tipo->updated_at}}</td>
                            <td>
                                @can('Actualizar Tipo Maestro')
                                    <a class='btn btn-primary' href="{{route('tiposmaestro.show',$tipo->id)}}"><i class='fas fa-edit'></i></a>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop