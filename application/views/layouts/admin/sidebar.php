<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?=$this->uri->segment(2) == "dashboard" ? "" : "collapsed"?>"
                href="<?=base_url('admin/dashboard')?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link <?=$this->uri->segment(2) == "kategori" ? "" : "collapsed"?>"
                href="<?=base_url('admin/kategori')?>">
                <i class="bi bi-shop"></i>
                <span>Kategori</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link <?=$this->uri->segment(2) == "layanan" ? "" : "collapsed"?>"
                href="<?=base_url('admin/layanan')?>">
                <i class="bi bi-x-diamond-fill"></i>
                <span>Jenis Layanan</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link <?=$this->uri->segment(2) == "pesanan" ? "" : "collapsed"?>"
                href="<?=base_url('admin/pesanan')?>">
                <i class="bi bi-cart"></i>
                <span>Pesanan</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link <?=$this->uri->segment(2) == "laporan" ? "" : "collapsed"?>"
                href="<?=base_url('admin/laporan')?>">
                <i class="bi bi-file-earmark-check-fill"></i>
                <span>Laporan</span>
            </a>
        </li><!-- End Contact Page Nav -->

    </ul>

</aside><!-- End Sidebar-->