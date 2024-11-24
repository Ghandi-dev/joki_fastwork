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
                                <h2 class="text-dark pb-2 fw-bold">Edit Kategori</h2>
                            </div>
                            <div class="ml-md-auto py-2 py-md-0">
                                <!-- <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a> -->
                                <a href="<?=base_url('admin/kategori')?>" class="btn btn-danger btn-round">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-inner mt--5">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <form action="<?=base_url('admin/kategori/proses_edit/' . $kategori->id)?>"
                                                method="post" autocomplete="off">
                                                <div class="form-group">
                                                    <label for="">Kategori</label>
                                                    <input type="text" class="form-control" name="nama_kategori"
                                                        placeholder="Masukkan nama kategori"
                                                        value="<?=$kategori->nama_kategori?>">
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-danger"><span
                                                            class="fa fa-save"></span> &nbsp; Ubah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

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