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
                                                <label class="form-label">Nama Stasiun</label>
                                                   <select class="form-select form-select-sm" name ="stasiun">
                                                       <option selected>Pilih Nama Stasiun</option>
                                                       <!--Looping mengambil data dari n_stasiun-->
                                                       <?php foreach ($stasiun as $row): ?>
                                                            <option value="<?= $row['id']; ?>"><?= $row['n_stasiun']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                <!-- <input type="text" name="id_stasiun" class="form-control" placeholder="Ketikan ID Stasiun"> -->
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Nama Rute</label>
                                                <select class="form-select form-select-sm" name ="rute">
                                                       <option selected>Pilih Nama Rute</option>
                                                       <!--Looping mengambil data dari n_rute-->
                                                       <?php foreach ($rute as $row): ?>
                                                            <option value="<?= $row['id']; ?>"><?= $row['n_rute']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                <!-- <input type="text" name="id_rute" class="form-control" placeholder="Ketikan ID Rute"> -->
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Urutan</label>
                                                <input type="text" name="urutan" class="form-control" placeholder="Masukkan Urutan">
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
                <!-- Bagian Pembuatan View Table Urutan -->
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Stasiun</th>
                                <th>Nama Rute</th>
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
                                    <button class="badge bg-warning" style="border: none;" data-bs-toggle="modal" data-bs-target="#editUrutan<?= $s['id']; ?>"><i class="bi bi-pencil-square"></i></button>
                                        <!-- Modal Edit-->
                                        <div class="modal fade" id="editUrutan<?= $s['id']; ?>" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5">Edit Data Urutan : <?= $s['urutan']; ?></h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" id="formEditUrutan<?= $s['id']; ?>" action="<?= base_url('admin/edit_urutan/' . $s['id']); ?>">
                                                            <div class="mb-3">
                                                                <label class="form-label">No. Urutan</label>
                                                                <input type="text" name="urutan" value="<?= $s['urutan']; ?>" class="form-control" placeholder="Masukkan Urutan">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" form="formEditUrutan<?= $s['id']; ?>" class="btn btn-primary">Simpan</button>
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