<div class="col-lg-3">
    <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel" style="width:250px">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link <?php echo (isset($_GET['x']) && $_GET['x'] == 'beranda') ? 'active link-light' : 'link-dark' ; ?>"
                                aria-current="page" href="beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo (isset($_GET['x']) && $_GET['x'] == 'pesanan') ? 'active link-light' : 'link-dark' ; ?>"
                                href="pesanan">Pesanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo (isset($_GET['x']) && $_GET['x'] == 'konsumen') ? 'active link-light' : 'link-dark' ; ?>"
                                href="konsumen">Konsumen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo (isset($_GET['x']) && $_GET['x'] == 'produk') ? 'active link-light' : 'link-dark' ; ?>"
                                href="produk">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo (isset($_GET['x']) && $_GET['x'] == 'laporan') ? 'active link-light' : 'link-dark' ; ?>"
                                href="laporan">Laporan</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>
</div>