<nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-sm" style="min-height: 80px;">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="#" style="position: relative;">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" 
                 style="height: 140px; width: auto; position: absolute; left: -40px; top: 65%; transform: translateY(-50%);" 
                 class="logo-brand">
            
            <span style="margin-left: 85px; font-size: 1.5rem;">
                <span style="color: var(--accent-orange)">BER</span>ANGKATIN
            </span>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link px-3 fw-medium" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 fw-medium" href="#fitur">Cek Jadwal</a>
                </li>
                <li class="nav-item ms-lg-3">
                    <a class="btn btn-orange-custom px-4 py-2 shadow-sm" href="#">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>