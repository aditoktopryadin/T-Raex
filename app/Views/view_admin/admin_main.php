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
                    <h3>Rute KRL</h3>
                    <p class="text-subtitle text-muted">List Rute</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Kereta</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Rute</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List Data Rute</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $data =
                                [
                                    'Commuter Line Basoeta',
                                    'Kalayang Bandara',
                                    'Commuter Line Bogor',
                                    'Commuter Line Cikarang',
                                    'Commuter Line Rangkasbitung',
                                    'Commuter Line Tanjung Priok',
                                    'Commuter Line Tanggerang',
                                    'Commuter Line Merak'
                                ];
                            $no = 0;
                            foreach ($data as $r) {

                            ?>
                                <tr>
                                    <td><?= $no + 1 ?></td>
                                    <td><?= $data[$no] ?></td>
                                    <td>
                                        <span class="badge bg-danger">Delete</span>
                                    </td>
                                </tr>
                            <?php $no += 1;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <?= $this->endSection();?>