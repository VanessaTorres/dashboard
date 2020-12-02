@extends('dashboard')
@section('title_dashboard','Detalle Modulo')
@section('breadcrumbs')
    {{ Breadcrumbs::render('modulos.update',$modulo) }}
@endsection
@section('content')
    @include('fragmento.error')
    @include('fragmento.msj')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Modulos</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('modulos.update',$modulo->id)}}">
                @csrf
                @method('PUT')
                <div class="col-md-12">
                    <fieldset>
                        <legend>Datos Modulo</legend>
                        @include('config.modulos.form')
                    </fieldset>
                </div>

                <div class="col-md-12">
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="created_at" class="font-weight-bold">FECHA CREACIÓN</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                </div>
                                <input type="text" disabled class="form-control" placeholder="YY-MM-DD" id="created_at" value="{{$modulo->created_at}}">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="updated_at" class="font-weight-bold">FECHA MODIFICACIÓN</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                </div>
                                <input type="text" disabled class="form-control" placeholder="YY-MM-DD" id="updated_at" value="{{$modulo->updated_at}}">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="user_created_at" class="font-weight-bold">USUARIO CREACIÓN</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                                </div>
                                <input type="text" disabled class="form-control" placeholder="Usuario" id="user_created_at" value="@if(isset($modulo->usuario_creacion)) {{$modulo->usuario_creacion->name}} @endif">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="user_updated_at" class="font-weight-bold">USUARIO MODIFICACIÓN</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                                </div>
                                <input type="text" disabled class="form-control" placeholder="Usuario" id="user_updated_at" value="@if(isset($modulo->usuario_modificacion)) {{$modulo->usuario_modificacion->name}} @endif">
                            </div>
                        </div>

                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Grabar</button>
                        <!--<button type="reset" class="btn btn-default"><i class="fa fa-file-o"></i> Limpiar</button>-->
                        <a href="{{route('modulos.index')}}" class="btn btn-primary pull-right"><i class="fa fa-times"></i> Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection