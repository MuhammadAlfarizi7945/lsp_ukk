        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">

                            <div class="col-sm-6">
                                <h4 class="page-title">Data Table Kategori</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Data Tabel</a></li>
                                    <li class="breadcrumb-item active">Data Kategori</li>
                                </ol>

                            </div>
                            <div class="col-sm-6">

                                <div class="float-right d-none d-md-block">
                                    <a class="btn btn-primary" href="<?= base_url(); ?>kategori/tambah">
                                        <i class="fas fa-plus mr-2"></i> Tambah Data Kategori Baru
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Tabel Data Kategori</h4>
                                    <p class="text-muted m-b-30">DataTables has most features enabled by
                                        default, so all you need to do to use it with your own tables is to call
                                        the construction function: <code>$().DataTable();</code>.
                                    </p>

                                    <!-- alert -->
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <?php if ($this->session->flashdata()) : ?>
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    Data Distributor <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Nomor</th>
                                                <th>ID Kategori</th>
                                                <th>Nama Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($kategori as $kategori) : ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $kategori['id_kat']; ?></td>
                                                    <td><?= $kategori['nama_kat']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url(); ?>kategori/edit/<?= $kategori['id_kat']; ?>" class="btn btn-success btn-circle">
                                                            <i class="fas fa-edit"></i>
                                                        </a> |
                                                        <a href="<?= base_url(); ?>kategori/hapus/<?= $kategori['id_kat']; ?>" class="btn btn-danger btn-circle" onclick="return confirm('Are You Sure...?')">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->


                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->