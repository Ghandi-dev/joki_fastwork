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
            <h1>Laporan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Laporan</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Laporan</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mt-2">
                                <label class="col-md-2 col-form-label">Pilih Jenis Laporan</label>
                                <div class="col-md-6">
                                    <select id="jenisLaporan" class="form-select" aria-label="Default select example">
                                        <option selected="" disabled>Pilih</option>
                                        <option value="1">Harian</option>
                                        <option value="2">Mingguan</option>
                                        <option value="3">Bulanan</option>
                                        <option value="4">Custom</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label class="col-md-2 col-form-label">Rentang Tanggal</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="bi bi-calendar3"></i>
                                        </span>
                                        <input id="daterangeInput" type="text" class="form-control daterange-cus"
                                            disabled>
                                        <button id="cetakLaporanBtn" type="button"
                                            class="btn btn-sm btn-primary ml-2">Cetak Laporan</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="tableReport">
                                        <thead class="text-center">
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">No. Whatsapp</th>
                                                <th scope="col">Jumlah Star</th>
                                                <th scope="col">Jumlah Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Left side columns -->
            </div>
        </section>

    </main>
    <!-- End #main -->
    <?php $this->load->view('layouts/admin/footer');?>
    <!-- Vendor JS Files -->
    <script src="<?=base_url('assets/admin/')?>vendor/jquery/jquery.3.2.1.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendor/data-table/datatables.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendor/bootstrap-daterangepicker/moment.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendor/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Template Main JS File -->
    <script src="<?=base_url('assets/admin/')?>js/main.js"></script>

    <script>
    $('.daterange-cus').daterangepicker({
        locale: {
            format: 'YYYY-MM-DD'
        },
        drops: 'down',
        opens: 'right',

    });

    $(document).ready(function() {
        let table = $("#tableReport").DataTable({
            paging: false,
            searching: false,
            ordering: false,
            info: false,
            processing: true,
            serverSide: true,
            ajax: {
                url: '<?=base_url("admin/laporan/data")?>',
                type: 'POST',
                data: function(d) {
                    d.report_type = $('#jenisLaporan').val();
                    d.date_range = $('.daterange-cus').val();
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching data:', error);
                }
            },
            columns: [{
                    data: 'no'
                },
                {
                    data: 'created_at'
                },
                {
                    data: 'nama'
                },
                {
                    data: 'no_wa'
                },
                {
                    data: 'jumlah_star'
                },
                {
                    data: 'jumlah_harga',
                    render: function(data, type, row) {
                        // Format angka menjadi IDR (contoh: Rp 1,000,000)
                        return 'Rp ' + data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                    }
                },
            ]
        });
        $('#tableReport thead th').addClass('text-center');

        $('#jenisLaporan').on('change', function() {
            if ($(this).val() === "4") {
                $('#daterangeInput').prop('disabled', false);
            } else {
                $('#daterangeInput').prop('disabled', true).val('');
            }
            table.ajax.reload();
        });

        $('.daterange-cus').on('apply.daterangepicker', function(ev, picker) {
            let start = picker.startDate.format('YYYY-MM-DD');
            let end = picker.endDate.format('YYYY-MM-DD');
            if (new Date(start) > new Date(end)) {
                alert('Tanggal mulai tidak boleh lebih besar dari tanggal akhir.');
                $(this).val('');
            } else {
                $(this).val(`${start} - ${end}`);
                table.ajax.reload();
            }
        });

        $('.daterange-cus').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
            table.ajax.reload();
        });

        table.on('processing.dt', function(e, settings, processing) {
            if (processing) {
                $('#loadingIndicator').show();
            } else {
                $('#loadingIndicator').hide();
            }
        });
    });
    </script>

    <script>
    $('#cetakLaporanBtn').on('click', function() {
        var dateRange = '';
        var reportType = $('#jenisLaporan').val();
        if (reportType === "4") dateRange = $('.daterange-cus').val()
        var url = "<?=base_url('admin/laporan/print')?>?report_type=" + reportType + "&date_range=" + dateRange;

        // Buka URL di tab baru
        window.open(url, '_blank');
    });
    </script>

</body>

</html>