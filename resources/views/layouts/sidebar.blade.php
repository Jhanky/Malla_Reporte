<!-- Sidebar -->
<ul class="navbar-nav fondo-contacta sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa-solid fa-calendar-days"></i>
        </div>
        <div class="sidebar-brand-text mx-3">MALLA</div>
    </a>

    <!-- Divider -->

    @can('Administrador')
        <li class="nav-item">
            <a class="nav-link" href="/user">
                <i class="fas fa-user"></i>
                <span>Gestionar Usuarios</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/roles">
                <i class="fas fa-id-badge"></i>
                <span>Gestionar Roles</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/uni_negocios">
                <i class="fas fa-project-diagram"></i>
                <span>Gestionar Unidades de Negocio</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/servicios">
                <i class="fas fa-people-carry"></i>
                <span>Gestionar Servicios</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/clientes">
                <i class="fas fa-handshake"></i>
                <span>Gestionar Clientes</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/campañas">
                <i class="fas fa-bullhorn"></i>
                <span>Gestionar Campañas</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/contratos">
                <i class="fas fa-file-signature"></i>
                <span>Gestionar Contratos</span></a>
        </li>
    @endcan

    <hr class="sidebar-divider my-0">
    <!-- Agente-->
    @can('sidebar_agente')
        <!-- Nav Item - Horario -->
        <li class="nav-item">
            <a class="nav-link" href="/agente">
                <i class="fa-solid fa-clock"></i>
                <span>Horario</span></a>
        </li>

        <hr class="sidebar-divider my-0">
    @endcan
    @can('sidebar_supervisor')
        <!-- Supervisor-->
        <li class="nav-item">
            <a class="nav-link" href="/supervisor">
                <i class="fa-solid fa-calendar-days"></i>
                <span>Maya Horaria</span></a>
        </li>

        <!-- Numero de agentes -->
        <li class="nav-item">
            <a class="nav-link" href="/Supervisor/Agente">
                <i class="fa-solid fa-users"></i>
                <span>Numero de agentes</span></a>
        </li>

        <!-- Actualizar estado -->
        <li class="nav-item">
            <a class="nav-link" href="/Supervisor/Actualizar">
                <i class="fa-solid fa-arrows-rotate"></i>
                <span>Actualizar estado</span></a>
        </li>
        <hr class="sidebar-divider my-0">
    @endcan
    <!-- Finanzas -->

    @can('sidebar_finanzas')
        <!-- Nav Item - Horario -->
        <li class="nav-item">
            <a class="nav-link" href="/Finanzas">
                <i class="fa-solid fa-users"></i>
                <span>Agentes</span></a>
        </li>

        <!-- Nav Item - Calendario -->
        <li class="nav-item">
            <a class="nav-link" href="/Finanzas/Total-Agente">
                <i class="fa-solid fa-database"></i>
                <span>Total Agentes</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
    @endcan
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
