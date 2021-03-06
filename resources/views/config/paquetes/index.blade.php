@extends('dashboard')
@section('title_dashboard','Litado de paquetes')
@section('breadcrumbs')
    {{ Breadcrumbs::render('paquetes.index') }}
@endsection
@section('content')
    @include('fragmento.error')
    @include('fragmento.msj')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="pull-right">
                @can('Crear Paquete')
                    <a class="btn btn-success" href="{{route('paquetes.create')}}"><i class="fa fa-plus"></i>Crear nuevo</a>
                @endcan
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Paquete</th>
                        <th>Icono</th>
                        <th>Estado</th>
                        <th>Fecha de creación</th>
                        <th>Fecha de actualización</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($paquetes as $paquete)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$paquete->name}}</td>
                            <td><a style="color: #000;"><i class="{{ $paquete->icon }}"><?php echo "&nbsp;&nbsp;" ?></i>{{ $paquete->icon }}</a></td>
                            <td>{{$paquete->state}}</td>
                            <td>{{$paquete->created_at}}</td>
                            <td>{{$paquete->updated_at}}</td>
                            <td>
                                @can('Actualizar Paquete')
                                    <a class='btn btn-primary' href="{{route('paquetes.show',$paquete->id)}}"><i class='fas fa-edit'></i></a>
                                @endcan
                            </td>
                        </tr>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop