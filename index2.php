<?php
session_start();
include 'eventList.php';

if (!isset($_SESSION['eventList'])) {
    $eventList = new EventList();
    $eventList->addEvent( "images/pekanbaca.jpg" , "Pekan Baca Buku", "2025-07-01", "Kegiatan membaca bersama setiap Selasa.");
    $eventList->addEvent("images/diskusi.jpg", "Diskusi Buku", "2025-07-08", "Diskusi mingguan buku populer.");
    $eventList->addEvent("images/workshop.jpeg", "Workshop Menulis", "2025-07-15", "Pelatihan menulis untuk pemula.");
    $eventList->addEvent("images/pelatihan.jpg", "Pelatihan E-Library", "2025-07-28", "Pelatihan dan sosialisasi membaca secara online.");
    $eventList->addEvent("images/kompetisi.jpg", "Kompetisi Menulis", "2025-08-10", "kompetisi pembuatan cerpen, essay, dan lainnya.");
    $_SESSION['eventList'] = serialize($eventList);
}

$eventList = unserialize($_SESSION['eventList']);

if (isset($_GET['action'])) {
    if ($_GET['action'] === 'next') {
        $event = $eventList->getNextEvent();
    } elseif ($_GET['action'] === 'prev') {
        $event = $eventList->getPreviousEvent();
    }
} else {
    $event = $eventList->getCurrentEvent();
}

$_SESSION['eventList'] = serialize($eventList);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Event - Perpustakaan IFENITCHE</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  scroll-behavior: smooth;
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
  background: linear-gradient(135deg,rgb(156, 212, 225) 0%, #667eea   100%);
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

        .main-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - 140px);
            padding: 40px 20px;
            background: linear-gradient(135deg, #f0f4f8 0%, #e9ecef 100%);
        }
        .page-title {
            text-align: center;
            margin-bottom: 40px;
            padding: 25px 35px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            border: 1px solid rgba(0, 123, 255, 0.1);
        }

        .page-title h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            background: linear-gradient(135deg, #0f3057, #008891);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .page-title p {
            font-size: 1.1rem;
            color: #6c757d;
            font-weight: 500;
        }

        .event-container {
            background: #ffffff;
            border-radius: 20px;
            padding: 40px;
            width: 100%;
            max-width: 700px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(0, 123, 255, 0.1);
            animation: fadeIn 1s ease-in;
        }

        .event-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #0f3057 0%, #008891 50%, #ff9900 100%);
        }

        .event-icon {
            text-align: center;
            margin-bottom: 25px;
        }

        .event-icon i {
            font-size: 3.5rem;
            color: #008891;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { 
                transform: scale(1);
                opacity: 1;
            }
            50% { 
                transform: scale(1.05);
                opacity: 0.8;
            }
        }

        .event-title {
            font-size: 2rem;
            font-weight: 700;
            color: #0f3057;
            text-align: center;
            margin-bottom: 20px;
            line-height: 1.3;
        }
        .event-date {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 25px;
            padding: 15px 25px;
            background: linear-gradient(135deg, #008891, #00587a);
            color: white;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            box-shadow: 0 4px 15px rgba(0, 136, 145, 0.3);
        }

        .event-description {
            font-size: 1.1rem;
            color: #495057;
            text-align: center;
            line-height: 1.7;
            margin-bottom: 35px;
            padding: 25px;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 15px;
            border-left: 4px solid #008891;
            position: relative;
        }

        .event-description::before {
            content: '📅';
            position: absolute;
            top: 15px;
            left: 20px;
            font-size: 1.5rem;
            opacity: 0.7;
        }

        .navigation {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .nav-btn {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 16px 24px;
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            position: relative;
            overflow: hidden;
        }

        .nav-btn.prev {
            background: linear-gradient(135deg, #6c757d, #495057);
        }

        .nav-btn.prev:hover {
            background: linear-gradient(135deg, #5a6268, #3d4043);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(108, 117, 125, 0.4);
        }

        .nav-btn.next {
            background: linear-gradient(135deg, #ff9900, #e08700);
        }

        .nav-btn.next:hover {
            background: linear-gradient(135deg, #e08700, #cc7a00);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 153, 0, 0.4);
        }

        .back-to-main {
            position: fixed;
            top: 50%;
            left: 30px;
            transform: translateY(-50%);
            background: linear-gradient(135deg, #0f3057, #008891);
            color: white;
            padding: 15px;
            border-radius: 50%;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(15, 48, 87, 0.3);
            transition: all 0.3s ease;
            z-index: 100;
        }

        .back-to-main:hover {
            transform: translateY(-50%) scale(1.1);
            box-shadow: 0 6px 20px rgba(15, 48, 87, 0.4);
        }

        .back-to-main i {
            font-size: 1.2rem;
        }

        .footer-full {
            background-color: #047175;
            color: #ffffff;
            padding: 40px 20px 20px;
            margin-top: 60px;
        }

        .footer-container {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-column {
            flex: 1 1 250px;
        }

        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 15px;
            color: #ffffff;
        }

        .footer-column p,
        .footer-column li,
        .footer-column a {
            font-size: 14px;
            color: #e0f7fa;
            line-height: 1.6;
            text-decoration: none;
        }

        .footer-column a:hover {
            text-decoration: underline;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 15px;
            font-size: 13px;
            color: #c0f0f5;
        }

        @keyframes slideDown {
            from { transform: translateY(-100%); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            .page-title h1 {
                font-size: 2rem;
            }
            
            .event-container {
                padding: 30px 20px;
                margin: 0 10px;
            }
            
            .navigation {
                flex-direction: column;
            }

            .back-to-main {
                position: static;
                transform: none;
                margin: 20px auto;
                display: block;
                width: fit-content;
            }

            .back-to-main:hover {
                transform: scale(1.05);
            }
        }

        .event-container.transitioning {
            transform: scale(0.98);
            opacity: 0.7;
            transition: all 0.3s ease;
        }
    </style>
</head>

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

  
    <a href="oke.php" class="back-to-main" title="Kembali ke Beranda">
        <i class="fas fa-home"></i>
    </a>

    <div class="main-content">
        <div class="page-title">
            <h1>Jadwal Event Perpustakaan</h1>
            <p>Agenda Kegiatan & Event Literasi Terkini</p>
        </div>

        <div class="event-container" id="eventContainer">
            <div class="event-icon">
                <img src="<?= htmlspecialchars($event->image) ?>" alt="Event Image" style="max-width: 300px; border-radius: 12px;">
            </div>
            
            <h2 class="event-title"><?= htmlspecialchars($event->title) ?></h2>
            
            <div class="event-date">
                <i class="fas fa-clock"></i>
                <?= htmlspecialchars($event->date) ?>
            </div>
            
            <div class="event-description">
                <?= htmlspecialchars($event->description) ?>
            </div>
            
            <div class="navigation">
                <a href="?action=prev" class="nav-btn prev" onclick="animateTransition()">
                    <i class="fas fa-chevron-left"></i>
                    Event Sebelumnya
                </a>
                <a href="?action=next" class="nav-btn next" onclick="animateTransition()">
                    Event Berikutnya
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>

    <footer class="footer-full">
        <div class="footer-container">
            <div class="footer-column">
                <h3>Perpustakaan IFENITCHE</h3>
                <p>Perpustakaan digital Teknik Informatika 1C yang menyediakan berbagai referensi, jurnal, e-book, dan materi pembelajaran untuk mendukung kegiatan akademik mahasiswa.</p>
            </div>

            <div class="footer-column">
                <h3>Navigasi</h3>
                <ul>
                    <li><a href="uas1.php">Beranda</a></li>
                    <li><a href="#">Katalog Buku</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Kontak</h3>
                <p>Email: info@ifenitche.pnc.ac.id</p>
                <p>Telepon: (0282) 123456</p>
                <p>Alamat: Jl. Perintis No.123, Cilacap</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© 2025 Perpustakaan IFENITCHE — Teknik Informatika 1C, Politeknik Negeri Cilacap</p>
        </div>
    </footer>

    <script>
        function animateTransition() {
            const container = document.getElementById('eventContainer');
            container.classList.add('transitioning');
            
            setTimeout(() => {
                container.classList.remove('transitioning');
            }, 300);
        }

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>