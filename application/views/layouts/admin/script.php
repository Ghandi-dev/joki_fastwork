<!--   Core JS Files   -->
<script src="<?=base_url('assets/admin/')?>js/core/jquery.3.2.1.min.js"></script>
<script src="<?=base_url('assets/admin/')?>js/core/popper.min.js"></script>
<script src="<?=base_url('assets/admin/')?>js/core/bootstrap.min.js"></script>
<!-- jQuery UI -->
<script src="<?=base_url('assets/admin/')?>js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?=base_url('assets/admin/')?>js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<!-- Sweet Alert -->
<script src="<?=base_url('assets/admin/')?>js/plugin/sweetalert/sweetalert.min.js"></script>

<script src="<?=base_url('assets/admin/')?>js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?=base_url('assets/admin/')?>js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<!-- Datatables -->
<script src="<?=base_url('assets/admin/')?>js/plugin/datatables/datatables.min.js"></script>
<!-- Atlantis JS -->
<script src="<?=base_url('assets/admin/')?>js/atlantis.min.js"></script>

<script>
$(document).ready(function() {
    $("#basic-datatables").DataTable({});
});

var dataFromPHP = <?php echo json_encode($monthly_orders); ?>;

// Mengambil label dan data dari data yang didapatkan dari PHP
var labels = dataFromPHP.map(item => {
    // Ubah string tanggal ke objek Date
    var date = new Date(item.day);

    // Format tanggal ke "d M Y"
    return date.toLocaleDateString('id-ID', {
        day: 'numeric',
        month: 'long',
        year: 'numeric'
    });
});
var data = dataFromPHP.map(item => item.total);

var lineChart = document.getElementById('lineChart').getContext('2d');

// var gradientStroke = lineChart.createLinearGradient(500, 0, 100, 0);
// gradientStroke.addColorStop(0, '#177dff');
// gradientStroke.addColorStop(1, '#80b6f4');

// var gradientFill = lineChart.createLinearGradient(500, 0, 100, 0);
// gradientFill.addColorStop(0, "rgba(23, 125, 255, 0.7)");
// gradientFill.addColorStop(1, "rgba(128, 182, 244, 0.3)");

var gradientStroke2 = lineChart.createLinearGradient(500, 0, 100, 0);
gradientStroke2.addColorStop(0, '#00b4fc');
gradientStroke2.addColorStop(1, '#005bc5');

var gradientFill2 = lineChart.createLinearGradient(500, 0, 100, 0);
gradientFill2.addColorStop(0, "rgba(0, 180, 252, 0.7)");
gradientFill2.addColorStop(1, "rgba(0, 91, 197, 0.3)");

// var gradientStroke3 = lineChart.createLinearGradient(500, 0, 100, 0);
// gradientStroke3.addColorStop(0, '#fdaf4b');
// gradientStroke3.addColorStop(1, '#ffc478');

// var gradientFill3 = lineChart.createLinearGradient(500, 0, 100, 0);
// gradientFill3.addColorStop(0, "rgba(253, 175, 75, 0.7)");
// gradientFill3.addColorStop(1, "rgba(255, 196, 120, 0.3)");

var mylineChart = new Chart(lineChart, {
    type: 'line',
    data: {
        labels: labels,
        datasets: [{
            label: "Pesanan",
            borderColor: gradientStroke2,
            pointBackgroundColor: gradientStroke2,
            pointRadius: 0,
            backgroundColor: gradientFill2,
            legendColor: '#177dff',
            fill: true,
            borderWidth: 1,
            data: data
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: false
        },
        tooltips: {
            bodySpacing: 4,
            mode: "nearest",
            intersect: 0,
            position: "nearest",
            xPadding: 10,
            yPadding: 10,
            caretPadding: 10
        },
        layout: {
            padding: {
                left: 15,
                right: 15,
                top: 15,
                bottom: 15
            }
        },
        scales: {
            yAxes: [{
                ticks: {
                    fontColor: "rgba(0,0,0,0.5)",
                    fontStyle: "500",
                    beginAtZero: false,
                    maxTicksLimit: 5,
                    padding: 20
                },
                gridLines: {
                    drawTicks: false,
                    display: false
                }
            }],
            xAxes: [{
                gridLines: {
                    zeroLineColor: "transparent"
                },
                ticks: {
                    padding: 20,
                    fontColor: "rgba(0,0,0,0.5)",
                    fontStyle: "500"
                }
            }]
        },
        legendCallback: function(chart) {
            var text = [];
            text.push('<ul class="' + chart.id + '-legend html-legend">');
            for (var i = 0; i < chart.data.datasets.length; i++) {
                text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor +
                    '"></span>');
                if (chart.data.datasets[i].label) {
                    text.push(chart.data.datasets[i].label);
                }
                text.push('</li>');
            }
            text.push('</ul>');
            return text.join('');
        }
    }
});

var myLegendContainer = document.getElementById("myChartLegend");

// generate HTML legend
myLegendContainer.innerHTML = mylineChart.generateLegend();

// bind onClick event to all LI-tags of the legend
var legendItems = myLegendContainer.getElementsByTagName('li');
for (var i = 0; i < legendItems.length; i += 1) {
    legendItems[i].addEventListener("click", legendClickCallback, false);
}
</script>

<script>
$(document).ready(function() {
    // Menggunakan class 'currency-input' sebagai selector
    $('.currency-input').on('input', function() {
        // Mengambil nilai input
        let inputValue = $(this).val();
        // Menghapus karakter non-angka
        inputValue = inputValue.replace(/[^0-9]/g, '');
        // Format angka sebagai mata uang
        let formattedValue = formatCurrency(inputValue);
        // Memasukkan kembali nilai yang telah diformat ke dalam input
        $(this).val(formattedValue);
    });

    $('.currency-input').each(function() {
        // Mengambil nilai input dari atribut value
        let inputValue = $(this).val();
        // Memformat nilai sebagai mata uang
        let formattedValue = formatCurrency(inputValue);
        // Memasukkan kembali nilai yang telah diformat ke dalam input
        $(this).val(formattedValue);
    });
});

// Fungsi untuk format currency
function formatCurrency(value) {
    // Menggunakan metode toLocaleString() untuk format currency
    return parseInt(value).toLocaleString('id-ID');
}
</script>

<script>
$(document).ready(function() {

    // Menghentikan tautan dari navigasi langsung
    $('.btn-hapus').on('click', function(event) {
        event.preventDefault();
        var href = $(this).attr('href');

        // Menampilkan dialog konfirmasi SweetAlert
        swal({
            title: 'Yakin?',
            text: "Akan menghapus data ini secara permanen!",
            icon: 'warning',
            buttons: {
                confirm: {
                    text: 'Yes, delete it!',
                    className: 'btn btn-success'
                },
                cancel: {
                    visible: true,
                    className: 'btn btn-danger'
                }
            }
        }).then((willDelete) => {
            if (willDelete) {
                // Jika pengguna mengkonfirmasi logout, arahkan ke URL logout
                window.location.href = href;
            }
        });
    });

});
</script>

<?php
if ($this->session->flashdata('success')) {?>
<script>
var successMessage = <?php echo json_encode($this->session->flashdata('success')); ?>;
$(document).ready(function() {
    swal("Selamat!", successMessage, "success");
});
</script>
<?php } else if ($this->session->flashdata('warning')) {?>
<script>
var warningMessage = <?php echo json_encode($this->session->flashdata('warning')); ?>;
$(document).ready(function() {

    swal("Oops!", warningMessage, "warning");
});
</script>
<?php } else if ($this->session->flashdata('error')) {?>
<script>
var errorMessage = <?php echo json_encode($this->session->flashdata('error')); ?>;
$(document).ready(function() {

    swal("Gagal!", errorMessage, "error");
});
</script>
<?php }?>