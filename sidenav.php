<?php
$file_page = str_replace(['web-2', '/', '.php'], '', $_SERVER['REQUEST_URI']);
?>
<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link <?= ($file_page == 'index' || empty($file_page)) ? 'active' : '' ?>" href="index.php">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">References</div>
            <a class="nav-link <?= $file_page == 'authors' ? 'active' : '' ?>" href="authors.php">
                <div class="sb-nav-link-icon"><i class="fas fa-user-edit"></i></div>
                Authors
            </a>
            <a class="nav-link <?= $file_page == 'publishers' ? 'active' : '' ?>" href="publishers.php">
                <div class="sb-nav-link-icon"><i class="fas fa-bookmark"></i></div>
                Publishers
            </a>
            <a class="nav-link <?= $file_page == 'books' ? 'active' : '' ?>" href="books.php">
                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                Books
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Administrator
    </div>
</nav>