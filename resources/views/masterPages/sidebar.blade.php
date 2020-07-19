<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{ asset('images/logo-round.png') }}" width="30" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">PUNDI.ID</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">Data 1</div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#user" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-user"></i>
            <span>User</span>
        </a>
        <div id="user" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('master-user.user') }}">User</a>
                <a class="collapse-item" href="{{ route('master-user.admin') }}">Admin</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#artikel" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-archive"></i>
            <span>Artikel</span>
        </a>
        <div id="artikel" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('master-artikel.tervefikasi') }}">Terverifikasi</a>
                <a class="collapse-item" href="{{ route('master-artikel.Belumtervefikasi') }}">Belum Terverifikasi</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kategori" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-archive"></i>
            <span>Kategori</span>
        </a>
        <div id="kategori" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Ulasan</a>
                <a class="collapse-item" href="#">Kajian</a>
                <a class="collapse-item" href="#">Kreativitas</a>
                <a class="collapse-item" href="#">Konsultasi</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#konsultasi" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-archive"></i>
            <span>Konsultasi</span>
        </a>
        <div id="konsultasi" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Pertanyaan</a>
                <a class="collapse-item" href="#">Konsultasi</a>
            </div>
        </div>
    </li>
    <div class="sidebar-heading">Data 2</div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#gambar" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-archive"></i>
            <span>Gambar</span>
        </a>
        <div id="gambar" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Header</a>
                <a class="collapse-item" href="#">Footer</a>
                <a class="collapse-item" href="#">Poster</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kontak" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-archive"></i>
            <span>Kontak</span>
        </a>
        <div id="kontak" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Whatsapp</a>
                <a class="collapse-item" href="#">Whatsapp Group</a>
                <a class="collapse-item" href="#">Email</a>
                <a class="collapse-item" href="#">Alamat</a>
                <a class="collapse-item" href="#">Twitter</a>
                <a class="collapse-item" href="#">Facebook</a>
                <a class="collapse-item" href="#">Instagram</a>
                <a class="collapse-item" href="#">Youtube</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
