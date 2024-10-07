<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tentang - Kampung Juaq Asa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6fd4e8e126.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/tentang.css">
    <style>
    .hero_proker {
        position: relative;
    }

    .hero_proker h4 {
        font-size: 2.5rem;
        font-weight: bold;
        color: #2c3e50;
    }

    .hero_proker p {
        font-size: 1.2rem;
        color: #34495e;
    }

    .hero_proker img {
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        border-radius: 15px;
    }

    .hero_proker img:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

  
  

    /* Parallax Effect */
    .parallax {
        background-image: url('wisata/hemaq5.jpeg');
        height: 400px;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.4);
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        font-size: 2rem;
    }

    /* Adding Grid Layout for Dynamic Images */
    .image-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .image-grid img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    /* Text Styling */
    .lokasi {
        font-size: 2rem;
        color: #2980b9;
        text-transform: uppercase;
        margin-bottom: 20px;
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

    <section class="hero_tentang">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2>Struktur Kepengurusan <span class="badge bg-primary">Kampung Juaq Asa</span></h2>
                </div>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-sm-3 mt-2">
                    <div class="card justify-content-center">
                        <img src="staf/petinggi.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                        <div class="card-body">
                            <h5 class="card-title">Petinggi</h5>
                            <p class="card-text">Herkolanus, S.T</p>
                            <a href="#!" class="btn btn-primary">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mt-2">
                    <div class="card justify-content-center">
                        <img src="staf/sekrertaris.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                        <div class="card-body">
                            <h5 class="card-title">Sekretaris</h5>
                            <p class="card-text">Yulius Naro, S.Sos</p>
                            <a href="#!" class="btn btn-primary">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mt-2">
                    <div class="card justify-content-center">
                        <img src="staf/bendahara.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                        <div class="card-body">
                            <h5 class="card-title">Kaur Keuangan</h5>
                            <p class="card-text">Yenita Ernawati</p>
                            <a href="#!" class="btn btn-primary">More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-3">
                    <div class="card justify-content-center">
                        <img src="staf/feristha.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                        <div class="card-body">
                            <h5 class="card-title">Kaur Perencanaan & Umum</h5>
                            <p class="card-text">Feristha Meriani Tabita</p>
                            <a href="#!" class="btn btn-primary">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card justify-content-center">
                        <img src="staf/wenang.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                        <div class="card-body">
                            <h5 class="card-title">Kasi kesejahteraan dan Pelayanan</h5>
                            <p class="card-text">Wenang</p>
                            <a href="#!" class="btn btn-primary">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card justify-content-center">
                        <img src="staf/thomas.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                        <div class="card-body">
                            <h5 class="card-title">Kasi Pemerintahan</h5>
                            <p class="card-text">Thomas Maxvield</p>
                            <a href="#!" class="btn btn-primary">More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-md-5">
                    <h2>KARANG TARUNA<span class="badge bg-primary">JUAQ ASA</span></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 d-none d-sm-block d-sm-none d-md-block text-center">
                    <img src="logo/karang.png" alt=""height="350px">
                </div>
                <div class="col-lg-5 align-self-center">
                    <p>Karang Taruna juaq asa juga berperan aktif dalam membangun juaq asa dan juga masih aktif dalam berkegiatan dan banyak memberikan kontribusi untuk membangun kampung Juaq Asa</p>
                    <p>Selain itu Karang Taruna Juaq asa juga menjadi contoh positif bagi kampung-kampung lain untuk berperan aktif dalam pembangunan kampung dan memanfaatkan potensi kampung untuk berkembang</p>
                </div>
            </div>

    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#F6F6F6" fill-opacity="1" d="M0,288L48,250.7C96,213,192,139,288,128C384,117,480,171,576,176C672,181,768,139,864,149.3C960,160,1056,224,1152,213.3C1248,203,1344,117,1392,74.7L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>
    <section>
    <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2>Struktur Kepengurusan <span class="badge bg-primary">BPK Kampung Juaq Asa</span></h2>
                </div>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-sm-3 mt-2">
                    <div class="card justify-content-center">
                        <class="card-img-top" alt="Fissure in Sandstone" />
                        <div class="card-body">
                            <h5 class="card-title">Ketua</h5>
                            <p class="card-text">Petrus Piter</p>
                            <a href="#!" class="btn btn-primary">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mt-2">
                    <div class="card justify-content-center">
                        <class="card-img-top" alt="Fissure in Sandstone" />
                        <div class="card-body">
                            <h5 class="card-title">Wakil Ketua</h5>
                            <p class="card-text">Supramansyah</p>
                            <a href="#!" class="btn btn-primary">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mt-2">
                    <div class="card justify-content-center">
                        <class="card-img-top" alt="Fissure in Sandstone" />
                        <div class="card-body">
                            <h5 class="card-title">Sekretaris</h5>
                            <p class="card-text">Mitelda</p>
                            <a href="#!" class="btn btn-primary">More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-3">
                    <div class="card justify-content-center">
                        <class="card-img-top" alt="Fissure in Sandstone" />
                        <div class="card-body">
                            <h5 class="card-title">Anggota</h5>
                            <p class="card-text">Tedi Chandra</p>
                            <a href="#!" class="btn btn-primary">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card justify-content-center">
                        <class="card-img-top" alt="Fissure in Sandstone" />
                        <div class="card-body">
                            <h5 class="card-title">Anggota</h5>
                            <p class="card-text">Muhammad Pasroh</p>
                            <a href="#!" class="btn btn-primary">More</a>
                        </div>
                    </div>
                </div>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#F6F6F6" fill-opacity="1" d="M0,288L48,250.7C96,213,192,139,288,128C384,117,480,171,576,176C672,181,768,139,864,149.3C960,160,1056,224,1152,213.3C1248,203,1344,117,1392,74.7L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>
<section>
<div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2>Struktur Kepengurusan <span class="badge bg-primary">Lembaga Adat Kampung Juaq Asa</span></h2>
                </div>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-sm-3 mt-2">
                    <div class="card justify-content-center">
                        <class="card-img-top" alt="Fissure in Sandstone" />
                        <div class="card-body">
                            <h5 class="card-title">Kepala Adat</h5>
                            <p class="card-text">Emanuel Tuhun</p>
                            <a href="#!" class="btn btn-primary">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mt-2">
                    <div class="card justify-content-center">
                        <class="card-img-top" alt="Fissure in Sandstone" />
                        <div class="card-body">
                            <h5 class="card-title">Sekretaris Adat</h5>
                            <p class="card-text">Tulur</p>
                            <a href="#!" class="btn btn-primary">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mt-2">
                    <div class="card justify-content-center">
                        <class="card-img-top" alt="Fissure in Sandstone" />
                        <div class="card-body">
                            <h5 class="card-title">Anggota</h5>
                            <p class="card-text">Yohanes Balui</p>
                            <a href="#!" class="btn btn-primary">More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-3">
                    <div class="card justify-content-center">
                        <class="card-img-top" alt="Fissure in Sandstone" />
                        <div class="card-body">
                            <h5 class="card-title">Anggota</h5>
                            <p class="card-text">Yurius Ingan</p>
                            <a href="#!" class="btn btn-primary">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card justify-content-center">
                        <class="card-img-top" alt="Fissure in Sandstone" />
                        <div class="card-body">
                            <h5 class="card-title">Anggota</h5>
                            <p class="card-text">Rupina</p>
                            <a href="#!" class="btn btn-primary">More</a>
                        </div>
                    </div>
                </div>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#F6F6F6" fill-opacity="1" d="M0,288L48,250.7C96,213,192,139,288,128C384,117,480,171,576,176C672,181,768,139,864,149.3C960,160,1056,224,1152,213.3C1248,203,1344,117,1392,74.7L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>
    
    <section class="hero_proker pt-3">
    <div class="parallax">
        <div class="overlay">OBJEK WISATA KAMPUNG JUAQ ASA</div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col text-center">
                <h4 class="lokasi">OBJEK WISATA KAMPUNG JUAQ ASA</h4>
                <p>Wisata Air Hemaq Beniung</p>
            </div>
        </div>
        <div class="image-grid">
            <img src="wisata/hemaq1.webp" alt="">
            <img src="wisata/hemaq2.jpg" alt="">
            <img src="wisata/hemaq3.jpg" alt="">
            <img src="wisata/hemaq4.jpg" alt="">
        </div>
    </div>

    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col text-center">
                <h4 class="lokasi">OBJEK WISATA KAMPUNG JUAQ ASA</h4>
                <p>Hutan Adat Hemaq Beniung</p>
            </div>
        </div>
        <div class="image-grid">
            <img src="wisata/hutan1.jpeg" alt="">
            <img src="wisata/hutan2.jpg" alt="">
            <img src="wisata/hutan3.jpg" alt="">
            <img src="wisata/hutan4.jpg" alt="">
        </div>
    </div>
</section>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#F6F6F6" fill-opacity="1" d="M0,288L48,250.7C96,213,192,139,288,128C384,117,480,171,576,176C672,181,768,139,864,149.3C960,160,1056,224,1152,213.3C1248,203,1344,117,1392,74.7L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>

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