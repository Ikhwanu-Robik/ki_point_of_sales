<nav id="main-nav">
    <img id="logo" src="<?= url("/assets/images/logo_alfa.png") ?>" alt="logo_alfamart">
    <ul id="nav-links">
        <li class="nav-item"><a class="nav-button" href="<?= action('auth/logout') ?>">Log out</a></li>
        <li class="nav-item"><a class="nav-button" href="<?= url("/dashboard") ?>">Dashboard</a></li>
        <li class="nav-item"><a class="nav-button" href="<?= url("/transaction") ?>">Transaksi</a></li>
        <li class="nav-item"><a class="nav-button" href="<?= url("/master") ?>">Master Data</a></li>
        <li class="nav-item"><a class="nav-button" href="<?= url("/reports") ?>">Laporan</a></li>
    </ul>
</nav>