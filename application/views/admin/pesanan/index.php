<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('layouts/admin/header')?>

<body>
    <div class="wrapper">
        <?php $this->load->view('layouts/admin/navbar')?>

        <?php $this->load->view('layouts/admin/sidebar')?>

        <!-- CONTENT -->
        <div class="main-panel">

            <!-- CONTENT -->
            <div class="content">
                <div class="panel-header bg-light">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-dark pb-2 fw-bold">Pesanan</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-inner mt--5">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Pesanan</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped" id="basic-datatables">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal Order</th>
                                                <th>Nama</th>
                                                <th>No. WhatsApp</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
foreach ($pesanan as $data) {?>
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td><?=date("d M, Y", strtotime($data->created_at))?></td>
                                                <td><?=$data->nama?></td>
                                                <td><?=$data->no_wa?></td>
                                                <td>
                                                    <a href="<?=base_url('admin/pesanan/hapus/' . $data->id)?>"
                                                        class="btn btn-sm btn-hapus"><span class="fa fa-trash"></span>
                                                        &nbsp; Hapus</a>
                                                </td>
                                            </tr>
                                            <?php }?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CONTENT -->

            <?php $this->load->view('layouts/admin/footer')?>
        </div>

    </div>

    <?php $this->load->view('layouts/admin/script')?>
</body>

</html>