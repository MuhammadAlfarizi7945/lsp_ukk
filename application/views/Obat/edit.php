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
                        <h4 class="page-title">Edit Data Obat</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Data Tabel</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Data Obat</a></li>
                            <li class="breadcrumb-item active">Edit Data Obat</li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-right d-none d-md-block">
                            <a class="btn btn-primary" type="button" href="<?= base_url(); ?>obat"><i class="fas fa-angle-left mr-2"></i> Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Form Input Obat</h4>
                            <p class="text-muted m-b-30">
                                Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.
                            </p>


                            <form action="" method="post" id="form_advanced_validation">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Kode Obat</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="kode_obat" id="kode_obat" type="text" value="<?= $obat['kode_obat']; ?>" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">ID Distributor</label>
                                    <div class="col-sm-10">
                                        <select name="id_dist" class="form-control">
                                            <option value=""><--PILIH--></option>
                                            <?php foreach ($dist as $dist) : ?>
                                                <option value="<?= $dist['id_dist']; ?>" <?= ($dist['id_dist'] == $obat['id_dist']) ? 'selected' : ''; ?>>
                                                    <?= $dist['id_dist']; ?> | <?= $dist['nama_dist']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">ID Kategori</label>
                                    <div class="col-sm-10">
                                        <select name="id_kat" class="form-control">
                                            <option value=""><--PILIH--></option>
                                            <?php foreach ($kat as $kat) : ?>
                                                <option value="<?= $kat['id_kat']; ?>" <?= ($kat['id_kat'] == $obat['id_kat']) ? 'selected' : ''; ?>>
                                                    <?= $kat['id_kat']; ?> | <?= $kat['nama_kat']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Nama Obat</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="nama_obat" id="nama_obat" type="text" value="<?= $obat['nama_obat']; ?>" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Masa Expired</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="masa_exfire" id="masa_exfire" type="text" value="<?= $obat['masa_exfire']; ?>" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Harga</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="harga" id="harga" type="text" value="<?= $obat['masa_exfire']; ?>" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Jumlah</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="jumlah" id="jumlah" type="text" value="<?= $obat['jumlah']; ?>" />
                                    </div>
                                </div>
                                <div class="button-items">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light">Input Data Obat</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- content -->
</div>