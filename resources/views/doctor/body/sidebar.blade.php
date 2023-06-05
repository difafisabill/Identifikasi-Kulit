
<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            My<span>typeskin</span>
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
                <a href="{{ route('doctor.dashboard')}}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Interaksi</li>
            <li class="nav-item">
                <a href="{{ route('doctor.email')}}" class="nav-link">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Email</span>

                </a>
                {{-- <div class="collapse" id="emails">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/email/inbox.html" class="nav-link">Inbox</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/email/read.html" class="nav-link">Read</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/email/compose.html" class="nav-link">Compose</a>
                        </li>
                    </ul>
                </div> --}}
            </li>

            <li class="nav-item nav-category">Aktivitas</li>
            <li class="nav-item">

                    <a href="{{ route('doctor.messages')}}" class="nav-link">
                        <i class="link-icon" data-feather="feather"></i>
                        <span class="link-title">Forum Pertanyaan</span>
                    </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button"
                    aria-expanded="false" aria-controls="advancedUI">
                    <i class="link-icon" data-feather="anchor"></i>
                    <span class="link-title">Jadwal</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="advancedUI">
                    <ul class="nav sub-menu">
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">Calendar</a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ route('doctor.schedule')}}" class="nav-link">Jadwal</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('doctor.pasientlist')}}" class="nav-link">Daftar Pasient</a>
                        </li>

                </div>
            </li>
        </ul>
    </div>
</nav>
