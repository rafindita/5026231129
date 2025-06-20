<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rafindita Sumar Ramadhan : 5026231129</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    {{-- Mengganti link Font Awesome ke versi yang lebih baru (v6.x) atau yang spesifik v5.x all.css
         untuk memastikan ikon brand (fab) terload dengan baik.
         Font Awesome 5.15.4 harusnya sudah cukup, tapi kadang ada isu CDN atau versi sub-set.
         Menggunakan cdnjs versi 6.4.0 untuk cakupan ikon yang lebih luas dan terbaru. --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        :root {
            /* NEW BLUE PALETTE */
            --primary-color: #3498DB; /* Medium Blue */
            --secondary-color: #2980B9; /* Darker Blue */
            --accent-color: #1ABC9C; /* Turquoise/Accent Green-Blue */
            --text-dark: #2C3E50; /* Very Dark Blue-Gray */
            --text-light: #ECF0F1; /* Light Grayish-Blue */
            --bg-light: #F8F9FA; /* Off-white for general background */
            --bg-dark: #2C3E50; /* Very dark blue-gray for footer */
            --card-bg: #FFFFFF; /* White for card/panel backgrounds */
            --border-color: #E0E0E0; /* Lighter gray for borders */
            --glass-border: rgba(255, 255, 255, 0.5); /* Slightly more opaque glass border */
            --glass-bg: rgba(255, 255, 255, 0.3); /* Slightly more opaque glass background */
            --glass-shadow: rgba(0, 0, 0, 0.1);
            --shadow-light: rgba(0, 0, 0, 0.08);
            --shadow-medium: rgba(0, 0, 0, 0.2);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-light);
            color: var(--text-dark);
        }

        .hero-header {
            padding: 5rem 2rem;
            margin-bottom: -2rem;
            /* Blue gradient for hero header */
            background-image: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: var(--text-light);
            position: relative;
            z-index: 1;
            border-bottom-left-radius: 2rem;
            border-bottom-right-radius: 2rem;
            overflow: hidden;
            box-shadow: 0 10px 25px var(--shadow-medium);
        }

        .hero-header h1 {
            font-weight: 700;
            color: var(--text-light);
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }

        /* Glass Navbar Modern */
        .glass-navbar {
            background: var(--glass-bg);
            -webkit-backdrop-filter: blur(15px);
            backdrop-filter: blur(15px);
            border-radius: 2.5rem;
            border: 1px solid var(--glass-border);
            box-shadow: 0 12px 30px var(--glass-shadow);
            margin: 0 3rem 2.5rem 3rem;
            position: relative;
            z-index: 2;
            padding: 0.75rem 0;
        }

        .glass-navbar .navbar-nav {
            flex-wrap: wrap;
            justify-content: center;
        }

        .glass-navbar .nav-item {
            margin: 0 8px;
            border-radius: 1.75rem;
            transition: all 0.3s ease;
        }

        .glass-navbar .nav-item:hover {
            background-color: rgba(255, 255, 255, 0.4); /* Slightly more opaque hover */
            transform: translateY(-5px);
            box-shadow: 0 0 25px rgba(52, 152, 219, 0.4); /* Shadow using primary-color-like */
        }

        .glass-navbar .nav-link {
            color: var(--text-dark);
            transition: color 0.3s ease, transform 0.3s ease;
            padding: 0.75rem 1.25rem;
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 500;
        }

        .glass-navbar .nav-item:hover .nav-link {
            color: var(--primary-color); /* Text color matches primary blue */
        }

        .glass-navbar .nav-link i {
            font-size: 1.1rem;
            transition: color 0.3s ease;
        }

        .content-container {
            padding: 2.5rem 2rem;
            min-height: 60vh;
        }

        .content-panel {
            background-color: var(--card-bg);
            border-radius: 1.5rem;
            padding: 2.5rem;
            box-shadow: 0 10px 25px var(--shadow-light);
        }

        /* --- Custom Styles for Buttons, Tables, etc. (based on new blue color palette) --- */
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            border-radius: 0.75rem;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3); /* Shadow using primary blue */
        }

        .btn-success {
            background-color: #2ECC71; /* Brighter Green */
            border-color: #2ECC71;
            border-radius: 0.5rem;
        }
        .btn-success:hover {
            background-color: #27AE60;
            border-color: #27AE60;
        }

        .btn-danger {
            background-color: #E74C3C; /* Brighter Red */
            border-color: #E74C3C;
            border-radius: 0.5rem;
        }
        .btn-danger:hover {
            background-color: #C0392B;
            border-color: #C0392B;
        }

        .btn-secondary {
            background-color: #BDC3C7; /* Lighter Gray */
            border-color: #BDC3C7;
            border-radius: 0.75rem;
        }
        .btn-secondary:hover {
            background-color: #95A5A6;
            border-color: #95A5A6;
        }

        .pagination .page-item .page-link {
            border-radius: 0.5rem;
            margin: 0 3px;
            border: none;
            color: var(--primary-color);
            transition: all 0.3s ease;
        }
        .pagination .page-item .page-link:hover {
             background-color: rgba(52, 152, 219, 0.1); /* Hover lighter blue */
             color: var(--primary-color);
        }
        .pagination .page-item.active .page-link {
            background-color: var(--primary-color);
            color: var(--text-light);
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
        }
        .pagination .page-item.disabled .page-link {
            color: #CCD1D1; /* Softer disabled color */
        }

        .form-control,
        .form-select {
            border-radius: 0.75rem;
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }
        .form-control:focus,
        .form-select:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.25rem rgba(26, 188, 156, 0.25); /* Focus shadow using accent color */
        }

        /* --- Footer Baru yang Lebih Menarik --- */
        .site-footer {
            background-color: var(--bg-dark);
            color: var(--text-light);
            padding: 50px 0;
            margin-top: 50px;
            border-top-left-radius: 2rem;
            border-top-right-radius: 2rem;
            box-shadow: 0 -10px 25px rgba(0, 0, 0, 0.2);
        }

        .site-footer h5 {
            color: var(--text-light);
            font-weight: 600;
            margin-bottom: 25px;
            position: relative;
        }

        .site-footer h5::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 50px;
            height: 3px;
            background-color: var(--primary-color); /* Line color matches primary blue */
            border-radius: 5px;
        }

        .site-footer p,
        .site-footer a {
            color: #BDC3C7; /* Soft gray for footer text */
            font-size: 0.95rem;
        }

        .site-footer a:hover {
            color: var(--accent-color);
            text-decoration: underline;
        }

        .social-icons a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 45px;
            height: 45px;
            background-color: #34495E; /* Slightly darker blue-gray for social icons */
            border-radius: 50%;
            margin-right: 12px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
        }

        .social-icons a:hover {
            background-color: var(--primary-color); /* Primary blue on hover */
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(52, 152, 219, 0.4);
        }

        .social-icons i {
            color: var(--text-light);
            font-size: 1.2rem;
        }

        .copyright-text {
            border-top: 1px solid #34495E; /* Darker border for copyright */
            padding-top: 25px;
            margin-top: 30px;
            font-size: 0.85rem;
            color: #95A5A6; /* Soft gray for copyright text */
        }
    </style>
</head>

<body>

    <div class="jumbotron text-center hero-header">
        <h1>5026231129 : Rafindita Sumar Ramadhan</h1>
    </div>

    <nav class="navbar navbar-expand-sm justify-content-center glass-navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/frontend') }}"><i class="fas fa-th-large"></i> All Front End</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/pegawai') }}"><i class="fas fa-users"></i> Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/produk') }}"><i class="fas fa-code"></i> Tugas CRUD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/keranjangbelanja') }}"><i class="fas fa-shopping-cart"></i> Latihan 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/latihan2') }}"><i class="fas fa-chart-line"></i> Latihan 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/karyawan') }}"><i class="fas fa-user-tie"></i> Latihan 3</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="{{ url('/latihan4') }}"><i class="fas fa-comment-dots"></i> Latihan 4</a> {{-- ADD THIS LINE --}}
            </li>    -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/eas') }}"><i class="fas fa-file-alt"></i> EAS</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="content-container">
            @yield('content')
        </div>
    </div>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-4 mb-md-0">
                    <h5>Tentang Saya</h5>
                    <p class="mb-0">
                        Rafindita Sumar Ramadhan - 5026231129 <br>
                        I'm a passionate Information Systems student at Sepuluh Nopember Institute of Technology (ITS), Indonesia. I’m deeply interested in the intersection of technology, business, and sustainability. Through research and competitions, I strive to develop innovative solutions that bring positive impact to society.
                    </p>
                </div>
                <div class="col-md-4 text-md-right">
                    <h5>Hubungi Saya</h5>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/rafindita/" target="_blank" aria-label="Instagram"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/rafindita/" target="_blank" aria-label="LinkedIn"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href="https://github.com/rafindita/" target="_blank" aria-label="GitHub"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center copyright-text">
                    <p class="mb-0">&copy; 2025 Rafindita Sumar Ramadhan. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>