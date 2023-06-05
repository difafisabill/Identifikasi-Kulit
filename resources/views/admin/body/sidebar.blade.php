<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            My<span>typeFace</span>
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
            <li class="nav-item nav-category">Identifikasi data</li>
            <li class="nav-item">
                <a href="{{ route('admin.skintype') }}" class="nav-link">
                    <i class="link-icon" data-feather="droplet"></i>
                    <span class="link-title">Jenis kulit wajah</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.symptoms') }}" class="nav-link">
                    <i class="link-icon" data-feather="activity"></i>
                    <span class="link-title">Gejala</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.rules') }}" class="nav-link">
                    <i class="link-icon" data-feather="feather"></i>
                    <span class="link-title">Aturan</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('diagnosa.kulit') }}" class="nav-link">
                    <i class="link-icon" data-feather="book-open"></i>
                    <span class="link-title">Diagnosa</span>
                </a>
            </li>


            <li class="nav-item">
                <a href="{{ route('diagnosa.hasil') }}" class="nav-link">
                    <i class="link-icon" data-feather="award"></i>
                    <span class="link-title">Hasil Diagnosa</span>
                </a>
            </li>




            <li class="nav-item nav-category">Layanan Kesehatan</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false"
                    aria-controls="general-pages">
                    <i class="link-icon" data-feather="shield"></i>
                    <span class="link-title">Dokter</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="general-pages">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.doctordata') }}" class="nav-link">Data Dokter</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.perawatan') }}" class="nav-link">Perawatan</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.sesi') }}" class="nav-link">Sesi</a>
                        </li>
                    </ul>
                </div>
            <li class="nav-item">
                <a href="{{ route('admin.clinic') }}" class="nav-link">
                    <i class="link-icon" data-feather="briefcase"></i>
                    <span class="link-title">Klinik Kecantikan</span>
                </a>
            </li>
            </li>

            <li class="nav-item nav-category">Public</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false"
                    aria-controls="general-pages">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Pasient</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="general-pages">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.pasientdata') }}" class="nav-link">User</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.temu') }}" class="nav-link">Temu Dokter</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.surat_janji') }}" class="nav-link">Surat Janji Temu Pasient</a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="nav-item nav-category">Admin</li>
            <li class="nav-item">
                <a href="{{ route('admin.data') }}" class="nav-link">
                    <i class="link-icon" data-feather="eye"></i>
                    <span class="link-title">Data Admin</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
