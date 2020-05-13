<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"></h1> -->

    <?php if ($this->session->userdata('hak_akses') == 1) { ?>
        <div class="float-right">
            <a href="https://carto.com/login" class="btn btn-info btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-fw fa-edit"></i>
                </span>
                <span class="text">Ubah Peta</span>
            </a>
        </div>
    <?php } ?>

    <iframe width="100%" height="520" frameborder="0" src="https://korneliussb.carto.com/builder/7138dec4-d14a-4530-9579-62e740c0bc86/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->