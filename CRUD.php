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
    <style>
        .navbar {
      display: flex;
      background-color: rgb(110, 184, 237);
      /* border-bottom: 1px solid var(--color-main); */
      justify-content: space-around;
      height: 60px;
      align-items: center;
      color:white;
      
    }
    .navbar .logo {
      color: rgb(114, 24, 198);
      text-decoration: none;
      font-style: bold;
      font-size: 21px;
      font-weight: 700;
    }
    .navbar ul {
        
      display: flex;
      list-style: none;
      width: 37%;
      justify-content: space-between;
      
    }

    .navbar ul li a {
      color: var(--color-main);
      text-decoration: none;
      font-size: 15px;
    }

    .navbar ul li a:hover {
      border-style: solid;
      color: white;
      background-color: rgb(110, 184, 237) ;
      border-radius: 33px;
      padding: 4px;
      transition: 0.2s;
    }
	</style>
  </head>
  <body>
  <nav class="navbar">
        <a href="#" class="logo">EventSpace Solutions</BR></a>
        <ul>
            <li><a class="aktif" href="landing.php">Home</a></li>
            <li><a href="pilihan_gedung.php">Pilihan Gedung</a></li>
            <li><a href="aboutus.php">About us</a></li>
            <li><a href="FAQ.php">FAQ</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="katalog.php">Logout</a></li>
            
        </ul>
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <div class="container mt-3">
    <div class="row">
      <h1 style="color: aliceblue"><span>DAFTAR </span> RESERVASI</h1>
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
                  <th scope="col" style="text-align: center;justify-content: center;">Keterangan</th>
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
                    <td>
                    <button type="button" class="btn btn-primary btn-sm " style="width: 80px;height: 30px;border-radius: 10px;"><a style="text-decoration: none; color:white;" href="mengubah.php?id=<?php echo $d['id_pemesanan']; ?>">EDIT</a></button>
                    <button type="button" class="btn btn-danger btn-sm "style="width: 80px;height: 30px;border-radius: 10px;"> <a style="text-decoration: none; color:white;"href="deleted.php?id=<?php echo $d['id_pemesanan']; ?>">HAPUS</a></button>
                    </td>
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
