@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Listado de usuarios(Total: {{  $getRecord->total() }})</b> </h3></h6>

                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Usuario</th>
                                        <th>Email</th>
                                        <th>Photo</th>
                                        <th>Dirección</th>
                                        <th>Teléfono</th>

                                        <th>Rol</th>
                                        <th>Estado</th>
                                        <th>Fecha Creado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getRecord as $value)
                                        <tr>
                                            <td>{{ $value->id }}</td>
                                            <td>{{ $value->name }}</td>
                                            <td>{{ $value->username }}</td>
                                            <td>{{ $value->email }}</td>
                                            <td>

                                                @if (!empty($value->photo))
                                                    <img src="{{ asset('upload/profile/' . $value->photo) }}" alt=""
                                                        style="width: 90%; heigth:90%">
                                                @endif
                                            </td>
                                            <td>{{ $value->address }}</td>
                                            <td>{{ $value->phone }}</td>

                                            <td>
                                                @if ($value->role == 'admin')
                                                    <span class="badge bg-info">Administrador</span>
                                                @elseif ($value->role == 'agent')
                                                    <span class="badge bg-primary">Agente</span>
                                                @elseif ($value->role == 'user')
                                                    <span class="badge bg-success">Usuario</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($value->status == 'active')
                                                    <span class="badge bg-primary">Activo</span>
                                                @elseif ($value->status == 'inactive')
                                                    <span class="badge bg-danger">Inactivo</span>
                                                @endif

                                            </td>
                                            <td>{{ date('d-m-y H:i A', strtotime($value->created_at)) }}</td>
                                            <td>
                                                <a class="dropdown-item d-flex align-items-center"
                                                 href="{{url('admin/users/view/'. $value->id)}}"><i data-feather="eye"
                                                     class="icon-sm me-2"></i> <span class="">Detalle</span></a>
                                                {{-- <a href="{{ url('admin/admin/edit/' . $value->id) }}"
                                                    class="btn btn-warning"><i data-feather="edit"></i></a>
                                                <a href="{{ url('admin/admin/delete/' . $value->id) }}"
                                                    class="btn btn-danger"><i data-feather="trash"></i></a> --}}

                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function() {
            $("#dataTableExample").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#dataTableExample_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
