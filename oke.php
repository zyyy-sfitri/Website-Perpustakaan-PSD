<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perpustakaan infinitech</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

/* Enhanced Header */
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

/* Enhanced Main Title */
h1 {
  text-align: center;
  margin: 50px 0;
  font-size: 3.2rem;
  font-weight: 800;
  background: linear-gradient(135deg, #667eea 0%, #0f3057 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  text-shadow: 0 4px 8px rgba(0,0,0,0.1);
  position: relative;
}

h1::after {
  content: '';
  position: absolute;
  bottom: -15px;
  left: 50%;
  transform: translateX(-50%);
  width: 120px;
  height: 4px;
  background: linear-gradient(135deg, #667eea 0%, #0f3057 100%);
  border-radius: 2px;
}


.main {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 80px 50px;
  background: linear-gradient(to right , #008891, rgb(156, 212, 225));
  color: white;
  position: relative;
  overflow: hidden;
  border-radius: 0 0 50px 50px;
  margin-bottom: 30px;
}

.main::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="20" cy="20" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="80" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="40" cy="60" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
  opacity: 0.3;
}

.main > * {
  position: relative;
  z-index: 2;
}

.main p {
  max-width: 600px;
  margin-right: 40px;
  font-size: 1.2rem;
  line-height: 1.8;
  font-weight: 300;
}

.main a {
  background: linear-gradient(45deg,rgb(29, 8, 132),rgb(23, 20, 82));
  padding: 15px 30px;
  color: white;
  border-radius: 30px;
  text-decoration: none;
  font-weight: 600;
  font-size: 1.1rem;
  transition: all 0.3s ease;
  box-shadow: 0 6px 20px rgba(255, 107, 53, 0.3);
  display: inline-block;
}

.main a:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 30px rgba(255, 107, 53, 0.4);
}

.main img {
  border-radius: 20px;
  box-shadow: 0 15px 35px rgba(0,0,0,0.2);
  transition: transform 0.3s ease;
}

.main img:hover {
  transform: scale(1.02) rotate(1deg);
}

/* Enhanced Choice Section */
.pilihan {
  display: flex;
  justify-content: space-around;
  padding: 50px 30px;
  background-color: #008891;
  margin-bottom: 40px;
  border-radius: 50px 50px 0 0;
}

.pilih1 {
  text-align: center;
  color: white;
  padding: 30px;
  border-radius: 20px;
  background: rgba(255,255,255,0.1);
  backdrop-filter: blur(10px);
  transition: all 0.3s ease;
  border: 1px solid rgba(255,255,255,0.2);
}

.pilih1:hover {
  transform: translateY(-10px);
  background: rgba(255,255,255,0.2);
  box-shadow: 0 15px 35px rgba(0,0,0,0.1);
}

.pilih1 i {
  font-size: 3em;
  margin-bottom: 15px;
  color: #ffd700;
  filter: drop-shadow(0 4px 8px rgba(0,0,0,0.2));
}

.pilih1 p {
  font-weight: 600;
  font-size: 1.1rem;
  letter-spacing: 1px;
}

.perpustakaan-section {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  gap: 60px;
  padding: 80px 50px;
  background: linear-gradient(to right, rgb(156, 212, 225), #008891);
  color:rgb(255, 255, 255);
  border-radius: 30px;
  margin: 40px 20px;
  box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

.perpustakaan-section img.perpus-img {
  max-width: 500px;
  height: 600px;
  border-radius: 20px;
  box-shadow: 0 15px 35px rgba(0,0,0,0.15);
  transition: transform 0.3s ease;
}

.perpustakaan-section img.perpus-img:hover {
  transform: scale(1.02);
}

.perpus-text {
  flex: 1;
}

.perpus-text h2 {
  font-size: 30px;
  font-weight: 700;
  margin-bottom: 25px;
  color:rgb(255, 255, 255);
}

.perpus-text p {
  font-size: 20px;
  line-height: 1.8;
  margin-bottom: 20px;
}

.perpus-text li {
  margin: 15px 0;
  padding-left: 20px;
  position: relative;
  font-size: 1.05rem;
}

.perpus-text li::before {
  position: absolute;
  left: 0;
  color: #27ae60;
  font-weight: bold;
  font-size: 1.2rem;
}

 .container {
      max-width: 1200px;
      margin: 2rem auto 3rem;
      padding: 0 1rem;
      display: flex;
      flex-wrap: wrap;
      gap: 3rem;
      justify-content: space-between;
    }

    .info-articles {
      flex: 1 1 65%;
      min-width: 280px;
    }

    .articles-list {
      display: flex;
      gap: 1.5rem;
      flex-wrap: wrap;
    }

    .article-card {
      background: #fff;
      border-radius: 12px;
      width: calc((100% / 3) - 1rem);
      box-shadow: 0 0 12px rgb(110 110 110 / 0.1);
      display: flex;
      flex-direction: column;
      overflow: hidden;
      position: relative;
    }

    .article-image-container {
      position: relative;
      overflow: hidden;
      height: 220px;
      border-bottom: 1px solid #eee;
      border-radius: 12px 12px 0 0;
    }

    .article-image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      border-radius: 12px 12px 0 0;
    }

    .date-badge {
      position: absolute;
      top: 10px;
      left: 10px;
      background: #fff;
      border-radius: 12px 0 12px 12px;
      padding: 0.5rem 0.75rem;
      box-shadow: 1px 4px 6px rgb(0 0 0 / 0.1);
      font-weight: 600;
      font-size: 0.8rem;
      color: #333;
      width: 55px;
      text-align: center;
    }

    .date-badge b {
      display: block;
      font-size: 1.1rem;
      margin-bottom: 0.15rem;
    }

    .article-content {
      padding: 0.9rem 1rem 1.4rem;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }

    .article-meta {
      font-size: 0.9rem;
      color: #6c7787;
      margin-bottom: 0.3rem;
    }

    .article-title {
      font-weight: 700;
      font-size: 1.05rem;
      margin-bottom: 0.6rem;
      color: #1a202c;
    }

    .article-desc {
      font-weight: 400;
      font-size: 0.92rem;
      color: #546e7a;
      flex-grow: 1;
    }

    .read-more-btn {
      margin-top: 1rem;
      align-self: flex-start;
      padding: 0.4rem 1rem;
      border: 1px solid #ccc;
      border-radius: 18px;
      background: transparent;
      font-weight: 600;
      font-size: 0.9rem;
      color:rgb(0, 0, 0);
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 0.3rem;
    }

    .read-more-btn:hover {
      border-color: #16697a;
      color: #16697a;
    }

    .arrow-right {
      font-size: 1.1rem;
    }

    .agenda-events {
      flex: 1 1 30%;
      min-width: 280px;
    }

    .event-list {
      background: #fff;
      border-radius: 12px;
      padding: 1rem;
      box-shadow: 0 0 14px rgb(110 110 110 / 0.08);
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .event-item {
      display: flex;
      gap: 12px;
      padding: 0.7rem 0.5rem;
      border-radius: 12px;
      background:rgb(223, 231, 232);
      align-items: flex-start;
    }

    .event-thumb {
      width: 70px;
      height: 70px;
      flex-shrink: 0;
      overflow: hidden;
      border-radius: 12px;
    }

    .event-thumb img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .event-content {
      flex: 1;
    }

    .event-title {
      font-weight: 700;
      font-size: 1rem;
      margin-bottom: 0.2rem;
      color: #222;
    }

    .event-category {
      font-size: 0.85rem;
      font-style: italic;
      color:rgb(0, 0, 0);
      margin-bottom: 0.3rem;
    }

    .see-all-btn-container {
      margin-top: 2rem;
      text-align: center;
    }

    .see-all-btn {
      background: linear-gradient(45deg,rgb(29, 8, 132),rgb(23, 20, 82));
      border: none;
      border-radius: 12px;
      color: white;
      padding: 0.7rem 2.5rem;
      font-weight: 700;
      font-size: 1.05rem;
      cursor: pointer;
      width: 100%;
      max-width: 280px;
      padding-bottom:20px
     
    }

    .see-all-btn:hover {
      background-color: #0f4c59;
    }

/* Enhanced Book Gallery */
.book{
  background-color:rgb(156, 212, 225);
  padding-top:15px;
  padding-bottom:15px;
}

.book-gallery {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
  gap: 30px;
  padding: 0 40px;
  margin-bottom: 80px;
  
}

.book-card {
  background: white;
  border-radius: 20px;
  padding: 20px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.1);
  transition: all 0.3s ease;
  text-align: center;
  border: 1px solid rgba(255,255,255,0.2);
}

.book-card:hover {
  transform: translateY(-15px) scale(1.02);
  box-shadow: 0 25px 50px rgba(0,0,0,0.15);
}

.book-card img {
  width: 100%;
  height: 280px;
  object-fit: cover;
  border-radius: 15px;
  margin-bottom: 15px;
  box-shadow: 0 8px 25px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}

.book-card:hover img {
  transform: scale(1.05);
}

.title {
  font-size: 1rem;
  font-weight: 600;
  margin: 15px 0;
  color: #2c3e50;
  line-height: 1.4;
  height: auto;
  min-height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.category {
  display: inline-block;
  background: linear-gradient(45deg,rgb(29, 8, 132),rgb(23, 20, 82));
  color: white;
  padding: 8px 16px;
  border-radius: 25px;
  font-size: 0.85rem;
  font-weight: 600;
  box-shadow: 0 4px 15px rgba(79, 172, 254, 0.3);
}

.category:hover {
    background-color: #008891; 
    color: white;
    transition: background-color 0.3s ease;
}

.staff-section {
  max-width: 1400px;
  margin: 80px auto; 
  padding: 60px 20px; 
  background: linear-gradient(to right, rgb(66, 160, 181), #008891);
  border-radius: 30px;
  box-shadow: 0 20px 60px rgba(0,0,0,0.1);
  border: 1px solid rgba(255,255,255,0.2);
  
  display: flex;             
  flex-direction: column;  
  justify-content: center; 
  align-items: center;     
  text-align: center;  
}

.staff-section h1 {
  font-size: 2.8rem;
  border-bottom: 4px solid rgb(13, 28, 112);
  padding-bottom: 20px;
  margin-bottom: 40px;
  background: linear-gradient(45deg,rgb(29, 8, 132),rgb(23, 20, 82));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.staff-section h3 {
  font-size: 1.8rem;
  margin: 50px 0 30px;
  color:rgb(255, 255, 255);
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
  color:rgb(241, 241, 241);
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
  color:rgb(255, 255, 255);
  text-decoration: none;
}

.footer-bottom {
  text-align: center;
  margin-top: 40px;
  border-top: 2px solid rgba(255, 255, 255, 0.1);
  padding-top: 25px;
  font-size: 0.95rem;
  color:rgb(255, 255, 255);
  position: relative;
  z-index: 2;
}

@media (max-width: 1200px) {
  .main {
    flex-direction: column;
    padding: 60px 30px;
    text-align: center;
  }

  .main p {
    margin-right: 0;
    margin-bottom: 30px;
  }

  .perpustakaan-section {
    flex-direction: column;
    padding: 60px 30px;
    text-align: center;
  }

  .perpustakaan-section img.perpus-img {
  display: block;
  margin: 0 auto 30px auto;
  max-width: 100%;
  height: auto;
}


  .container {
    flex-direction: column;
    gap: 40px;
  }

  .book-gallery {
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 25px;
    padding: 0 20px;
  }
    .staff-section {
    display: block;
  margin: 0 auto 30px auto;
  max-width: 100%;
  height: auto;
    
  }
}

.article-image-container{
          background-color: white;
          border-radius: 12px;
          box-shadow: 0 4px 10px rgba(0,0,0,0.1); /* default shadow */
          transition: all 0.3s ease; /* biar lembut */
          }

        .article-image-container:hover {
          transform: translateY(-10px); /* naik dikit */
          box-shadow: 0 12px 25px rgba(0,0,0,0.2); /* bayangan besar */
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

  .main {
    padding: 40px 20px;
  }

  .pilihan {
    flex-direction: column;
    gap: 20px;
    padding: 40px 20px;
  }

  .perpustakaan-section {
    padding: 40px 20px;
    margin: 20px 10px;
  }

  .perpustakaan-section img.perpus-img {
    max-width: 100%;
    height: 250px;
  }

  .container {
    padding: 0 15px;
  }

  .articles-list {
    grid-template-columns: 1fr;
  }

  .book-gallery {
    grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
    gap: 20px;
    padding: 0 15px;
  }

  .staff-section {
    margin: 40px 10px;
    padding: 40px 20px;
  }

  .jadwal th, .jadwal td {
    padding: 12px 8px;
    font-size: 0.9rem;
  }

  .list-petugas {
    grid-template-columns: 1fr;
  }

  .footer-container {
    grid-template-columns: 1fr;
    text-align: center;
  }
}

/* Enhanced Animations */
@keyframes slideDown {
  from { 
    transform: translateY(-100%); 
    opacity: 0; 
  }
  to { 
    transform: translateY(0); 
    opacity: 1; 
  }
}

@keyframes fadeIn {
  from { 
    opacity: 0; 
    transform: translateY(30px); 
  }
  to { 
    opacity: 1; 
    transform: translateY(0); 
  }
}

@keyframes fadeInUp {
  from { 
    opacity: 0; 
    transform: translateY(20px); 
  }
  to { 
    opacity: 1; 
    transform: translateY(0); 
  }
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
      <a href="#menu">HOME</a>
      <a href="#tentang">TENTANG</a>
      <a href="#artikel">ARTIKEL</a>
      <a href="#buku">BUKU</a>
      <a href="#petugas">PETUGAS</a>
      
      
    </nav>
  </header>

  <h1>Perpustakaan Utama TI 1C</h1><br><br>

  <section id="menu" class="main">
    <p>
      "Jelajahi dunia pengetahuan tanpa batas bersama Perpustakaan infinitech – tempat di mana informasi, inspirasi, dan inovasi berkumpul dalam satu ruang yang mudah diakses dan ramah untuk semua civitas TI 1C."<br><br>
      <a href="#tentang">Selengkapnya</a>
    </p>
    <img src="images/perpus.jpg" alt="Perpustakaan TI 1C" style="width: 50%; border-radius: 10px;">
  </section>

  <section class="pilihan">
    <div class="pilih1">
      <i class="fas fa-book-reader"></i>
      <p>AKSES PUBLIK</p>
    </div>
    <div class="pilih1">
      <i class="fas fa-book-open"></i>
      <p>KATALOG INDUK</p>
    </div>
  </section>

  <section id="tentang" class="perpustakaan-section">
    <img src="images/tentang.jpg" alt="Gambar Perpustakaan" class="perpus-img">
    
    <div class="perpus-text">
      <h2>Tentang Perpustakaan Infinitech</h2>
      <p><strong>Visi :</strong> Menjadikan Perpustakaan infinitech sebagai perpustakaan unggulan untuk repository terbitan teknologi informasi dan pusat jejaring perpustakaan digital.</p><br>
      <p><strong>Misi :</strong></p>
        <li>Melestarikan karya cetak dan karya rekam hasil terbitan bidang teknologi informasi.</li>
        <li>Membangun dan mengembangkan perpustakaan terpadu berbasis teknologi informasi.</li>
        <li>Membina dan membangun jejaring dengan perpustakaan di lingkungan pendidikan tinggi.</li>
        <li>Menyelenggarakan layanan perpustakaan digital yang berkualitas.</li>
    </div>
  </section>

  <main class="container" role="main">
    <section id="artikel" class="info-articles" aria-labelledby="info-title">
      <h2 id="info-title" class="section-title" style="color: rgb(23, 20, 82)">Informasi & Artikel</h2><br>

      <div class="articles-list">
        <!-- Card 1 -->
        <article class="article-card" aria-label="Artikel Teknologi Perpustakaan">
          <div class="article-image-container">
            <img src="images/perpustakaan.jpg" alt="Teknologi perpustakaan digital" />
            <div class="date-badge" aria-label="Tanggal 13 Februari 2025">
              <b>13</b>Feb 2025
            </div>
          </div>
          <div class="article-content">
            <p class="article-meta" >Artikel dan Berita</p>
            <h3 class="article-title">Teknologi AI dalam Perpustakaan Modern</h3>
            <p class="article-desc">Implementasi kecerdasan buatan untuk meningkatkan layanan perpustakaan digital dan pengalaman pengguna.</p>
            <button class="read-more-btn">
              Selengkapnya <span class="arrow-right">→</span>
            </button>
          </div>
        </article>

        <!-- Card 2 -->
        <article class="article-card" aria-label="Artikel E-Learning">
          <div class="article-image-container">
            <img src="images/e-learning.jpg" alt="Platform e-learning" />
            <div class="date-badge" aria-label="Tanggal 10 Februari 2025">
              <b>10</b>Feb 2025
            </div>
          </div>
          <div class="article-content">
            <p class="article-meta">Artikel dan Berita</p>
            <h3 class="article-title">Platform E-Learning Terintegrasi</h3>
            <p class="article-desc">Sistem pembelajaran online yang terintegrasi dengan perpustakaan digital untuk mendukung proses belajar mengajar.</p>
            <button class="read-more-btn">
              Selengkapnya <span class="arrow-right">→</span>
            </button>
          </div>
        </article>

        <!-- Card 3 -->
        <article class="article-card" aria-label="Artikel Database Management">
          <div class="article-image-container">
            <img src="images/gmbr.jpg" alt="Manajemen database" />
            <div class="date-badge" aria-label="Tanggal 15 Februari 2023">
              <b>15</b>Feb 2023
            </div>
          </div>
          <div class="article-content">
            <p class="article-meta">Artikel dan Berita</p>
            <h3 class="article-title">Manajemen Database Perpustakaan</h3>
            <p class="article-desc">Strategi pengelolaan database yang efektif untuk sistem informasi perpustakaan modern.</p>
            <button class="read-more-btn">
              Selengkapnya <span class="arrow-right">→</span>
            </button>
          </div>
        </article>
      </div>
    </section>

    <aside class="agenda-events" aria-label="Agenda dan Event">
      <h2 class="section-title" style="color: rgb(23, 20, 82)">Agenda & Event</h2><br>
      <div class="event-list">
        <article class="event-item" role="article" aria-label="Workshop Programming">
          <a href="#" tabindex="-1" aria-hidden="true" class="event-thumb">
            <img src="18.3.23 PYTHON-2023021134.jpg" alt="Workshop Programming" />
          </a>
          <div class="event-content">
            <h3 class="event-title">Workshop Programming untuk Pemula</h3>
            <p class="event-category">Workshop</p>
            <time datetime="2024-10-29" style="color:black">29 Oct 2024</time> - <time datetime="2024-10-30" style="color:black">30 Oct 2024</time>
          </div>
        </article>

        <article class="event-item" role="article" aria-label="Seminar Cybersecurity">
          <a href="#" tabindex="-1" aria-hidden="true" class="event-thumb">
            <img src="medium-shot-man-with-hoodie-holding-laptop-e1646646997479.jpeg" alt="Seminar Cybersecurity" />
          </a>
          <div class="event-content">
            <h3 class="event-title">Seminar Keamanan Siber Event</h3>
            <p class="event-category">Seminar</p>
            <time datetime="2025-03-05" style="color:black">05 Mar 2025</time> - <time datetime="2025-03-27" style="color:black">27 Mar 2025</time>
          </div>
        </article>

        <article class="event-item" role="article" aria-label="Bedah Buku AI">
          <a href="#" tabindex="-1" aria-hidden="true" class="event-thumb">
            <img src="artificial-intelligence-example-s.xafb901b8.jpg" alt="Bedah Buku AI" />
          </a>
          <div class="event-content">
            <h3 class="event-title">Bedah Buku: Artificial Intelligence</h3>
            <p class="event-category">Bedah Buku</p>
            <time datetime="2024-10-27" style="color:black">27 Oct 2024</time> - <time datetime="2024-10-28"style="color:black">28 Oct 2024</time>
          </div>
        </article>

        <article class="event-item" role="article" aria-label="Kompetisi Coding">
          <a href="#" tabindex="-1" aria-hidden="true" class="event-thumb">
            <img src="lomba-coding-alhazen-hackathon-768x582.jpg" alt="Kompetisi Coding" />
          </a>
          <div class="event-content">
            <h3 class="event-title">Kompetisi Coding Challenge Event</h3>
            <p class="event-category">Kompetisi</p>
            <time datetime="2024-11-08" style="color:black">08 Nov 2024</time> - <time datetime="2024-11-09" style="color:black">09 Nov 2024</time>
          </div>
        </article>
      </div>

      <div class="see-all-btn-container">
  <button class="see-all-btn" aria-label="Lihat Semua Agenda dan Event"
          onclick="window.location.href='index2.php'"><br>
    Lihat Semua
  </button>
</div>

    </aside>
  </main>

  <section id="buku" class="book">
  <h3 style="text-align: center; color:rgb(14, 12, 125); font-size: 1.8rem; margin: 40px 0;">Daftar Buku yang tersedia :</h3>
  
  <section class="book-gallery">
    <div class="book-card">
      <img src="images/business.jpg" alt="Buku Bisnis dan Ekonomi">
      <p class="title">Panduan Rekrutmen dan Manajemen SDM 2023</p>
      <span class="category">Bisnis dan Ekonomi</span>
    </div>

    <div class="book-card">
      <img src="images/ai.jpg" alt="Buku AI Use Cases">
      <p class="title">Top 100 GenAI Use Cases untuk Bisnis</p>
      <span class="category">Pengembangan Diri</span>
    </div>

    <div class="book-card">
      <img src="images/pendidikan.jpg" alt="Buku Pendidikan">
      <p class="title">Sistem Penerimaan Peserta Didik Baru</p>
      <span class="category">Pendidikan</span>
    </div>

    <div class="book-card">
      <img src="images/upgrade.jpg" alt="Buku Pengembangan Diri">
      <p class="title">3 Upgrade Terpenting dalam Hidup Anda</p>
      <span class="category">Gaya Hidup</span>
    </div>

    <div class="book-card">
      <img src="images/program.jpg" alt="Buku Programming">
      <p class="title">Pemrograman Web Modern dengan JavaScript</p>
      <span class="category">Programing</span>
    </div>

    <div class="book-card">
      <img src="images/database.png" alt="Buku Database">
      <p class="title">Desain Database untuk Aplikasi Modern</p>
      <span class="category">Database</span>
    </div>

    <div class="book-card">
      <img src="images/jarkom.jpeg" alt="Buku Jaringan">
      <p class="title">Fundamental Jaringan Komputer</p>
      <span class="category">Networking</span>
    </div>

    <div class="book-card">
      <img src="images/dev.jpg" alt="Buku Mobile Development">
      <p class="title">Pengembangan Aplikasi Mobile Cross-Platform</p>
      <span class="category">Mobile Dev</span>
    </div>

    <div class="book-card">
      <img src="images/cyber.jpg" alt="Buku Keamanan">
      <p class="title">Keamanan Sistem Informasi dan Cyber Security</p>
      <span class="category">cyber Security</span>
    </div>

    <div class="book-card">
      <img src="images/computing.jpg" alt="Buku Cloud Computing">
      <p class="title">Cloud Computing dan Arsitektur Microservices</p>
      <span class="category">Cloud Computing</span>
    </div>
    
    <div class="book-card">
      <img src="images/cyber.jpg" alt="Buku Keamanan">
      <p class="title">Keamanan Sistem Informasi dan Cyber Security</p>
      <span class="category">Cyber Security</span>
    </div>

    <div class="book-card">
      <img src="images/computing.jpg" alt="Buku Cloud Computing">
      <p class="title">Cloud Computing dan Arsitektur Microservices</p>
      <span class="category">Cloud Computing</span>
    </div>
  </section>
</section>

<!-- Staff Management Section -->
<section class="staff-section">
  <div class="Jaga">
  <?php
  // Node petugas dengan foto
  class NodeWithFoto {
      public $nama;
      public $foto;
      public $next;

      public function __construct($nama, $foto = null) {
          $this->nama = $nama;
          $this->foto = $foto;
          $this->next = null;
      }
  }

  // Circular linked list sederhana
  class DaftarPetugas {
      public $head = null;

      public function tambahPetugas($nama, $foto = null) {
          $baru = new NodeWithFoto($nama, $foto);
          if ($this->head == null) {
              $this->head = $baru;
              $baru->next = $this->head;
          } else {
              $temp = $this->head;
              while ($temp->next != $this->head) {
                  $temp = $temp->next;
              }
              $temp->next = $baru;
              $baru->next = $this->head;
          }
      }

      public function tampilkanSemua() {
          if ($this->head == null) {
              echo "<p>Tidak ada petugas yang terdaftar.</p>";
              return;
          }

          $temp = $this->head;
          echo "<div class='daftar-petugas' style='display: flex; flex-wrap: wrap; gap: 1rem;'>";

          do {
              echo "<div style='border: 1px solid #ccc; padding: 1rem; border-radius: 8px; width: 150px; text-align: center;'>";
              if ($temp->foto) {
                  echo "<img src='" . htmlspecialchars($temp->foto) . "' alt='" . htmlspecialchars($temp->nama) . "' style='width: 100px; height: 100px; border-radius: 50%; object-fit: cover;'><br>";
              }
              echo "<strong>" . htmlspecialchars($temp->nama) . "</strong>";
              echo "</div>";
              $temp = $temp->next;
          } while ($temp !== $this->head);

          echo "</div>";
      }
  }

  // Inisialisasi dan tambah petugas
  $daftar = new DaftarPetugas();
  $daftar->tambahPetugas("El Arcon", "images/el.jpeg");
  $daftar->tambahPetugas("Enzy M", "images/enzy.jpeg");
  $daftar->tambahPetugas("M. Galang.", "images/galang.jpeg");
  $daftar->tambahPetugas("Nadjwa N.", "images/awa.jpeg");
  $daftar->tambahPetugas("Najwa C.", "images/acel.jpeg");

  ?>

  <h1 id="petugas" >Daftar Petugas Jaga Perpustakaan</h1>
  <?php $daftar->tampilkanSemua(); ?>
</div>

  <div style="margin-top: 2rem; text-align: center;">
    <a href="baru.php">
      <button style="padding: 0.7rem 1.5rem; font-size: 1rem; background: linear-gradient(45deg,rgb(29, 8, 132),rgb(23, 20, 82)); color: white; border: none; border-radius: 6px; cursor: pointer;">
        Lihat Petugas Jaga
      </button>
    </a>
  </div>
</section>



<footer class="footer-full">
  <div class="footer-container">
    <div class="footer-column">
      <h3>Perpustakaan infinitech</h3>
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
      <p>Email: info@infinitech.pnc.ac.id</p>
      <p>Telepon: (0282) 123456</p>
      <p>Alamat: Jl. Perintis No.123, Cilacap</p>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2025 Perpustakaan infinitech — Teknik Informatika 1C, Politeknik Negeri Cilacap</p>
  </div>
</footer>
</body>
</html>

