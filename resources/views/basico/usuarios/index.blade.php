@extends('dashboard')
@section('title_dashboard','Litado de usuarios')
@section('breadcrumbs')
    {{ Breadcrumbs::render('usuarios.index') }}
@endsection
@section('content')
    @include('fragmento.error')
    @include('fragmento.msj')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="pull-right">
                @can('Crear Usuario')
                    <a class="btn btn-success" href="{{route('usuarios.create')}}"><i class="fa fa-plus"></i>Crear nuevo</a>
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
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Fecha de creación</th>
                        <th>Fecha de actualización</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>{{$usuario->getRoleNames()}}</td>
                            <td>{{$usuario->created_at}}</td>
                            <td>{{$usuario->updated_at}}</td>
                            <td>
                                @can('Actualizar Usuario')
                                    <a class='btn btn-primary' href="{{route('usuarios.show',$usuario->id)}}"><i class='fas fa-edit'></i></a>

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