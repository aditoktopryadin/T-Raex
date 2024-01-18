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
                    <h3>Urutan KRL</h3>
                    <p class="text-subtitle text-muted">List Urutan</p>
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
                            <h4 class="card-title">List Data Urutan</h4>
                        </div>
                        <div class="col-md-1">
                            <button class="badge bg-success" data-bs-toggle="modal" data-bs-target="#tambahUrutan" style="border: none;"><b class="bi bi-plus-lg"></b></button>
                        </div>
                        <!-- Modal Tambah Urutan -->
                        <div class="modal fade" id="tambahUrutan" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5">Tambah Urutan</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?= base_url('admin/add_urutan'); ?>">
                                            <div class="mb-3">
                                                <label class="form-label">ID Stasiun</label>
                                                <input type="text" name="id_stasiun" class="form-control" placeholder="Ketikan ID Stasiun">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">ID Rute</label>
                                                <input type="text" name="id_rute" class="form-control" placeholder="Ketikan ID Rute">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Urutan</label>
                                                <input type="text" name="urutan" class="form-control" placeholder="Ketikan Urutan">
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
                                <th>ID Stasiun</th>
                                <th>ID Rute</th>
                                <th>Urutan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($urutan as $s) {
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $s['n_stasiun'] ?></td>
                                    <td><?= $s['n_rute'] ?></td>
                                    <td><?= $s['urutan'] ?></td>
                                    <td class="center-item">
                                        <button class="badge bg-warning" style="border: none;" data-bs-toggle="modal" data-bs-target="#editUser<?= $s['id']; ?>"><i class="bi bi-pencil-square"></i></button>
                                        <!-- Modal Edit-->
                                        <div class="modal fade" id="editUser<?= $s['id']; ?>" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5">Edit Data Urutan : <?= $s['id']; ?></h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" id="editUrutan<?= $s['id']; ?>" action="<?= base_url('admin/edit_urutan/' . $s['id']); ?>">
                                                            <div class="mb-3">
                                                                <label class="form-label">ID Stasiun</label>
                                                                <input type="text" name="id_stasiun" value="<?= $s['id_stasiun']; ?>" class="form-control" placeholder="Ketikan ID Stasiun">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">ID Rute</label>
                                                                <input type="text" name="id_rute" value="<?= $s['id_rute']; ?>" class="form-control" placeholder="Ketikan ID Rute">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Urutan</label>
                                                                <input type="text" name="urutan" value="<?= $s['urutan']; ?>" class="form-control" placeholder="Ketikan Urutan">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" form="editUrutan<?= $s['id']; ?>" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="badge bg-danger" onclick="hapusData('urutan',<?= $s['id'] ?>)" style="border: none;"><i class="bi bi-trash"></i></button>
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