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
            <h1>Layanan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Layanan</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Data Layanan</h5>
                            <a href="<?=base_url('admin/layanan/tambah')?>" class="btn btn-outline-primary btn-xl"><span
                                    class="bi bi-plus"></span>Tambah</a>
                        </div>

                        <div class="card-body">
                            <!-- Table with stripped rows -->
                            <table class="table datatable table-hover table-striped table-bordered"
                                id="basic-datatables">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col" width="5%">No</th>
                                        <th scope="col">Layanan</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
foreach ($layanan as $data) {?>
                                    <tr class="align-middle text-center">
                                        <td><?=$no++?></td>
                                        <td class="text-start"><?=$data->nama_layanan?></td>
                                        <td><?=$data->kategori?></td>
                                        <td><?="Rp " . number_format($data->harga, 0, ',', '.')?></td>
                                        <td align="center">
                                            <img src="<?=base_url('assets/uploads/layanan/' . $data->foto)?>" alt="Foto"
                                                style="width: 100px; border-radius: 20px;">
                                        </td>
                                        <td>
                                            <a href="<?=base_url('admin/layanan/edit/' . $data->id)?>"
                                                class="btn btn-warning btn-sm"><span class="bi bi-pencil-square"></span>
                                                &nbsp;
                                                Edit</a>
                                            <div class="btn btn-sm btn-danger delete" data-id="<?=$data->id?>">
                                                <span class="bi bi-trash">&nbsp;Hapus</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php }?>

                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

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
    <script src="<?=base_url('assets/admin/')?>vendor/data-table/datatables.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendor/sweet-alert/sweetalert2.all.js"></script>


    <!-- Template Main JS File -->
    <script src="<?=base_url('assets/admin/')?>js/main.js"></script>

    <!-- Sweetalert -->
    <?php $this->load->view('layouts/admin/sweetalert')?>
    <script>
    $(document).ready(function() {
        // Inisialisasi DataTable
        $("#basic-datatables").DataTable({
            // Tambahkan opsi konfigurasi di sini jika diperlukan
            paging: true, // Aktifkan pagination
            searching: true, // Aktifkan pencarian
            ordering: true, // Aktifkan pengurutan kolom
            lengthChange: true, // Aktifkan opsi perubahan jumlah data per halaman
            pageLength: 10, // Jumlah data per halaman default
            language: {
                search: "Cari:", // Mengubah teks placeholder pencarian
                lengthMenu: "Tampilkan _MENU_ entri per halaman",
                info: "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
                paginate: {
                    next: "Berikutnya",
                    previous: "Sebelumnya"
                }
            }
        });
    });
    </script>

    <script>
    $('.delete').on('click', function(e) {
        e.preventDefault();
        let id = $(this).data('id');

        Swal.fire({
            title: "Anda yakin?",
            text: "Apakah anda yakin menghapus data ini?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, hapus data ini!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: `<?php echo site_url('admin/layanan/hapus/'); ?>${id}`,
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function(response) {
                        Swal.fire({
                            title: 'Deleted!',
                            text: 'Data Berhasil dihapus',
                            icon: 'success'
                        }).then(() => {
                            // Optionally reload or update the page content
                            location.reload();
                        });
                    },
                    error: function() {
                        Swal.fire({
                            title: 'Error!',
                            text: 'There was an issue deleting the item.',
                            icon: 'error'
                        });
                    }
                });
            }
        });
    });
    </script>

</body>

</html>