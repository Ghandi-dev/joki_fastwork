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
                                <h2 class="text-dark pb-2 fw-bold">Kategori</h2>
                            </div>
                            <div class="ml-md-auto py-2 py-md-0">
                                <!-- <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a> -->
                                <a href="<?=base_url('admin/kategori/tambah')?>" class="btn btn-danger btn-round">Tambah
                                    Kategori</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-inner mt--5">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Kategori</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped" id="basic-datatables">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
foreach ($kategori as $data) {?>
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td><?=$data->nama_kategori?></td>
                                                <td>
                                                    <a href="<?=base_url('admin/kategori/edit/' . $data->id)?>"
                                                        class="btn btn-sm"><span class="fa fa-edit"></span> &nbsp;
                                                        Edit</a>
                                                    <a href="<?=base_url('admin/kategori/hapus/' . $data->id)?>"
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