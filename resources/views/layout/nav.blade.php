<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}"><i class="bi bi-house-fill"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/patients')}}"><i class="bi bi-journal-check"></i> Pacientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/appointments/calendar')}}"><i class="bi bi-calendar3-week-fill"></i> Calendario de Citas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/report/patients')}}" target="__blank"><i class="bi bi-calendar3-week-fill"></i> Reporte de Pacientes</a>
                </li>
            </ul>
        </div>
    </div>
</nav>