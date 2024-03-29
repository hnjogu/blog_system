      <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{ url('/home') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Modules</div>
                            <a class="nav-link" href="{{ url('/a/dmin') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-users-cog"></i></div>
                                Admin
                            </a>
                            <a class="nav-link" href="{{ url('/logi/stics/panel') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-shipping-fast"></i></div>
                                Content
                            </a>
                            {{-- <a class="nav-link" href="{{ url('/parcel/list') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Parcel
                            </a> --}}
                            {{-- <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a> --}}
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                            @if(Auth::check())
                                <h5 class="mb-0 text-white nav-user-name">
                                    {{ Auth::user()->name }}
                                </h5>
                            @endif
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>