  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar">
      <div class="sidebar-header">
          <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">
              SALES<span>JD</span>
          </a>
          <div class="sidebar-toggler not-active">
              <span></span>
              <span></span>
              <span></span>
          </div>
      </div>
      <div class="sidebar-body">
          <ul class="nav">
              <li class="nav-item nav-category">Main</li>
              <li class="nav-item">
                  <a href="{{ route('admin.dashboard') }}" class="nav-link">
                      <i class="link-icon" data-feather="box"></i>
                      <span class="link-title">Dashboard</span>
                  </a>
              </li>
              <li class="nav-item nav-category">Roles</li>
              <li class="nav-item">
                  <a href="{{ url('admin/users') }}" class="nav-link">
                      <i class="link-icon" data-feather="box"></i>
                      <span class="link-title">Usuarios</span>
                  </a>
              </li>
               <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Email</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/email/inbox.html" class="nav-link">Inbox</a>
                </li>
                <li class="nav-item">
                  <a href="pages/email/read.html" class="nav-link">Read</a>
                </li>
                <li class="nav-item">
                  <a href="{{url('admin/email/compose')}}" class="nav-link">Enviar</a>
                </li>
                <li class="nav-item">
                  <a href="{{url('admin/email/sent_email')}}" class="nav-link">Correos Enviados</a>
                </li>
              </ul>
            </div>
          </li>
              <li class="nav-item nav-category">Contactos</li>
              <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false"
                      aria-controls="emails">
                      <i class="link-icon" data-feather="mail"></i>
                      <span class="link-title">Terceros</span>
                      <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="emails">
                      <ul class="nav sub-menu">
                          <li class="nav-item">
                              <a href="pages/email/inbox.html" class="nav-link">Clientes</a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/email/read.html" class="nav-link">Proveedores</a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/email/compose.html" class="nav-link">Todos</a>
                          </li>
                      </ul>
                  </div>
              </li>
              {{-- <li class="nav-item">
                <a href="pages/apps/chat.html" class="nav-link">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Chat</span>
                </a>
            </li> --}}
              <li class="nav-item">
                  <a href="pages/apps/calendar.html" class="nav-link">
                      <i class="link-icon" data-feather="calendar"></i>
                      <span class="link-title">Calendar</span>
                  </a>
              </li>
              <li class="nav-item nav-category">Almacén</li>
              <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button"
                      aria-expanded="false" aria-controls="uiComponents">
                      <i class="link-icon" data-feather="feather"></i>
                      <span class="link-title">Inventario</span>
                      <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="uiComponents">
                      <ul class="nav sub-menu">
                          <li class="nav-item">
                              <a href="pages/ui-components/accordion.html" class="nav-link">Listado Productos</a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/ui-components/alerts.html" class="nav-link">Bodegas</a>
                          </li>
                          <li class="nav-item">
                              <a href="{{url('admin/category')}}" class="nav-link">Categorias</a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/ui-components/alerts.html" class="nav-link">Medidas</a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/ui-components/alerts.html" class="nav-link">Marcas</a>
                          </li>

                      </ul>
                  </div>
              </li>
              <li class="nav-item nav-category">Ingresos</li>
              <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button"
                      aria-expanded="false" aria-controls="uiComponents">
                      <i class="link-icon" data-feather="feather"></i>
                      <span class="link-title">Inventario</span>
                      <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="uiComponents">
                      <ul class="nav sub-menu">
                          <li class="nav-item">
                              <a href="pages/ui-components/accordion.html" class="nav-link">Listado Productos</a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/ui-components/alerts.html" class="nav-link">Bodegas</a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/ui-components/alerts.html" class="nav-link">Categorias</a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/ui-components/alerts.html" class="nav-link">Medidas</a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/ui-components/alerts.html" class="nav-link">Marcas</a>
                          </li>

                      </ul>
                  </div>
              </li>
              <li class="nav-item nav-category">Gastos</li>
              <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button"
                      aria-expanded="false" aria-controls="uiComponents">
                      <i class="link-icon" data-feather="feather"></i>
                      <span class="link-title">Inventario</span>
                      <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="uiComponents">
                      <ul class="nav sub-menu">
                          <li class="nav-item">
                              <a href="pages/ui-components/accordion.html" class="nav-link">Listado Productos</a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/ui-components/alerts.html" class="nav-link">Bodegas</a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/ui-components/alerts.html" class="nav-link">Categorias</a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/ui-components/alerts.html" class="nav-link">Medidas</a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/ui-components/alerts.html" class="nav-link">Marcas</a>
                          </li>

                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false"
                      aria-controls="advancedUI">
                      <i class="link-icon" data-feather="anchor"></i>
                      <span class="link-title">Advanced UI</span>
                      <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="advancedUI">
                      <ul class="nav sub-menu">
                          <li class="nav-item">
                              <a href="pages/advanced-ui/cropper.html" class="nav-link">Cropper</a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Owl carousel</a>
                          </li>

                      </ul>
                  </div>
              </li>

          </ul>
      </div>
  </nav>

  <!-- partial -->
