
{{ csrf_field() }}
<fieldset>
    @if(isset($usuario))
        <legend>Actualizar Usuario</legend>
    @else
        <legend>Registrar Usuario</legend>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="@if(isset($usuario) ) {{$usuario->name}} @else {{ old('name') }} @endif">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="@if(isset($usuario) ) {{$usuario->email}} @else {{ old('email') }} @endif">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
        </div>
        @role('Administrador')
        <div class="col-md-12">
            <div class="form-group">
                <label for="rol">Rol</label>
                <select class="form-control" name="rol" id="rol">
                    <option value="">Seleccione un rol</option>
                    @foreach($roles as $rol)
                        <option value="{{$rol->name}}" @if((isset($usuario) && $usuario->hasRole($rol->name)) || (old('rol') ==  $rol->name)) selected @endif>{{$rol->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @endrole

    </div>
</fieldset>


