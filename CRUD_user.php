<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Daftar Reservasi</title>
  </head>
  <body>
  <nav class="navbar fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><span>EventSpace Solutions</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
        aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end samping " tabindex="-1" id="offcanvasDarkNavbar"
        aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
            Praktikum PBW A
          </h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Daftar Mahasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Informasi Tugas</a>
            </li>
          </ul>
          <div>
            <button class="btn btn-danger" type="submit">
              <a href="Login.html"><i data-feather="log-out"></i> Logout</a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </nav>


    <div class="container mt-3">
    <div class="row">
      <h1 style="color: aliceblue"><span>DAFTAR </span> MAHASISWA</h1>
      <h1 style="color: aliceblue">
        PRAKTIKUM PEMROGRAMAN BERBASIS WEB
      </h1>
      <div class="col">
        <div class="card " >
            
           
            <div class="p">
                <button type="button" class="btn btn-success btn-sm" style="width: 200px;height: 40px;margin-top: 10px;margin-bottom: 10px;"><a style="text-decoration: none; color:white;" href="tambahh.php">Tambah Data</a></button>
                <!-- <button type="button" class="btn btn-danger btn-sm"style="width: 200px;height: 40px;margin-top: 10px;margin-bottom: 10px;">Cetak Laporan  <i data-feather="file-text"></i></button> -->
                <button type="button" class="btn btn-danger btn-sm"style="width: 200px;height: 40px;margin-top: 10px;margin-bottom: 10px;" onclick="cetakLaporan()"> <i data-feather="file-text"></i> Cetak Laporan</button>
              <form class="d-flex" role="search" style="float: right;margin-top: 10px;">
                <input class="form-control me-2" type="search" placeholder="Cari Berdasarkan Nama" aria-label="Search" style="background-color: rgb(228, 225, 225);" >
                <button class="btn btn-outline-light" type="submit" style="background-color:rgb(120, 169, 225) ;"><i data-feather="search"></i></button>
              </form>
            </div>
            <table class="table table-striped table-hover" border="1px" >
                <tr style="background-color: rgb(0, 174, 255);">
                  <th scope="col">ID</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Tanggal Pemesanan</th>
                  <th scope="col">Tanggal Awal Sewa</th>
                  <th scope="col">Tanggal Akhir Sewa</th>
                  <th scope="col">Gedung</th>
                </tr>
                <?php 
                include 'conect.php';
                $no = 1;
                $data = mysqli_query($conect,"SELECT * FROM event");
                while($d = mysqli_fetch_array($data)){
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_cust']; ?></td>
                    <td><?php echo $d['tgl_pemesanan']; ?></td>
                    <td><?php echo $d['tgl_awalsewa']; ?></td>
                    <td><?php echo $d['tgl_akhirsewa']; ?></td>
                    <td><?php echo $d['pilihan_gedung']; ?></td>
                  </tr>
                  <?php 
                }
                ?>
              </table>
            </div>
          </div>
        </div>
    </div>
</div>
    <script>
      feather.replace();
    </script>

    <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script> -->
    <script>
function cetakLaporan() {
    window.print();
}
</script>
  </body>
</html>
