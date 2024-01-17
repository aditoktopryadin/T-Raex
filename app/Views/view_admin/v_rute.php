<?= $this->extend('temp_admin/index'); ?>

<?= $this->section('page-content'); ?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="s_norm" data-swal="<?= session()->get('norm_pesan'); ?>"></div>

    <div class=" page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Rute KRL</h3>
                    <p class="text-subtitle text-muted">List Rute</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><?= $menu ?></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $submenu ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md-11">
                            <h4 class="card-title">List Data Rute</h4>
                        </div>
                        <div class="col-md-1">
                            <button class="badge bg-success" data-bs-toggle="modal" data-bs-target="#tambahRute" style="border: none;"><b class="bi bi-plus-lg"></b></button>
                        </div>
                        <!-- Modal Tambah User -->
                        <div class="modal fade" id="tambahRute" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5">Tambah Rute</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?= base_url('admin/add_rute'); ?>">
                                            <div class="mb-3">
                                                <label class="form-label">Nama Rute</label>
                                                <input type="text" name="n_rute" class="form-control" placeholder="Ketikan Nama Rute">
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            $no = 1;
                            foreach ($rute as $r) {
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $r['n_rute'] ?></td>
                                    <td class="center-item">
                                        <button class="badge bg-warning" style="border: none;" data-bs-toggle="modal" data-bs-target="#editUser<?= $r['id']; ?>"><i class="bi bi-pencil-square"></i></button>
                                        <!-- Modal Edit-->
                                        <div class="modal fade" id="editUser<?= $r['id']; ?>" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5">Edit Data Rute : <?= $r['id']; ?></h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" id="editRute<?= $r['id']; ?>" action="<?= base_url('admin/edit_rute/' . $r['id']); ?>">
                                                            <div class="mb-3">
                                                                <label class="form-label">Nama Rute</label>
                                                                <input type="text" name="n_rute" value="<?= $r['n_rute']; ?>" class="form-control" placeholder="Ketikan Username">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" form="editRute<?= $r['id']; ?>" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="badge bg-danger" onclick="hapusData('rute',<?= $r['id'] ?>)" style="border: none;"><i class="bi bi-trash"></i></button>
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
    <?= $this->endSection(); ?>