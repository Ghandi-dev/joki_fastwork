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
            <h1>Edit Kategori</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="<?=base_url('admin/kategori')?>">Kategori</a></li>
                    <li class="breadcrumb-item active">Edit Kategori</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-titile">
                                <h5 class="card-title">Edit Kategori</h5>
                            </div>
                            <form class="row g-3" action="<?=base_url('admin/kategori/proses_edit/' . $kategori->id)?>"
                                method="post" autocomplete="off">
                                <div class="col-12">
                                    <label for="nama_kategori" class="form-label">Nama Kategori</label>
                                    <input type="text" class="form-control" name="nama_kategori" id="nama_kategori"
                                        placeholder="Masukkan nama kategori" autofocus
                                        value="<?=$kategori->nama_kategori?>">
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