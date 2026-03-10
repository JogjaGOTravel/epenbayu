<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jogja GO Travel</title>

<style>
html{ scroll-behavior:smooth; }

body{
  margin:0;
  font-family:Arial, sans-serif;
  background:#f4f4f4;
}

/* NAVBAR */
nav{
  background:#1f4d3a;
  color:white;
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding:15px 10%;
  position:sticky;
  top:0;
  z-index:100;
}
nav h2{ margin:0; }
nav ul{
  list-style:none;
  display:flex;
  gap:25px;
  margin:0;
}
nav a{
  color:white;
  text-decoration:none;
  font-weight:bold;
}

/* HEADER */
header{
  background:#1f4d3a;
  color:white;
  padding:60px 10%;
  display:flex;
  gap:30px;
}
header img{
  width:45%;
  border-radius:15px;
}

/* SECTION */
section{ padding:60px 10%; }

button{
  background:#1f4d3a;
  color:white;
  padding:15px 30px;
  border:none;
  border-radius:10px;
  font-size:16px;
  cursor:pointer;
}

/* DAY */
.day{
  background:white;
  padding:30px;
  margin-top:30px;
  border-radius:15px;
  box-shadow:0 5px 10px rgba(0,0,0,.1);
}
.day h3{ color:#1f4d3a; }

/* CARD */
.cards{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:20px;
  margin-top:20px;
}
.card{
  background:#fafafa;
  border-radius:12px;
  overflow:hidden;
  box-shadow:0 3px 8px rgba(0,0,0,.1);
}
.card img{
  width:100%;
  aspect-ratio:16 / 9;
  object-fit:cover;
  display:block;
}
}
.card .text{
  padding:14px;
}
.card .text h4{
  margin:0;
}
.card .text p{
  margin-top:8px;
  font-size:13px;
  color:#555;
}

/* HOTEL */
.hotel-img{
  margin-top:20px;
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
  gap:15px;
}
.hotel-img img{
  width:100%;
  border-radius:12px;
}

/* KONTAK */
.kontak{
  background:#1f4d3a;
  color:white;
  text-align:center;
}
.kontak-box{
  background:#143528;
  padding:30px;
  border-radius:15px;
  max-width:500px;
  margin:auto;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav>
  <h2>JogjaGOTravel</h2>
  <ul>
    <li><a href="#destinasi">Destinasi</a></li>
    <li><a href="#booking">Booking</a></li>
    <li><a href="#kontak">Kontak</a></li>
  </ul>
</nav>

<!-- HEADER -->
<header>
  <div>
    <h1>Temukan Petualangan Anda di Alam Yogyakarta</h1>
    <p>
      Jogja GO Travel menghadirkan paket wisata 3 Hari 2 Malam
      dengan destinasi alam, budaya, dan petualangan terbaik
      di Yogyakarta.
    </p>
  <div class="banner">
  <img src="marvelle.png">
</header>

<!-- DESTINASI -->
<section id="destinasi">
  <h2>Paket Wisata Jogja 3 Hari 2 Malam</h2>
  <button onclick="togglePaket()">Lihat Detail Perjalanan</button>

  <div id="paket" style="display:none">

    <!-- DAY 1 -->
    <div class="day">
      <h3>DAY 1</h3>
      <div class="cards">

        <div class="card">
          <img src="pinud.png">
          <div class="text">
            <h4>Hutan Pinus Mangunan</h4>
            <p>Wisata alam sejuk dengan panorama perbukitan hijau.</p>
          </div>
        </div>

        <div class="card">
          <img src="goa.png">
          <div class="text">
            <h4>Goa Pindul</h4>
            <p>Pengalaman cave tubing menyusuri sungai bawah tanah.</p>
          </div>
        </div>

        <div class="card">
          <img src="obelix.png">
          <div class="text">
            <h4>Obelix Sea View</h4>
            <p>Menikmati pemandangan laut selatan dari ketinggian.</p>
          </div>
        </div>

      </div>

    </div>

    <!-- DAY 2 -->
    <div class="day">
      <h3>DAY 2</h3>
      <div class="cards">

        <div class="card">
          <img src="gumuki.png">
          <div class="text">
            <h4>Gumuk Pasir</h4>
            <p>Petualangan seru dengan jeep di pasir pantai.</p>
          </div>
        </div>

        <div class="card">
          <img src="heha.png">
          <div class="text">
            <h4>HeHa Sky View</h4>
            <p>Spot foto ikonik dengan latar kota Jogja.</p>
          </div>
        </div>

        <div class="card">
          <img src="drini.png">
          <div class="text">
            <h4>Pantai Drini</h4>
            <p>Pantai eksotis dengan pasir putih dan karang alami.</p>
          </div>
        </div>

      </div>
    </div>

    <!-- DAY 3 -->
    <div class="day">
      <h3>DAY 3</h3>
      <div class="cards">

        <div class="card">
          <img src="maruvelle.png">
          <div class="text">
            <h4>Candi Prambanan</h4>
            <p>Candi Hindu megah warisan budaya dunia.</p>
          </div>
        </div>

        <div class="card">
          <img src="malio.png">
          <div class="text">
            <h4>Malioboro</h4>
            <p>Pusat belanja dan wisata kota Yogyakarta.</p>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- BOOKING -->
<section id="booking">
  <h2>Booking Sekarang</h2>
  <button onclick="window.location.href='https://wa.me/6288707611109'">
    Booking via WhatsApp
  </button>
</section>

<!-- KONTAK -->
<section id="kontak" class="kontak">
  <h2>Hubungi Kami</h2>
  <div class="kontak-box">
    <p>📞 0887-0761-1109</p>
    <p>📧 jogjagotravel@gmail.com</p>
    <p>📸 @JogjaGOTravel</p>
    <p>🏢 Jl. Malioboro No. 7C, Yogyakarta</p>
  </div>
</section>

<script>
function togglePaket(){
  const p = document.getElementById("paket");
  p.style.display = (p.style.display === "block") ? "none" : "block";
}
</script>

</body>
</html>