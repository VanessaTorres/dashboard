@extends('dashboard')
@section('title_dashboard','Crear Paquete')
@section('breadcrumbs')
    {{ Breadcrumbs::render('paquetes.create') }}
@endsection
@section('content')
    @include('fragmento.error')
    @include('fragmento.msj')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Paquetes</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('paquetes.store')}}">
                <div class="col-md-12">
                    <fieldset>
                        <legend>Crear Paquete</legend>
                        @include('config.paquetes.form')
                    </fieldset>
                </div>

                <div class="col-md-12">
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Grabar</button>
                        <a href="{{route('paquetes.index')}}" class="btn btn-primary pull-right"><i class="fa fa-times"></i> Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection