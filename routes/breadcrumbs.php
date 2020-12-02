<?php

// Inicio
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

//===============================================================Modulos Config

//Roles
Breadcrumbs::register('roles.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Roles', route('roles.index'));
});

Breadcrumbs::register('roles.create', function ($breadcrumbs) {
    $breadcrumbs->parent('roles.index');
    $breadcrumbs->push('Crear Rol', route('roles.create'));
});

Breadcrumbs::register('roles.update', function ($breadcrumbs,$rol) {
    $breadcrumbs->parent('roles.index');
    $breadcrumbs->push($rol->name, route('roles.update',$rol->id));
});

//Paquetes
Breadcrumbs::register('paquetes.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Paquetes', route('paquetes.index'));
});

Breadcrumbs::register('paquetes.create', function ($breadcrumbs) {
    $breadcrumbs->parent('paquetes.index');
    $breadcrumbs->push('Crear Paquete', route('paquetes.create'));
});

Breadcrumbs::register('paquetes.update', function ($breadcrumbs,$paquete) {
    $breadcrumbs->parent('paquetes.index');
    $breadcrumbs->push($paquete->name, route('paquetes.update',$paquete->id));
});

//Modulos
Breadcrumbs::register('modulos.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Modulos', route('modulos.index'));
});

Breadcrumbs::register('modulos.create', function ($breadcrumbs) {
    $breadcrumbs->parent('modulos.index');
    $breadcrumbs->push('Crear Modulo', route('modulos.create'));
});

Breadcrumbs::register('modulos.update', function ($breadcrumbs,$modulo) {
    $breadcrumbs->parent('modulos.index');
    $breadcrumbs->push($modulo->name, route('modulos.update',$modulo->id));
});

//Permisos
Breadcrumbs::register('permisos.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Permisos', route('permisos.index'));
});

Breadcrumbs::register('permisos.create', function ($breadcrumbs) {
    $breadcrumbs->parent('permisos.index');
    $breadcrumbs->push('Crear Permiso', route('permisos.create'));
});

Breadcrumbs::register('permisos.update', function ($breadcrumbs,$permiso) {
    $breadcrumbs->parent('permisos.index');
    $breadcrumbs->push($permiso->name, route('permisos.update',$permiso->id));
});

//===============================================================Modulos Basicos

//Tipo Maestro Item
Breadcrumbs::register('tiposmaestroitem.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Tipo Maestro Item', route('tiposmaestroitem.index'));
});

Breadcrumbs::register('tiposmaestroitem.create', function ($breadcrumbs) {
    $breadcrumbs->parent('tiposmaestroitem.index');
    $breadcrumbs->push('Crear Tipo Maestro Item', route('tiposmaestroitem.create'));
});

Breadcrumbs::register('tiposmaestroitem.update', function ($breadcrumbs,$tiposmaestroitem) {
    $breadcrumbs->parent('tiposmaestroitem.index');
    $breadcrumbs->push($tiposmaestroitem->nombre, route('tiposmaestroitem.update',$tiposmaestroitem->id));
});

//Tipo Maestro
Breadcrumbs::register('tiposmaestro.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Tipo Maestro', route('tiposmaestro.index'));
});

Breadcrumbs::register('tiposmaestro.create', function ($breadcrumbs) {
    $breadcrumbs->parent('tiposmaestro.index');
    $breadcrumbs->push('Crear Tipo Maestro', route('tiposmaestro.create'));
});

Breadcrumbs::register('tiposmaestro.update', function ($breadcrumbs,$tipomaestro) {
    $breadcrumbs->parent('tiposmaestro.index');
    $breadcrumbs->push($tipomaestro->nombre, route('tiposmaestro.update',$tipomaestro->id));
});

//Pais
Breadcrumbs::register('paises.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Pais', route('paises.index'));
});

Breadcrumbs::register('paises.create', function ($breadcrumbs) {
    $breadcrumbs->parent('paises.index');
    $breadcrumbs->push('Crear Pais', route('paises.create'));
});

Breadcrumbs::register('paises.update', function ($breadcrumbs,$pais) {
    $breadcrumbs->parent('paises.index');
    $breadcrumbs->push($pais->nombre, route('paises.update',$pais->id));
});


//Departamentos
Breadcrumbs::register('departamentos.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Departamentos', route('departamentos.index'));
});

Breadcrumbs::register('departamentos.create', function ($breadcrumbs) {
    $breadcrumbs->parent('departamentos.index');
    $breadcrumbs->push('Crear Departamento', route('departamentos.create'));
});

Breadcrumbs::register('departamentos.update', function ($breadcrumbs,$departamento) {
    $breadcrumbs->parent('departamentos.index');
    $breadcrumbs->push($departamento->nombre, route('departamentos.update',$departamento->id));
});

//Ciudades
Breadcrumbs::register('ciudades.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Ciudades', route('ciudades.index'));
});

Breadcrumbs::register('ciudades.create', function ($breadcrumbs) {
    $breadcrumbs->parent('ciudades.index');
    $breadcrumbs->push('Crear Ciudad', route('ciudades.create'));
});

Breadcrumbs::register('ciudades.update', function ($breadcrumbs,$ciudad) {
    $breadcrumbs->parent('ciudades.index');
    $breadcrumbs->push($ciudad->nombre, route('ciudades.update',$ciudad->id));
});

//Usuarios
Breadcrumbs::register('usuarios.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Usuarios', route('usuarios.index'));
});

Breadcrumbs::register('usuarios.create', function ($breadcrumbs) {
    $breadcrumbs->parent('usuarios.index');
    $breadcrumbs->push('Crear Usuario', route('usuarios.create'));
});

Breadcrumbs::register('usuarios.update', function ($breadcrumbs,$usuario) {
    $breadcrumbs->parent('usuarios.index');
    $breadcrumbs->push($usuario->name, route('usuarios.update',$usuario->id));
});

//Usuarios
Breadcrumbs::register('bancos.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Bancos', route('bancos.index'));
});

Breadcrumbs::register('bancos.create', function ($breadcrumbs) {
    $breadcrumbs->parent('bancos.index');
    $breadcrumbs->push('Crear Banco', route('bancos.create'));
});

Breadcrumbs::register('bancos.update', function ($breadcrumbs,$banco) {
    $breadcrumbs->parent('bancos.index');
    $breadcrumbs->push($banco->name, route('bancos.update',$banco->id));
});

//===============================================================Modulos Confinamiento
//Promotores
Breadcrumbs::register('promotores.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Promotores', route('promotores.index'));
});

Breadcrumbs::register('promotores.create', function ($breadcrumbs) {
    $breadcrumbs->parent('promotores.index');
    $breadcrumbs->push('Crear Promotor', route('promotores.create'));
});

Breadcrumbs::register('promotores.update', function ($breadcrumbs,$promotor) {
    $breadcrumbs->parent('promotores.index');
    $breadcrumbs->push($promotor->campana, route('promotores.update',$promotor->id));
});


//Gestor Ayuda
Breadcrumbs::register('gestorAyuda.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Gestor Ayuda', route('gestorAyuda.index'));
});

Breadcrumbs::register('gestorAyuda.create', function ($breadcrumbs) {
    $breadcrumbs->parent('gestorAyuda.index');
    $breadcrumbs->push('Crear Gestor Ayuda', route('gestorAyuda.create'));
});

Breadcrumbs::register('gestorAyuda.update', function ($breadcrumbs,$gestorAyuda) {
    $breadcrumbs->parent('gestorAyuda.index');
    $breadcrumbs->push($gestorAyuda->nombre, route('gestorAyuda.update',$gestorAyuda->id));
});

//Aporte
Breadcrumbs::register('aportes.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Aportes', route('aportes.index'));
});

Breadcrumbs::register('aportes.create', function ($breadcrumbs) {
    $breadcrumbs->parent('aportes.index');
    $breadcrumbs->push('Crear Aporte', route('aportes.create'));
});

Breadcrumbs::register('aportes.update', function ($breadcrumbs,$aporte) {
    $breadcrumbs->parent('aportes.index');
    $breadcrumbs->push($aporte->gestor_ayuda_nombre, route('aportes.update',$aporte->id));
});

//Aporte Distribución
Breadcrumbs::register('aportesDistribucion.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Distribución Aportes', route('aportesDistribucion.index'));
});

Breadcrumbs::register('aportesDistribucion.create', function ($breadcrumbs) {
    $breadcrumbs->parent('aportesDistribucion.index');
    $breadcrumbs->push('Crear Distribución Aporte', route('aportesDistribucion.create'));
});

Breadcrumbs::register('aportesDistribucion.update', function ($breadcrumbs,$aporteDistribucion) {
    $breadcrumbs->parent('aportesDistribucion.index');
    $breadcrumbs->push($aporteDistribucion->aportes, route('aportesDistribucion.update',$aporteDistribucion->id));
});

//Aporte Distribución Detalle
Breadcrumbs::register('aportesDistribucionDetalle.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Distribución Aportes Detalle', route('aportesDistribucionDetalle.index'));
});

Breadcrumbs::register('aportesDistribucionDetalle.create', function ($breadcrumbs) {
    $breadcrumbs->parent('aportesDistribucionDetalle.index');
    $breadcrumbs->push('Crear Detalle Distribución Aporte', route('aportesDistribucionDetalle.create'));
});

Breadcrumbs::register('aportesDistribucionDetalle.update', function ($breadcrumbs,$distDetalle) {
    $breadcrumbs->parent('aportesDistribucionDetalle.index');
    $breadcrumbs->push($distDetalle->responsable_nombre, route('aportesDistribucionDetalle.update',$distDetalle->id));
});

//TRM
Breadcrumbs::register('trm.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('TRM', route('trm.index'));
});

Breadcrumbs::register('trm.create', function ($breadcrumbs) {
    $breadcrumbs->parent('trm.index');
    $breadcrumbs->push('Crear TRM', route('trm.create'));
});

Breadcrumbs::register('trm.update', function ($breadcrumbs,$trm) {
    $breadcrumbs->parent('trm.index');
    $breadcrumbs->push($trm->moneda, route('trm.update',$trm->id));
});

//Informe
Breadcrumbs::register('informeGeneral.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Informe General', route('informeGeneral.index'));
});
