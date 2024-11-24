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
                                <h2 class="text-dark pb-2 fw-bold">Edit Layanan</h2>
                            </div>
                            <div class="ml-md-auto py-2 py-md-0">
                                <!-- <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a> -->
                                <a href="<?=base_url('admin/layanan')?>" class="btn btn-danger btn-round">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-inner mt--5">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-6">
                                            <form action="<?=base_url('admin/layanan/proses_edit/' . $layanan->id)?>"
                                                method="post" autocomplete="off" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="">Kategori</label>
                                                    <select name="kategori" class="form-control">
                                                        <option value="" disabled>Pilih Kategori</option>
                                                        <?php foreach ($kategori as $data) {?>
                                                        <option value="<?=$data->id?>"
                                                            <?=$data->id == $layanan->kategori_id ? "selected" : ""?>>
                                                            <?=$data->nama_kategori?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Layanan</label>
                                                    <input type="text" class="form-control" name="nama_layanan"
                                                        placeholder="Masukkan nama layanan"
                                                        value="<?=$layanan->nama_layanan?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Harga</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Rp.</span>
                                                        </div>
                                                        <input type="text" name="harga"
                                                            class="form-control currency-input"
                                                            value="<?=$layanan->harga?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Foto Lama</label><br>
                                                    <img src="<?=base_url('assets/uploads/layanan/' . $layanan->foto)?>"
                                                        alt="" style="width: 100px; height:100px">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Foto Baru</label>
                                                    <input type="hidden" name="old_foto" value="<?=$layanan->foto?>">
                                                    <input type="file" class="form-control" name="foto"
                                                        placeholder="Masukkan nama kategori">
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