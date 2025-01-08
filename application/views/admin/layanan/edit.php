<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layouts/admin/head')?>
</head>

<body>
    <?php $this->load->view('layouts/admin/header')?>
    <?php $this->load->view('layouts/admin/sidebar')?>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Layanan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="<?=base_url('admin/kategori')?>">Layanan</a></li>
                    <li class="breadcrumb-item active">Edit Layanan</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-titile">
                                <h5 class="card-title">Edit Layanan</h5>
                            </div>
                            <form class="row g-3" action="<?=base_url('admin/layanan/proses_edit/' . $layanan->id)?>"
                                method="post" autocomplete="off" enctype="multipart/form-data">
                                <div class="col-12">
                                    <label for="nama_kategori" class="form-label">Kategori</label>
                                    <select name="kategori" class="form-control">
                                        <option value="" disabled>Pilih Kategori</option>
                                        <?php foreach ($kategori as $data) {?>
                                        <option value="<?=$data->id?>"
                                            <?=$data->id == $layanan->kategori_id ? "selected" : ""?>>
                                            <?=$data->nama_kategori?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="nama_layanan" class="form-label">Nama Layanan</label>
                                    <input type="text" class="form-control" name="nama_layanan" id="nama_layanan"
                                        placeholder="Masukkan nama kategori" autofocus
                                        value="<?=$layanan->nama_layanan?>">
                                </div>
                                <div class="col-12">
                                    <label for="harga" class="form-label">Harga</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                        <input type="text" class="form-control" name="harga" id="harga"
                                            placeholder="Masukkan harga" autofocus value="<?=$layanan->harga?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto Lama</label><br>
                                    <img src="<?=base_url('assets/uploads/layanan/' . $layanan->foto)?>" alt=""
                                        style="width: 100px; height:100px">
                                </div>
                                <div class="col-12">
                                    <label for="foto" class="form-label">foto</label>
                                    <input type="hidden" name="old_foto" value="<?=$layanan->foto?>">
                                    <input class="form-control" type="file" id="formFile" name="foto">
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->
    <?php $this->load->view('layouts/admin/footer');?>
    <!-- Vendor JS Files -->
    <script src="<?=base_url('assets/admin/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?=base_url('assets/admin/')?>js/main.js"></script>



</body>

</html>