@extends('dashboard')
@section('title_dashboard','Litado de paises')
@section('breadcrumbs')
    {{ Breadcrumbs::render('paises.index') }}
@endsection
@section('content')
    @include('fragmento.error')
    @include('fragmento.msj')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="pull-right">
                @can('Crear Pais')
                    <a class="btn btn-success" href="{{route('paises.create')}}"><i class="fa fa-plus"></i>Crear nuevo</a>
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
                        <th>Codigo Dane</th>
                        <th>Codigo Iso</th>
                        <th>Estado</th>
                        <th>Fecha de creación</th>
                        <th>Fecha de actualización</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($paises as $pais)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$pais->nombre}}</td>
                            <td>{{$pais->codigo_dane}}</td>
                            <td>{{$pais->codigo_iso}}</td>
                            <td>{{$pais->estado}}</td>
                            <td>{{$pais->created_at}}</td>
                            <td>{{$pais->updated_at}}</td>
                            <td>
                                @can('Actualizar Pais')
                                    <a class='btn btn-primary' href="{{route('paises.show',$pais->id)}}"><i class='fas fa-edit'></i></a>
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