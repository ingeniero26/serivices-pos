@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="row inbox-wrapper">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                    @include('_message')
                  <div class="row">
                    <div class="col-lg-3 border-end-lg">
                      <div class="aside-content">
                        <div class="d-flex align-items-center justify-content-between">
                          <button class="navbar-toggle btn btn-icon border d-block d-lg-none" data-bs-target=".email-aside-nav" data-bs-toggle="collapse" type="button">
                            <span class="icon"><i data-feather="chevron-down"></i></span>
                          </button>
                          <div class="order-first">
                            <h4>Servicio de correo</h4>
                            <p class="text-muted">{{ Auth::user()->email }}</p>
                          </div>
                        </div>
                        <div class="d-grid my-3">
                            <a class="btn btn-primary" href="{{ url('admin/email/compose') }}">Envio Email</a>
                        </div>
                      <div class="email-aside-nav collapse">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center"
                                    href="{{ url('admin/email/compose') }}">
                                    <i data-feather="inbox" class="icon-lg me-2"></i>
                                    Bandeja
                                    <span class="badge bg-danger fw-bolder ms-auto">2
                                </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link d-flex align-items-center"
                                    href="{{ url('admin/email/sent_email') }}">
                                    <i data-feather="mail" class="icon-lg me-2"></i>
                                    Email Enviado
                                </a>
                            </li>
                          <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#">
                              <i data-feather="briefcase" class="icon-lg me-2"></i>
                              Important
                              <span class="badge bg-secondary fw-bolder ms-auto">4
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#">
                              <i data-feather="file" class="icon-lg me-2"></i>
                              Drafts
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#">
                              <i data-feather="star" class="icon-lg me-2"></i>
                              Tags
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#">
                              <i data-feather="trash" class="icon-lg me-2"></i>
                              Trash
                            </a>
                          </li>
                        </ul>
                        <p class="text-muted tx-12 fw-bolder text-uppercase mb-2 mt-4">Labels</p>
                        <ul class="nav flex-column">
                          <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#">
                              <i data-feather="tag" class="text-warning icon-lg me-2"></i>
                              Important
                            </a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link d-flex align-items-center" href="#">
                            <i data-feather="tag" class="text-primary icon-lg me-2"></i>
                            Business
                          </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#">
                              <i data-feather="tag" class="text-info icon-lg me-2"></i>
                              Inspiration
                            </a>
                          </li>
                        </ul>
                      </div>
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="d-flex align-items-center justify-content-between p-3 border-bottom tx-16">
                        <div class="d-flex align-items-center">
                          <i data-feather="star" class="text-primary icon-lg me-2"></i>
                          <span>{{$getRecord->subject}}</span>
                        </div>
                        <div>
                          <a class="me-2" type="button" data-bs-toggle="tooltip" data-bs-title="Forward"><i data-feather="share" class="text-muted icon-lg"></i></a>
                          <a class="me-2" type="button" data-bs-toggle="tooltip" data-bs-title="Print"><i data-feather="printer" class="text-muted icon-lg"></i></a>
                          <a href="{{url('admin/email/read_delete/'.$getRecord->id)}}"><i data-feather="trash" class="text-muted icon-lg"></i></a>
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between flex-wrap px-3 py-2 border-bottom">
                        <div class="d-flex align-items-center">
                          <div class="me-2">
                            <img src="https://via.placeholder.com/36x36" alt="Avatar" class="rounded-circle img-xs">
                          </div>
                          <div class="d-flex align-items-center">
                            <a href="#" class="text-body">{{$getRecord->email}}</a>
                            <span class="mx-2 text-muted">to</span>
                            <a href="#" class="text-body me-2">me</a>
                            <div class="actions dropdown">
                              <a href="#" data-bs-toggle="dropdown"><i data-feather="chevron-down" class="icon-lg text-muted"></i></a>
                              <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">Mark as read</a>
                                <a class="dropdown-item" href="#">Mark as unread</a>
                                <a class="dropdown-item" href="#">Spam</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tx-13 text-muted mt-2 mt-sm-0">  {{date('d M',strtotime($getRecord->created_at))}}</div>
                      </div>
                      <div class="p-4 border-bottom">

                        <p>{{$getRecord->descriptions}}</p>

                        <p><strong>Enviado por</strong>,<br> {{Auth::user()->name}}</p>
                      </div>

                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

    </div>
    @endsection
