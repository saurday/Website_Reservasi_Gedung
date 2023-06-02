<!DOCTYPE html>
<html>
<head>
  <title>Event Organizer - Home</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      padding: 20px;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header .logo {
      font-size: 24px;
      font-weight: bold;
    }

    header ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    header ul li {
      margin-left: 10px;
    }

    header ul li a {
      color: #fff;
      text-decoration: none;
      padding: 10px;
    }

    header ul li a:hover {
      background-color: #555;
    }

    header .logo {
      font-size: 24px;
      font-weight: bold;
    }

    .container {
      max-width: 960px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .content {
      display: flex;
      align-items: center;
    }

    .content-image {
      width: 50%;
      max-height: 400px;
      object-fit: cover;
    }

    .content-text {
      width: 50%;
      padding-left: 20px;
    }

    footer {
      background-color: #333;
      padding: 10px;
      color: #fff;
      text-align: center;
    }
  </style>
</head>
<body>
<header>
  <div class="logo">Sistem Manajemen Event</div>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Reservasi</a></li>
        <li><a href="pilihan.php">Pilihan Gedung</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <div class="container">
    <div class="content">
      <img src="img1.jpg" alt="Event Organizer" class="content-image">
      <div class="content-text">
        <h2>Selamat Datang di Sistem Manajemen Event</h2>
        <p>Disini Anda dapat menemukan segala jenis kebutuhan event anda mulai dari event berskala kecil hingga event berskala besar</p>
        <p>Temukan pilihan gedung dengan fasilitas yang Anda inginkan agar membuat event yang Anda gelar dapat berjalan dengan penuh kesan. Temukan juga harga yang sesuai dengan yang Anda inginkan, apabila ada yang ingin ditanyakan Anda dapat menghubungi kami di menu contact.</p>
      </div>
    </div>
  </div>

  <footer>
    &copy; 2023 Event Organizer. All rights reserved.
  </footer>
</body>
</html>
