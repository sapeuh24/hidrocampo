<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('index_users') }}">
                <i class="bi bi-person"></i>
                <span>Usuarios</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('index_planes') }}">
                <i class="bi bi-person"></i>
                <span>Planes</span>
            </a>
        </li>

        {{-- <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('index_planes') }}">
                <i class="bi bi-display"></i>
                <span>Dispositivos</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('index_planes') }}">
                <i class="bi bi-credit-card"></i>
                <span>Pagos</span>
            </a>
        </li> --}}
    </ul>
</aside>
