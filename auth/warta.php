<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="icon" href="../assets/img/logo.png">
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            overflow-x: hidden;
        }

        .custom-navbar {
            height: 6rem;
            background-color: #000000 !important;
        }

        .custom-navbar .navbar-brand {
            display: flex;
            align-items: center;
            font-weight: bold;
            font-size: 20px;
        }

        .custom-navbar .navbar-brand img {
            margin-right: 0.5rem;
        }

        .navbar-collapse {
            background-color: #000000;
            padding: 10px;
        }

        .custom-navbar .nav-link {
            color: #ffffff !important;
            margin: 0rem 2rem;
            font-weight: bold;
        }

        .custom-navbar .nav-link:hover {
            color: #dddddd !important;
        }

        .navbar-nav {
            flex-direction: column;
        }

        .nav-item {
            margin-bottom: 10px;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler.active {
            background-color: #000000;
            border-radius: 5px;
        }

        .footer {
            background-color: #000000;
            color: #ffffff;
            padding: 3rem 0;
        }

        .footer .logo img {
            width: 50px;
            height: 50px;
            margin-right: 1rem;
        }

        .footer .footer-logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .footer a {
            color: #ffffff;
            text-decoration: none;
        }

        .footer .contact-info {
            margin-top: 1rem;
        }

        .footer .contact-info p {
            margin: 0.25rem 0;
        }

        .footer .contact-info i {
            margin-right: 0.5rem;
        }
    </style>
    <title>Warta Jemaat - Immanuel Community</title>
</head>


<body>



    <nav class="navbar navbar-expand-lg bg-dark custom-navbar fixed-top">
        <a class="navbar-brand" href="../index.php" style="color: white;">
            <img src="../assets/img/logo.png" width="55" height="55" alt="Logo" class="d-inline-block align-top">
            Immanuel Community
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars" style="color: white;"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../auth/church.php">Churches</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../auth/warta.php">Warta Jemaat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../auth/services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../auth/media.php">Media</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../auth/contact.php">Contact us</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid" style="margin-top: 6rem;">
        <nav class="navbar navbar-expand-lg navbar-light w-100 justify-content-center p-5" style="background-color: white;">
            <a class="navbar-brand" style="font-size: 2rem; font-weight : bold;">WARTA JEMAAT</a>
            <a class="navbar-brand" style="font-size: 2rem; font-weight : bold;">IMMANUEL COMMUNITY</a>
        </nav>
    </div>
    <hr>

    <style>
        .card {
            border: 1px solid #ddd;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card img {
            max-height: 180px;
            object-fit: cover;
        }

        .card-title {
            font-size: 14px;
            color: #333;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="path/to/image1.jpg" class="card-img-top" alt="WJ 2023-09">
                    <div class="card-body text-center">
                        <p class="card-title font-weight-bold">WJ 2023-09 (Sep)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="path/to/image2.jpg" class="card-img-top" alt="WJ 2022-01">
                    <div class="card-body text-center">
                        <p class="card-title font-weight-bold">WJ 2022-01 (Jan)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="path/to/image3.jpg" class="card-img-top" alt="WJ 2024-09">
                    <div class="card-body text-center">
                        <p class="card-title font-weight-bold">WJ 2024-09 (Sep)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center text-left">
                    <div class="logo">
                        <img src="../assets/img/logo.png" alt="Logo">
                    </div>
                    <div class="footer-logo">
                        Immanuel Community
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Letjen Suprapto No.32, Kota Semarang, Jawa Tengah</p>
                        <p><i class="fas fa-building"></i> yayasan.immanuel.semarang@gmail.com</p>
                        <p><i class="fas fa-phone"></i>(024) 8414207 / 8418978</p>
                        <p><i class="fas fa-calendar-alt"></i> Hari Ibadah: Minggu, 09:00 AM & 18:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script>
        // Mendapatkan elemen tombol navbar
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.querySelector('#navbarNav');

        // Tambahkan event listener untuk toggle click
        navbarToggler.addEventListener('click', function() {
            // Jika navbar collapse terbuka, tambahkan kelas active, jika tidak, hapus
            if (navbarCollapse.classList.contains('show')) {
                navbarToggler.classList.remove('active');
            } else {
                navbarToggler.classList.add('active');
            }
        });
    </script>
</body>

</html>