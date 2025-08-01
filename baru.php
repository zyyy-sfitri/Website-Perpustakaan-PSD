<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perpustakaan Infinitech</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
  background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
  background-color: rgb(156, 212, 225);
  color:rgb(255, 255, 255);
  line-height: 1.7;
  min-height: 100vh;
}

/* Enhanced Navbar */
.navbar {
 background: linear-gradient(to right, #008891, rgb(156, 212, 225) );
  color: white;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 18px 40px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.15);
  position: relative;
  overflow: hidden;
}

.navbar::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
  animation: shimmer 3s infinite;
}

/* Tabel Jadwal */
table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 1.5rem;
  background-color: white;  /* Pastikan latar tabel putih */
  color: black;              /* Pastikan teks tabel hitam */
  font-size: 1rem;
  
}

th, td {
  border: 1px solid #ccc;
  padding: 10px 12px;
  text-align: left;
}

th {
  background: linear-gradient(45deg,rgb(29, 8, 132),rgb(23, 20, 82));
  color: #0f3057;
}


@keyframes shimmer {
  0% { left: -100%; }
  100% { left: 100%; }
}

.navbar a {
  color: white;
  margin-left: 20px;
  text-decoration: none;
  font-weight: 500;
  transition: all 0.3s ease;
  position: relative;
}

.navbar a:hover {
  color:rgb(255, 255, 255);
  transform: translateY(-2px);
}

.navbar span {
  font-size: 1.4rem;
  font-weight: 700;
  background: linear-gradient(45deg,rgb(29, 8, 132),rgb(23, 20, 82));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.navbar a[style*="background-color"] {
 background: linear-gradient(45deg,rgb(46, 15, 199),rgb(23, 20, 82)) !important;
  padding: 12px 25px !important;
  border-radius: 30px !important;
  font-weight: 600;
  box-shadow: 0 4px 15px rgba(255, 107, 53, 0.3);
  transition: all 0.3s ease;
}

.navbar a[style*="background-color"]:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 25px rgba(255, 107, 53, 0.4);
}


.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 25px 40px;
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(10px);
  box-shadow: 0 8px 32px rgba(0,0,0,0.1);
  position: sticky;
  top: 0;
  z-index: 100;
  border-bottom: 1px solid rgba(255,255,255,0.2);
}

.header img {
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
  transition: transform 0.3s ease;
}

.header img:hover {
  transform: scale(1.05);
}

.header nav a {
  margin-left: 30px;
  color:  #0f3057;
  font-weight: 600;
  text-decoration: none;
  font-size: 0.95rem;
  letter-spacing: 0.5px;
  position: relative;
  transition: all 0.3s ease;
}

.header nav a::after {
  content: '';
  position: absolute;
  bottom: -5px;
  left: 0;
  width: 0;
  height: 3px;
  background: linear-gradient(45deg,rgb(29, 8, 132),rgb(23, 20, 82));
  transition: width 0.3s ease;
  border-radius: 2px;
}

.header nav a:hover {
  color:  rgb(156, 212, 225);
  transform: translateY(-2px);
}

.header nav a:hover::after {
  width: 100%;
}

.footer-full {
  background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
  color: #ecf0f1;
  padding: 60px 40px 30px;
  margin-top: 80px;
  position: relative;
  overflow: hidden;
}

.footer-full::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="footerPattern" width="50" height="50" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23footerPattern)"/></svg>');
}

.footer-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 40px;
  max-width: 1400px;
  margin: 0 auto;
  position: relative;
  z-index: 2;
}

.footer-column h3 {
  font-size: 1.3rem;
  margin-bottom: 20px;
  color:rgb(255, 255, 255);
  font-weight: 700;
}

.footer-column p,
.footer-column li,
.footer-column a {
  font-size: 1rem;
  color: #bdc3c7;
  line-height: 1.8;
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer-column a:hover {
  color: #3498db;
  text-decoration: none;
}

.footer-bottom {
  text-align: center;
  margin-top: 40px;
  border-top: 2px solid rgba(255, 255, 255, 0.1);
  padding-top: 25px;
  font-size: 0.95rem;
  color: #95a5a6;
  position: relative;
  z-index: 2;
}

.card.highlight {
  background: linear-gradient(45deg,rgb(29, 8, 132),rgb(23, 20, 82));              
  color:rgb(255, 255, 255);                  
  padding: 1rem 1.5rem;
  margin-bottom: 1.5rem;
  border-radius: 12px;
  display: flex;
  align-items: center;
  gap: 1.2rem;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
  transition: transform 0.3s ease;
}

.card.highlight:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 18px rgba(0, 0, 0, 0.15);
}
@media (max-width: 768px) {
  .navbar {
    flex-direction: column;
    padding: 20px;
    text-align: center;
  }


  .navbar a {
    margin: 5px 10px;
  }

  .header {
    flex-direction: column;
    padding: 20px;
    text-align: center;
  }

  .header nav {
    margin-top: 15px;
  }

  .header nav a {
    margin: 0 10px;
    font-size: 0.9rem;
  }
}


</style>
<body>
  <nav class="navbar">
    <div>
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <span>Perpustakaan Infinitech</span>
    </div>
    <a href="#" style="background-color: #ff9900; padding: 10px 20px; border-radius: 50px;">Survei Kepuasan</a>
  </nav>

  <header class="header">
    <img src="images/logo-tic.jpeg" alt="TI 1C Logo" style="height: 40px; width: 45px;">
    <nav>
      <a href="oke.php">HOME</a>
    </nav>

    
  </header>
<?php

class PetugasNode {
    public $nama, $nip, $bagian, $foto, $next;

    public function __construct($nama, $nip, $bagian, $foto) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->bagian = $bagian;
        $this->foto = $foto;
        $this->next = null;
    }
}

class CircularLinkedList {
    public $head = null;

    public function add($nama, $nip, $bagian, $foto) {
        $newNode = new PetugasNode($nama, $nip, $bagian, $foto);
        if (!$this->head) {
            $this->head = $newNode;
            $newNode->next = $this->head;
        } else {
            $curr = $this->head;
            while ($curr->next !== $this->head) {
                $curr = $curr->next;
            }
            $curr->next = $newNode;
            $newNode->next = $this->head;
        }
    }

    public function getAll() {
        $result = [];
        if (!$this->head) return $result;

        $curr = $this->head;
        do {
            $result[] = $curr;
            $curr = $curr->next;
        } while ($curr !== $this->head);
        return $result;
    }

    public function getByIndex($index) {
        if (!$this->head) return null;
        $curr = $this->head;
        for ($i = 0; $i < $index; $i++) {
            $curr = $curr->next;
        }
        return $curr;
    }
}

// Inisialisasi data
$list = new CircularLinkedList();
$list->add("El Arcon", "240302070 ", "Keamanan", "images/el.jpeg");
$list->add("Enzy Madona", "240202071", "Keamanan", "images/enzy.jpeg");
$list->add("Muhammad Galang", "240202086", "Administrasi", "images/galang.jpeg");
$list->add("Nadjwa Naela", "240102087", "Keamanan", "images/awa.jpeg");
$list->add("Najwa Chealsea", "240102088", "Administrasi", "images/acel.jpeg");

$semua = $list->getAll();
$jumlahPetugas = count($semua);

$mingguKe = isset($_GET['minggu']) ? max(1, intval($_GET['minggu'])) : 1;
$indexUtama = ($mingguKe - 1) % $jumlahPetugas;
$petugasUtama = $list->getByIndex($indexUtama);

// Petugas harian (7 setelah utama)
$petugasHarian = [];
$curr = $petugasUtama->next;
for ($i = 0; $i < 7; $i++) {
    $petugasHarian[] = $curr;
    $curr = $curr->next;
}

// Hitung perputaran
$putaran = floor(($mingguKe - 1) / $jumlahPetugas) + 1;

// Ambil tanggal awal & akhir minggu
function getTanggalMingguan($minggu) {
    $today = new DateTime();
    $start = (clone $today)->modify('Sunday last week')->modify('+' . ($minggu - 1) * 7 . ' days');
    $end = (clone $start)->modify('+6 days');
    return ['awal' => $start->format('d M Y'), 'akhir' => $end->format('d M Y')];
}
$tanggal = getTanggalMingguan($mingguKe);
$hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jadwal Petugas Mingguan</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #eef6fb;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 800px;
      margin: 2rem auto;
      padding: 2rem;
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      color: #0f3057;
    }
    .card {
      background: #0f3057;
      color: white;
      display: flex;
      gap: 1rem;
      align-items: center;
      padding: 1rem;
      border-radius: 10px;
      margin: 1.5rem 0;
    }
    .card img {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      object-fit: cover;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 1rem;
    }
    th, td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: left;
    }
    th {
      background: #0f3057;
      color: white;
    }
    .btn-container {
      margin-top: 1.5rem;
      text-align: center;
    }
    .btn {
      background: #008891;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 8px;
      margin: 0 10px;
      display: inline-block;
    }
    .btn:hover {
      background: #005f6b;
    }
    .footer {
      text-align: center;
      margin-top: 2rem;
      font-size: 0.9rem;
      color: #666;
    }
    .lihat-petugas {
      display: block;
      text-align: center;
      margin-top: 2rem;
    }
    .lihat-petugas a {
      padding: 10px 25px;
      background: #ff9900;
      color: white;
      text-decoration: none;
      border-radius: 25px;
      font-weight: bold;
    }
    .lihat-petugas a:hover {
      background: #e08900;
    }
    @media (max-width: 600px) {
      .card {
        flex-direction: column;
        align-items: flex-start;
      }
      .card img {
        margin-bottom: 1rem;
      }
    }
    @media (max-width: 768px) {
  .navbar {
    flex-direction: column;
    padding: 20px;
    text-align: center;
  }


  .navbar a {
    margin: 5px 10px;
  }

  .header {
    flex-direction: column;
    padding: 20px;
    text-align: center;
  }

  .header nav {
    margin-top: 15px;
  }

  .header nav a {
    margin: 0 10px;
    font-size: 0.9rem;
  }

  h1 {
    font-size: 2.5rem;
    margin: 30px 0;
  }

   .btn-container {
                position: static;
                transform: none;
                margin: 20px auto;
                display: block;
                width: fit-content;
            }

            .btn-container:hover {
                transform: scale(1.05);
            }}
  </style>
</head>
<body>
  <div class="container">
    <h2>Jadwal Petugas Minggu ke-<?= $mingguKe ?></h2>
    <p style="text-align: center;"><strong><?= $tanggal['awal'] ?> - <?= $tanggal['akhir'] ?></strong></p>

    <div class="card">
      <img src="<?= $petugasUtama->foto ?>" alt="Petugas Utama">
      <div>
        <h3>Penanggung Jawab Perpustakaan Minggu ke-<?= $mingguKe ?></h3>
        <h3><?= $petugasUtama->nama ?></h3>
        <p>NIP: <?= $petugasUtama->nip ?><br>
        Bagian: <?= $petugasUtama->bagian ?></p>
      </div>
    </div>

    <h3>Petugas Per Hari:</h3>
    <table>
      <tr><th>Hari</th><th>Nama</th><th>NIP</th><th>Bagian</th></tr>
      <?php foreach ($petugasHarian as $i => $p): ?>
      <tr>
        <td><?= $hari[$i] ?></td>
        <td><?= $p->nama ?></td>
        <td><?= $p->nip ?></td>
        <td><?= $p->bagian ?></td>
      </tr>
      <?php endforeach; ?>
    </table>

    <div class="btn-container">
      <a href="?minggu=<?= max(1, $mingguKe - 1) ?>" class="btn">← Minggu Sebelumnya</a>
      <a href="?minggu=<?= $mingguKe + 1 ?>" class="btn">Minggu Berikutnya →</a>
    </div>

    <div class="footer">
      Total Perputaran: <?= $putaran ?> kali<br>
      (1 Petugas Utama / minggu + 7 Harian)
    </div>
  </div>
</body>
</html>


<footer class="footer-full">
  <div class="footer-container">
    <div class="footer-column">
      <h3>Perpustakaan Infinitech</h3>
      <p>Perpustakaan digital Teknik Informatika 1C yang menyediakan berbagai referensi, jurnal, e-book, dan materi pembelajaran untuk mendukung kegiatan akademik mahasiswa.</p>
    </div>
    <div class="footer-column">
      <h3>Navigasi</h3>
      <ul>
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Katalog Buku</a></li>
        <li><a href="#">Tentang Kami</a></li>
        <li><a href="#">Kontak</a></li>
      </ul>
    </div>
    <div class="footer-column">
      <h3>Kontak</h3>
      <p>Email: info@Infinitech.pnc.ac.id</p>
      <p>Telepon: (0282) 123456</p>
      <p>Alamat: Jl. Perintis No.123, Cilacap</p>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2025 Perpustakaan Infinitech — Teknik Informatika 1C, Politeknik Negeri Cilacap</p>
  </div>
</footer>
</body>
</html>

