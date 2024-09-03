@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <div class="row profile-body">
            @include('_message')
            <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
                <div class="card rounded">
                    <div class="card-body">

                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <h6 class="card-title mb-0">Mi Perfil</h6>

                        </div>
                        <p>{{ Auth::user()->about }}</p>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Nombre:</label>
                            <p class="text-muted">{{ Auth::user()->name }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Dirección:</label>
                            <p class="text-muted">{{ Auth::user()->address }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                            <p class="text-muted">{{ Auth::user()->email }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Website:</label>
                            <p class="text-muted">{{ Auth::user()->website }}</p>
                        </div>
                        <div class="mt-3 d-flex social-links">
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="github"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="twitter"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-9 middle-wrapper">

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">

                                <h6 class="card-title">Actualizar Perfil</h6>

                                <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{ url('admin_profile/update') }}">
                                    {{ @csrf_field() }}

                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label">Nombre</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="name" placeholder="Usuario"
                                                value="{{ $getRecord->name }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label">Usuario</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="username" placeholder="Nombre"
                                                value="{{ $getRecord->username }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" name="email" autocomplete="off"
                                                placeholder="Email" value="{{ $getRecord->email }}">
                                                <div style="color:red;">
                                                    {{ $errors->first('email') }}
                                                   </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label">Teléfono</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="phone" placeholder="Teléfono"
                                                value="{{ $getRecord->phone }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="password" autocomplete="off"
                                                placeholder="Password">
                                            <p> <span style="color: red;">Digite un nueva clave, si desea actualizar</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label">Foto</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" name="photo" autocomplete="off"
                                                placeholder="Foto">
                                                @if(!empty($getRecord->photo))
                                                    <img src="{{asset('upload/profile/'. $getRecord->photo)}}"
                                                    alt="" style="width: 25%; heigth:25%">
                                                 @endif
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 fol-form-label"> Acerca de </label>
                                        <div class="col-sm-9">
                                            <textarea id="maxlength-textarea" class="form-control" id="defaultconfig-4" maxlength="100" rows="8"
                                                placeholder="Digite una descripción corta." name="about">{{ $getRecord->about }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label">Dirección</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="address" placeholder=""
                                                value="{{ $getRecord->address }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label">Sitio web</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="website" placeholder=""
                                                value="{{ $getRecord->website }}">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-warning me-2">Editar</button>
                                    <button class="btn btn-secondary">Cancel</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- middle wrapper end -->
            <!-- right wrapper start -->
            <div class="d-none d-xl-block col-xl-3">

            </div>
            <!-- right wrapper end -->
        </div>

    </div>

    <!-- partial:../../partials/_footer.html -->
@endsection
