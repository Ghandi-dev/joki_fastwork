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
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-12">
                    <div class="row">
                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Pesanan <span>| Hari Ini</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?=$pesanan_today->jumlah?></h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Pesanan <span>| 7 Hari Terakhir</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?=$pesanan_week->jumlah?></h6>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Pesanan <span>| 1 Bulan Terakhir</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?=$pesanan_month->jumlah?></h6>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Grafik Pesanan</h5>

                                    <!-- Line Chart -->
                                    <div id="reportsChart"></div>

                                    <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        // Data PHP ke JavaScript
                                        const monthlyOrders = <?php echo json_encode($monthly_orders); ?>;
                                        const dates = monthlyOrders.map(order => order.day);
                                        const totals = monthlyOrders.map(order => parseInt(order.total, 10));

                                        new ApexCharts(document.querySelector("#reportsChart"), {
                                            series: [{
                                                name: 'Orders',
                                                data: totals,
                                            }],
                                            chart: {
                                                height: 350,
                                                type: 'line',
                                                toolbar: {
                                                    show: false
                                                },
                                            },
                                            markers: {
                                                size: 5
                                            },
                                            colors: ['#4154f1'],
                                            fill: {
                                                type: "gradient",
                                                gradient: {
                                                    shadeIntensity: 1,
                                                    opacityFrom: 0.3,
                                                    opacityTo: 0.4,
                                                    stops: [0, 90, 100]
                                                }
                                            },
                                            dataLabels: {
                                                enabled: false
                                            },
                                            stroke: {
                                                curve: 'smooth',
                                                width: 2
                                            },
                                            xaxis: {
                                                type: 'datetime',
                                                categories: dates
                                            },
                                            yaxis: {
                                                labels: {
                                                    formatter: function(value) {
                                                        return value.toFixed(
                                                            0); // Menampilkan angka tanpa desimal
                                                    }
                                                }
                                            },
                                            tooltip: {
                                                x: {
                                                    format: 'dd/MM/yy'
                                                },
                                            }
                                        }).render();
                                    });
                                    </script>
                                    <!-- End Line Chart -->

                                </div>
                            </div>
                        </div><!-- End Reports -->

                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main>
    <!-- End #main -->
    <?php $this->load->view('layouts/admin/footer');?>
    <!-- Vendor JS Files -->
    <script src="<?=base_url('assets/admin/')?>vendor/jquery/jquery.3.2.1.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendor/sweet-alert/sweetalert2.all.js"></script>


    <!-- Template Main JS File -->
    <script src="<?=base_url('assets/admin/')?>js/main.js"></script>
    <?php $this->load->view('layouts/admin/sweetalert')?>
</body>

</html>