
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary custom-navbar">
        <div class="container-fluid">
            <div class="logo-title">
                <a href="/inicio">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                </a>
            </div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <div class="d-flex align-items-center">
                <div class="dropdown me-2">
                    <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-button">
                        <img src="{{ asset('images/profile.png') }}" alt="Perfil" class="dropdown-icon">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="/login">Iniciar sesión</a></li>
                    </ul>                                                                      
                </div>
            </div>
        </div>
    </nav> 