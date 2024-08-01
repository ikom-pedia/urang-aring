<?= $this->extend('layout/templates'); ?>
<?= $this->section('content'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>
        <div class="section-body">
            <!-- <h2 class="section-title">DataTables</h2>
            <p class="section-lead">
                We use 'DataTables' made by @SpryMedia. You can check the full documentation <a href="https://datatables.net/">here</a>.
            </p> -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4><?= $title ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Divisi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //
                                        $no = 1;
                                        foreach ($vStaff as $data) {
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td class="text-center"><?= $data['no_induk'] ?></td>
                                                <td><?= $data['nama'] ?></td>
                                                <td><?= $data['unit'] ?></td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-outline-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#hapus-user<?= $data['no_induk'] ?>"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body">
        </div>
    </section>
</div>
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>

<?= $this->endSection(); ?>