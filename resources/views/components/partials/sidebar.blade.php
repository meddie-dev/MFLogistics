<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <h6 class="tw-ml-4 tw-mb-4 tw-text-gray-500">Logistics 2</h6>
        <div class="nav">
            <hr>
            <!-- Heading -->
            <div class="sb-sidenav-menu-heading">Dashboard</div>
            <!-- Dashboard -->
            <a class="nav-link collapsed" href="/dashboard">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-table-columns"></i></div>
                Dashboard
            </a>

            <!-- Services Section -->
            <div class="sb-sidenav-menu-heading">Services</div>

            @if(Auth::user()->role === 'admin')
                <!-- Admin-specific links -->
                <!-- Vendor Management -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseVendor" aria-expanded="false" aria-controls="collapseVendor">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                    Vendor Management
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseVendor" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/dashboard/vendor/registration">Add/Edit Vendors</a>
                        <a class="nav-link" href="/dashboard/vendor/performance">Track Performance</a>
                    </nav>
                </div>

                <!-- Audit Management -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAudit" aria-expanded="false" aria-controls="collapseAudit">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-file-circle-check"></i></div>
                    Audit Management
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseAudit" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/dashboard/audit/logs">View Logs</a>
                        <a class="nav-link" href="/dashboard/audit/reports">Generate Reports</a>
                        <a class="nav-link" href="/dashboard/audit/manage-users">Manage Users</a>
                    </nav>
                </div>

                <!-- Vehicle Reservation -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseVehicle" aria-expanded="false" aria-controls="collapseVehicle">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-van-shuttle"></i></div>
                    Vehicle Reservation
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseVehicle" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/dashboard/vehicle/manage">Manage Reservations</a>
                        <a class="nav-link" href="/dashboard/vehicle/history">View History</a>
                    </nav>
                </div>

                <!-- Document Management -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDocument" aria-expanded="false" aria-controls="collapseDocument">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-file"></i></div>
                    Document Management
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseDocument" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/dashboard/document/upload">Upload Documents</a>
                        <a class="nav-link" href="/dashboard/document/archive">Archive Documents</a>
                    </nav>
                </div>

                <!-- Fleet Management -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFleet" aria-expanded="false" aria-controls="collapseFleet">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-gauge-high"></i></div>
                    Fleet Management
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseFleet" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/dashboard/fleet/inventory">Manage Inventory</a>
                        <a class="nav-link" href="/dashboard/fleet/maintenance">Maintenance Schedules</a>
                    </nav>
                </div>
            @endif

            @if(Auth::user()->role === 'supplier')
                <!-- Supplier-specific links -->
                <!-- Document Management -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDocument" aria-expanded="false" aria-controls="collapseDocument">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-file"></i></div>
                    Document Management
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseDocument" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/dashboard/document/upload">Upload Documents</a>
                    </nav>
                </div>

                <!-- Vendor Management -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseVendor" aria-expanded="false" aria-controls="collapseVendor">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                    Vendor Management
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseVendor" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/dashboard/vendor/contracts">View Contracts</a>
                        <a class="nav-link" href="/dashboard/vendor/proposals">Submit Proposals</a>
                    </nav>
                </div>

                <!-- Vehicle Reservation -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseVehicle" aria-expanded="false" aria-controls="collapseVehicle">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-van-shuttle"></i></div>
                    Vehicle Reservation
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseVehicle" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/dashboard/vehicle/request">Request Reservations</a>
                        <a class="nav-link" href="/dashboard/vehicle/status">View Status</a>
                    </nav>
                </div>
            @endif

            @if(Auth::user()->role === 'constructor')
                <!-- Constructor-specific links -->
                <!-- Vehicle Reservation -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseVehicle" aria-expanded="false" aria-controls="collapseVehicle">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-van-shuttle"></i></div>
                    Vehicle Reservation
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseVehicle" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/dashboard/vehicle/request">Request Reservations</a>
                        <a class="nav-link" href="/dashboard/vehicle/status">View Status</a>
                    </nav>
                </div>

                <!-- Document Management -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDocument" aria-expanded="false" aria-controls="collapseDocument">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-file"></i></div>
                    Document Management
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseDocument" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/dashboard/document/upload">Upload Documents</a>
                    </nav>
                </div>
            @endif
        </div>
    </div>
</nav>
