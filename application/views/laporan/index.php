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
                                <h4 class="page-title">Data Table All Laporan</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Data Laporan</a></li>
                                    <li class="breadcrumb-item active">Data Tabel Laporan</li>
                                </ol>

                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Tabel Data Distributor</h4>
                                    <p class="text-muted m-b-30">DataTables has most features enabled by
                                        default, so all you need to do to use it with your own tables is to call
                                        the construction function: <code>$().DataTable();</code>.
                                    </p>

                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Nomor</th>
                                                <th>Kode Obat</th>
                                                <th>Nama Distributor</th>
                                                <th>Nama Kategori</th>
                                                <th>Alamat</th>
                                                <th>Nomor Telepon</th>
                                                <th>Nama Obat</th>
                                                <th>Masa Exfire</th>
                                                <th>harga</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($laporan as $laporan) : ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $laporan['kode_obat']; ?></td>
                                                    <td><?= $laporan['dist']; ?></td>
                                                    <td><?= $laporan['nama_kat']; ?></td>
                                                    <td><?= $laporan['alamat']; ?></td>
                                                    <td><?= $laporan['no_telp']; ?></td>
                                                    <td><?= $laporan['nama_obat']; ?></td>
                                                    <td><?= $laporan['masa_exfire']; ?></td>
                                                    <td><?= $laporan['harga']; ?></td>
                                                    <td><?= $laporan['jumlah']; ?></td>
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