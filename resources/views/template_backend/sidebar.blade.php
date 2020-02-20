<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class=active><a class="nav-link" href="{{ route('home') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
        </li>
        <li class="menu-header">Starter</li>
        <li class="dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-file-alt"></i> <span>Posts</span></a>
            <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('post.index') }}">List Posts</a></li>
            <li><a class="nav-link" href="{{ route('post.delete') }}">List Post Dihapus</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Profil Sekolah</span></a>
            <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('profil.sejarah') }}">Info Sejarah</a></li>
            <li><a class="nav-link" href="{{ route('profil.visi') }}">Info Visi</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-university"></i> <span>Fasilitas</span></a>
            <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('fasilitas.index') }}">Info Fasilitas</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-child"></i> <span>Kegiatan</span></a>
            <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('ekstrakulikuler.index') }}">Info Kegiatan</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-address-card"></i> <span>Kontak</span></a>
            <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('kontak') }}">Info Kontak</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>User</span></a>
            <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('user') }}">List User</a></li>
            </ul>
        </li>
    </aside>
</div>