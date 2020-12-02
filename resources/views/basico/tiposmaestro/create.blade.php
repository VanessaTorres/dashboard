@extends('dashboard')
@section('title_dashboard','Crear Tipo Maestro')
@section('breadcrumbs')
    {{ Breadcrumbs::render('tiposmaestro.create') }}
@endsection
@section('content')
    @include('fragmento.error')
    @include('fragmento.msj')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tipo Maestro</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('tiposmaestro.store')}}">
                <div class="col-md-12">
                    <fieldset>
                        <legend>Crear Central</legend>
                        @include('basico.tiposmaestro.form')
                    </fieldset>
                </div>

                <div class="col-md-12">
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Grabar</button>
                        <a href="{{route('tiposmaestro.index')}}" class="btn btn-primary pull-right"><i class="fa fa-times"></i> Cancelar</a>
                    </div>
                </div>
            </form>
        </div>

@endsection