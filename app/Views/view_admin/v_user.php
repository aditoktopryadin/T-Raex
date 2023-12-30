<?= $this->extend('temp_admin/index'); ?>

<?= $this->section('page-content'); ?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="s_norm" data-swal="<?= session()->get('norm_pesan'); ?>"></div>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>List User T-raex</h3>
                    <p class="text-subtitle text-muted">List User</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="index.html">Admin</a></li> -->
                            <li class="breadcrumb-item active" aria-current="page"><?= $menu ?></li>
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
                            <h4 class="card-title">List User</h4>
                        </div>
                        <div class="col-md-1">
                            <button class="badge bg-success" data-bs-toggle="modal" data-bs-target="#tambahUser" style="border: none;"><b class="bi bi-plus-lg"></b></button>
                        </div>
                        <!-- Modal Tambah User -->
                        <div class="modal fade" id="tambahUser" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5">Tambah User</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?= base_url('admin/add_user'); ?>">
                                            <div class="mb-3">
                                                <label class="form-label">Nama</label>
                                                <input type="text" name="n_user" class="form-control" placeholder="Ketikan Nama">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Username</label>
                                                <input type="text" name="uname" class="form-control" placeholder="Ketikan Username">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control" placeholder="Ketikan Password">
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
                                <th>Username</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($users as $r) {

                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $r['n_user']; ?></td>
                                    <td><?= $r['uname']; ?></td>
                                    <td class="center-item">
                                        <button class="badge bg-warning" style="border: none;" data-bs-toggle="modal" data-bs-target="#editUser<?= $r['id']; ?>"><i class="bi bi-pencil-square"></i></button>
                                        <!-- Modal Edit-->
                                        <div class="modal fade" id="editUser<?= $r['id']; ?>" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5">Edit Data User : <?= $r['uname']; ?></h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" id="editUsernya<?= $r['id']; ?>" action="<?= base_url('admin/edit_user/' . $r['id']); ?>">
                                                            <div class="mb-3">
                                                                <label class="form-label">Username</label>
                                                                <input type="text" name="uname" value="<?= $r['uname']; ?>" class="form-control" placeholder="Ketikan Username">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Nama</label>
                                                                <input type="text" name="n_user" value="<?= $r['n_user']; ?>" class="form-control" placeholder="Ketikan Nama">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Password</label>
                                                                <input type="password" name="password" class="form-control" placeholder="Ketikan Password Baru">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" form="editUsernya<?= $r['id']; ?>" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="badge bg-danger" onclick="hapusData('user',<?= $r['id'] ?>)" style="border: none;"><i class="bi bi-trash"></i></button>
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