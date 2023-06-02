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

    h1 {
      margin: 0;
    }

    .container {
      max-width: 960px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .event {
      margin-bottom: 20px;
    }

    .event-image {
      width: 100%;
      max-height: 300px;
      object-fit: cover;
    }

    .event-title {
      margin-top: 10px;
      font-size: 24px;
      font-weight: bold;
    }

    .event-description {
      margin-top: 10px;
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
        <li><a href="home.php">Home</a></li>
        <li><a href="#">Reservasi</a></li>
        <li><a href="pilihan.php">Pilihan Gedung</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <div class="container">
    <div class="event">
      <img src="img1.jpg" alt="Gedung A" class="event-image">
      <h2 class="event-title">Gedung A</h2>
      <p class="event-description">Kapasitas mulai dari 1000 orang dengan fasilitas lengkap dan harga menarik</p>
      <a href="form.php" class="event-button">Lihat Detail</a>
    </div>

    <div class="event">
      <img src="img2.jpg" alt="Gedung B" class="event-image">
      <h2 class="event-title">Gedung B</h2>
      <p class="event-description">Kapasitas Mulai dari 500 orang dengan fasilitas lengkap</p>
      <a href="form.php" class="event-button">Lihat Detail</a>
    </div>

    <div class="event">
      <img src="img3.jpg" alt="Gedung C" class="event-image">
      <h2 class="event-title">Gedung C</h2>
      <p class="event-description">Kapasitas mulai dari 300 orang dengan fasilitas lengkap</p>
      <a href="form.php" class="event-button">Lihat Detail</a>
    </div>
  </div>

  <footer>
    Sistem Manajemen Event <br> Kelompok 7
  </footer>
</body>
</html>
