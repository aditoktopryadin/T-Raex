<?= $this->extend('temp_admin/index'); ?>

<?= $this->section('page-content'); ?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Layout Default</h3>
                    <p class="text-subtitle text-muted">List Jadwal</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><?= $menu ?></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $submenu ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Default Layout</h4>
                </div>
                <div class="card-body">
                    Isi data Jadwal Stasiun
                </div>
            </div>
        </section>
    </div>
    <?= $this->endSection(); ?>