@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detalle</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-9 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Detalle de usuario</h6>

                        <form class="forms-sample">
                            <div class="row mb-3">
                                <label for="exampleInputUsername2"
                                 class="col-sm-3 col-form-label">Nombre</label>
                                <div class="col-sm-9">
                                    {{$getRecord->name}}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputUsername2"
                                 class="col-sm-3 col-form-label">Usuario</label>
                                <div class="col-sm-9">
                                    {{$getRecord->username}}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2"
                                 class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    {{$getRecord->email}}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail2"
                                 class="col-sm-3 col-form-label">Foto</label>
                                <div class="col-sm-9">
                                    @if (!empty($getRecord->photo))
                                    <img src="{{ asset('upload/profile/' . $getRecord->photo) }}" alt=""
                                        style="width: 30%; heigth:30%">
                                @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputMobile"
                                 class="col-sm-3 col-form-label">Mobile</label>
                                <div class="col-sm-9">
                                    {{$getRecord->phone}}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Direccion</label>
                                <div class="col-sm-9">
                                    {{$getRecord->address}}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Perfil</label>
                                <div class="col-sm-9">
                                    {{$getRecord->about}}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Sitio web</label>
                                <div class="col-sm-9">
                                    {{$getRecord->website}}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputPassword2"
                                class="col-sm-3 col-form-label">Rol</label>
                                <div class="col-sm-9">
                                    @if ($getRecord->role == 'admin')
                                    <span class="badge bg-info">Administrador</span>
                                @elseif ($getRecord->role == 'agent')
                                    <span class="badge bg-primary">Agente</span>
                                @elseif ($getRecord->role == 'user')
                                    <span class="badge bg-success">Usuario</span>
                                @endif

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputPassword2"
                                 class="col-sm-3 col-form-label">Estado</label>
                                <div class="col-sm-9">

                                    @if ($getRecord->status == 'active')
                                    <span class="badge bg-primary">Activo</span>
                                @elseif ($getRecord->status == 'inactive')
                                    <span class="badge bg-danger">Inactivo</span>
                                @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputPassword2"
                                 class="col-sm-3 col-form-label">Creado</label>
                                <div class="col-sm-9">
                                    {{$getRecord->created_at}}
                                </div>
                            </div>
                            <a href="{{ url('admin/users')}}" class="btn btn-secondary">Atras</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
