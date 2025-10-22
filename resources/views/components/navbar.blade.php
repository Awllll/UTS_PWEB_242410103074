<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard', ['username'=>request()->query('username')]) }}">^^Kepoin-AniManga^^</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard', ['username'=>request()->query('username')]) }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pengelolaan', ['username'=>request()->query('username')]) }}">Pengelolaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile', ['username'=>request()->query('username')]) }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-light ms-3" href="/login">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
