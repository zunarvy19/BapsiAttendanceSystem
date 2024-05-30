<nav class="navbar navbar-expand-md navbar-dark py-3" style="background-color: #890082">
    <div class="container">
        <a class="navbar-brand bg-transparent fw-bold" href="{{ route('home.index') }}">
            <img src="/assets/img/logoBapsi4.png" alt="logo" style="height:35px">
        </a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav align-items-md-center gap-md-4 py-2 py-md-0">
                <li class="nav-item px-4 py-1 px-md-0 py-md-0">
                    <a class="nav-link {{ request()->routeIs('home.*') ? 'active fw-bold' : '' }}" aria-current="page"
                        href="{{ route('home.index') }}">Beranda</a>
                </li>
                <li class="nav-item px-4 py-1 px-md-0 py-md-0">
                    <form id="logout-form" action="{{ route('auth.logout') }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="button" id="logout-button" class="btn fw-bold btn-danger w-100">Keluar</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
document.getElementById('logout-button').addEventListener('click', function() {
    Swal.fire({
        title: 'Apakah anda yakin ingin keluar?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, keluar',
        cancelButtonText: 'Batal',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('logout-form').submit();
        }
    });
});
</script>
