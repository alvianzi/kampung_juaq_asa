<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kampung Juaq Asa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <style>
        p {
            text-align: justify;
            margin-bottom: 16px;
            line-height: 1.6;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top p-3" id="navbar">
        <div class="container">
            <img class="logo me-2" src="logo/logojuaq.png" alt="" height="27px">
            <a class="navbar-brand" href="index.php">KAMPUNG JUAQ ASA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                    <li class="nav-item me-3">
                        <a class="nav-link active utama" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active utama" aria-current="page" href="tentang.php">Tentang</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active utama" aria-current="page" href="data.php">Data</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link active utama" aria-current="page" href="faq.php">FAQ</a>
                    </li>
                    <li class="nav-item" id="highlight">
                        <a class="nav-link active rounded border border-light" aria-current="page" href="programkerja.php">Program Kampung</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="hero_lingkungan">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h4 class="lokasi">KAMPUNG JUAQ ASA</h4>
                    <p1>PEMERINTAH KAMPUNG JUAQ ASA</p1>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-9">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/kampung_kelubaq/sdn014.jpg" class="d-block w-100 rounded" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>SDN 014 JUAQ ASA</h5>
                                    <p1>PEMERINTAHAN KAMPUNG JUAQ ASA</p1>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/kampung_kelubaq/hemaq.jpeg" class="d-block w-100 rounded" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>HEMAQ BENIUNG</h5>
                                    <p1>PEMERINTAHAN KAMPUNG JUAQ ASA</p1>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/kampung_kelubaq/lapangan.jpeg" class="d-block w-100 rounded" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>LAPANGAN BOLA KAMPUNG JUAQ ASA</h5>
                                    <p1>PEMERINTAHAN KAMPUNG JUAQ ASA</p1>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-6 ">
                    <img class="rounded" src="img/kampung_kelubaq/juaq1.jpeg" alt="" width="100%" height="100%">
                </div>
                <div class="col-3 ">
                    <div class="row mb-3">
                        <div class="col">
                            <img class="rounded" src="img/kampung_kelubaq/juaq2.jpeg" alt="" width="100%" height="100%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img class="rounded" src="img/kampung_kelubaq/juaq3.jpeg" alt="" width="100%" height="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#F6F6F6" fill-opacity="1" d="M0,288L48,250.7C96,213,192,139,288,128C384,117,480,171,576,176C672,181,768,139,864,149.3C960,160,1056,224,1152,213.3C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  <section style="background-color:#F6F6F6;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9 text-center">
                <h3>Alamat</h3>
                <p1>Kalimantan Timur, Kabupaten Kutai Barat, Kecamatan Barong Tongkok</p1>
                <iframe class="rounded" 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15952.783883055742!2d115.6604493!3d-0.1812376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df7f63eac8cacd1%3A0xfbefb1f81ea2e431!2sJuaq%20Asa%2C%20Kec.%20Barong%20Tongkok%2C%20Kabupaten%20Kutai%20Barat%2C%20Kalimantan%20Timur!5e0!3m2!1sid!2sid!4v1695828704346!5m2!1sid!2sid"
                    width="100%" 
                    height="500" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#F6F6F6" fill-opacity="1" d="M0,288L48,250.7C96,213,192,139,288,128C384,117,480,171,576,176C672,181,768,139,864,149.3C960,160,1056,224,1152,213.3C1248,203,1344,117,1392,74.7L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>
    <section>
        <div class="container mb-5 pb-5">
            <div class="row">
                <div class=" col text-center">
                    <img src="logo/logojuaq.png" alt="" height="350px">
                </div>
                <div class="col align-self-center blockquote text-start pe-5 me-5">
                    <p><strong>Visi</strong></p>
                    <p>"MAJU DAN SEJAHTERA BERSAMA MASYARAKAT KAMPUNG JUAQ ASA" </p>
                    <p><strong>Misi</strong></p>
                    <p>1. MELANJUTKAN PROGRAM-PROGRAM PEMERINTAH KAMPUNG PERIODE LALU YANG BELUM TEREALISASI.</p>
                    <p>2. MEMBANGUN TATA KELOLA PEMERINTAH YANG BERSIH, EFEKTIF DAN AKUNTABEL.</p>
                    <p>3. MENINGKATKAN KUALITAS HIDUP MASYARAKAT.</p>
                    <p>4. OPTIMALISASI PEREKONOMIAN MASYARAKAT SESUAI POTENSI DESA DIDUKUNG KETERSEDIAAN INFRASTRUKTUR YANG MEMADAI.</p>
                    <p>5. MELESTARIKAN BUDAYA ASLI DESA SEBAGAI ASET KEARIFAN LOKAL DAN DIIRINGI PERKEMBANGAN TEHNOLOGI.</p>
                    <p>6. MENINGKATKAN KUALITAS KEHIDUPAN BERAGAMA DAN HARMONISASI ANTAR SELURUH LAPISAN MASYARAKAT.</p>
                    <p>7. MEMBERDAYAKAN POTENSI-POTENSI YANG ADA DIMASYARAKAT, MELIPUTI :</p>
                    <p>a. Pemberdayaan SDM ( Pemuda/Karangtaruna dan Perempuan)</p>
                    <p>b. Pemberdayaan SDA ( Sumber Daya Alam )</p>
                    
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#F6F6F6" fill-opacity="1" d="M0,288L48,250.7C96,213,192,139,288,128C384,117,480,171,576,176C672,181,768,139,864,149.3C960,160,1056,224,1152,213.3C1248,203,1344,117,1392,74.7L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>
    <section>
        <div class="container mb-5 pb-5">
            <div class="row">
                <div class=" col text-center">
                    <img src="logo/dayak.jpeg" alt="" height="350px">
                    <a href="https://commons.m.wikimedia.org/wiki/File:COLLECTIE_TROPENMUSEUM_Een_groep_Dajaks_uit_de_streek_rond_Bengkajang_West-Borneo._TMnr_60044323.jpg">
                    <figcaption>Source: COLLECTIE TROPENMUSEUM Een groep Dajaks uit de streek rond Bengkajang West-Borneo.</figcaption>
    </a>
                </div>
                <div class="col align-self-center blockquote text-start pe-5 me-5">
                    <p><strong>Sejarah Kampung Juaq asa</strong></p>
                    <p>
                    Juaq Asa merupakan sebuah kampung yang termasuk ke dalam Rumpun Asa yang berlokasi di Kecamatan Barong, Kabupaten Kutai Barat, Kalimantan Timur.
Sejarah kampung Juaq Asa yang terletak di tengah-tengah kampung Rumpun Asa lainnya ini bermula dari suku Dayak Benuaq yang dibawa oleh seorang hajiiq bernama Roit Kartanegara. Kemudian kampung ini dipimpin oleh seorang wanita bernama Angin atau yang biasa dikenal oleh Men Uyang oleh pengikutnya pada masa itu.
Kampung Juaq Asa saat itu tidak berlokasi di tempat yang kita kenal sekarang dan bernama Juaq. </P></div>
<div class="blockquote text-start pe-5 me-5">
<p> Namun dikarenakan adanya wabah penyakit yang menyebabkan sakit perut massal pada penduduk kampung saat itu, maka diputuskanlah bahwa mereka harus mencari dan memindahkan lokasi pemukiman yang baru.
Setelah berjalan berhari-hari, mereka tiba di sebuah tempat bernama Juaq Ore dan berniat menjadikan tempat itu sebagai lokasi pemukiman mereka yang baru. Namun sang pemimpin saat itu mendapatkan mimpi dimana ada sesosok orang berbaju putih memberitahu bahwa tempat yang mereka cari untuk tinggal bukanlah disitu dan sudah terlewat. Orang itu memberitahu bahwa tempat yang baik untuk mereka tinggali terdapat tanaman kemang (bunga melati) sebagai tanda wilayah tersebut. Setelah mereka berbalik arah dan menemukan tempat yang dimaksud, mereka mulai membangun lamin atau luuq untuk tempat tinggal dan menamai pemukiman itu dengan nama Kampung Kemang pada tahun 1655.
Seiring berjalannya waktu penduduk di Kampung Kemang semakin banyak, sehingga mereka mulai membangun rumah masing-masing untuk dijadikan kampung dan tidak lagi menempati lamin atau luuq. Hanya pemimpin dan tetua kampung yang masih tinggal di lamin atau luuq kemudian nama kampung tersebut diganti menjadi Juaq Asa karena diapit oleh dua sungai yaitu sungai Juaq di sebelah barat dan Sungai Asa disebelah timur.
Saat masih bernama Kampung Kemang, pemimpin kampung saat itu disebut sebagai mantiiq yang kemudian di masa yang akan datang dikenal sebagai kepala adat. Mantiiq dipilih dengan cara melakukan voting secara adil, tanpa rahasia, dan terbuka tanpa menggunakan bilik suara. Dimana pemilihan dilakukan menggunakan media lidi sebagai “suara” dari penduduk. Para calon mantiiq akan duduk berjejer di depan kemudian penduduk akan maju satu per satu untuk menyerahkan lidi mereka kepada calon mantiiq yang mereka pilih. Calon mantiiq yang mendapat lidi atau suara terbanyak akan ditetapkan sebagai mantiiq selanjutnya. Mantiiq tidak memiliki masa jabatan. Setelah ditetapkan menjadi mantiiq, orang itu akan terus memegang jabatan itu sampai wafat kemudian baru akan diadakan pemilihan mantiiq yang baru.
Setelah berganti nama menjadi Kampung Juaq Asa, kampung dipimpin oleh mantiiq bernama Mpo Rancak, kemudian setelah beliau wafat digantikan oleh Mpo Reje. Setelah Mpo Reje wafat beliau digantikan oleh Mpo Nalen kemudian pada 1992 dimulailah adanya masa jabatan. Sebutan mantiiq sebagai pemimpin kampung sudah tidak lagi digunakan dan diganti menjadi Petinggi Kampung. Petinggi Kampung pertama yang memimpin Kampung Juaq Asa adalah Yunus Yanti, kemudian dilanjutkan oleh atau yang dikenal sebagai Taman Dewi.
</p></div>
                    
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col text-center mt-3">
                        <p1>Copyright © 2024 - PEMERINTAHAN KAMPUNG JUAQ ASA. All Rights Reserved.</p1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>