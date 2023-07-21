<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php  echo base_url().'assets/vendor/fontawesome-free/css/all.min.css'?>" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.css'?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url().'assets/css/sb-admin.css'?>" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="<?php echo base_url().'administrator/cekuser'?>">Toko Punggu Jaya</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="class="nav-link" href="<?php echo base_url().'administrator/cekuser'?>">
        <i class="fas fa-bars"></i>
      </button>

      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">


      <!-- Navbar -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" style="color: white;" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
            <span><?php echo $this->session->userdata('nama');?> </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>
    </nav>


    <div id="wrapper">
<?php $h=$this->session->userdata('akses'); ?>
<?php $u=$this->session->userdata('user'); ?>
<?php if($h=='1'){ ?>
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url().'administrator/cekuser'?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url().'admin/laporan'?>">
            <i class="fas fa-fw fa-clipboard"></i>
            <span>Laporan</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url().'admin/grafik'?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Grafik</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url().'admin/pengguna'?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Pengguna</span></a>
        </li>
        <?php }?>
      </ul>
      <?php if($h=='2'){ ?>
        <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url().'administrator/cekuser'?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Transaksi</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo base_url().'admin/penjualan'?>">Eceran</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url().'admin/pelanggan'?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Pelanggan</span></a>
        </li>
        </ul>
        <?php }?>
      <?php if($h=='3'){ ?>
       <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url().'administrator/cekuser'?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        </ul>
        <?php }?>
      <?php if($h=='1'){ ?>
      <div id="content-wrapper">
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <strong>Selamat Datang <?php echo $this->session->userdata('nama');?> ! </strong> Semangat Bekerja.
          </ol>
         <!-- Bagian Kalender di atas card-card lainnya -->
    <div class="container mt-4>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <!-- Posisi kalimat nama bulan menjadi di tengah kalender -->
              <h5 class="card-title text-center" id="current-month">Nama Bulan</h5>
              <table class="table table-bordered table-sm">
                <thead>
                  <tr>
                    <th>Minggu</th>
                    <th>Senin</th>
                    <th>Selasa</th>
                    <th>Rabu</th>
                    <th>Kamis</th>
                    <th>Jumat</th>
                    <th>Sabtu</th>
                  </tr>
                </thead>
                <tbody id="calendar-body">
                  <!-- Kalender akan diisi melalui JavaScript -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
        <style>
          /* style untuk menandai tanggal hari ini */
          .today {
            background-color: #007bff; /* Ganti dengan warna yang diinginkan */
            color: #fff; /* Ganti dengan warna teks yang kontras */
          }
        </style>
        <br>
          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5">Penjualan Produk</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/penjualan'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-users"></i>
                  </div>
                  <div class="mr-5">Pelanggan</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/pelanggan'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list-alt"></i>
                  </div>
                  <div class="mr-5">Stock Barang</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/barang'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-truck"></i>
                  </div>
                  <div class="mr-5">Suplier</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/suplier'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-sitemap"></i>
                  </div>
                  <div class="mr-5">Kategori</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/kategori'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">Pembelian Barang</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/pembelian'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-chart-area"></i>
                  </div>
                  <div class="mr-5">Grafik</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/grafik'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>

          <?php }?>
<?php if($h=='2'){ ?>
      <div id="content-wrapper">
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <strong>Selamat Datang <?php echo $this->session->userdata('nama');?> ! </strong> Semangat Bekerja.
          </ol>

          <!-- Icon Cards-->

          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5">Penjualan Eceran</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/penjualan'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-users"></i>
                  </div>
                  <div class="mr-5">Pelanggan</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/pelanggan'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            </div>
            <?php }?>
    <?php if($h=='3'){ ?>
      <div id="content-wrapper">
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <strong>Selamat Datang <?php echo $this->session->userdata('nama');?> ! </strong> Semangat Bekerja.
          </ol>
          <!-- Icon Cards-->
                    <div class="row">
<div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list-alt"></i>
                  </div>
                  <div class="mr-5">Stock Barang</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/barang'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-truck"></i>
                  </div>
                  <div class="mr-5">Suplier</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/suplier'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-sitemap"></i>
                  </div>
                  <div class="mr-5">Kategori</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/kategori'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">Pembelian Barang</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/pembelian'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <?php }?>

    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-danger" href="<?php echo base_url().'administrator/logout'?>">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url().'assets/vendor/jquery-easing/jquery.easing.min.js'?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url().'assets/vendor/chart.js/Chart.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/datatables/jquery.dataTables.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.js'?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url().'assets/vendor/js/sb-admin.min.js'?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url().'assets/vendor/js/demo/datatables-demo.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/js/demo/chart-area-demo.js'?>"></script>

    <script>
  // Fungsi untuk membuat kalender
  function createCalendar(year, month) {
    const calendarBody = document.getElementById('calendar-body');
    calendarBody.innerHTML = '';
    const currentMonthName = document.getElementById('current-month');

    const daysInMonth = new Date(year, month, 0).getDate();
    const firstDayIndex = new Date(year, month - 1, 1).getDay();

    const monthNames = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

    calendarBody.innerHTML = '';
    currentMonthName.innerHTML = monthNames[month - 1]; // Mengganti teks dengan nama bulan

    let day = 1;
    for (let i = 0; i < 6; i++) {
      const row = document.createElement('tr');
      for (let j = 0; j < 7; j++) {
        const cell = document.createElement('td');

        if (i === 0 && j < firstDayIndex) {
          // Sel kosong sebelum tanggal pertama di minggu pertama
          cell.innerHTML = '';
        } else if (day > daysInMonth) {
          // Sel kosong setelah tanggal terakhir di bulan
          cell.innerHTML = '';
        } else {
          cell.innerHTML = day;
          if (day === new Date().getDate() && month === new Date().getMonth() + 1 && year === new Date().getFullYear()) {
            // Tambahkan kelas 'today' untuk menandai tanggal hari ini
            cell.classList.add('today');
          }
          day++;
        }

        row.appendChild(cell);
      }
      calendarBody.appendChild(row);
    }
  }

  // Panggil fungsi untuk membuat kalender saat halaman dimuat
  document.addEventListener('DOMContentLoaded', function () {
    const now = new Date();
    const year = now.getFullYear();
    const month = now.getMonth() + 1;
    createCalendar(year, month);
  });
</script>

  </body>

</html>
