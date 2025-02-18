<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Styles -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</head>

<body class="antialiased" style="margin-bottom: 50px;">

    <div class="" style="text-align: center; margin-top: 40px; margin-bottom: 40px;">
        <h2 style="margin: 0; font-family: 'Poppins', sans-serif; font-size: 24px; font-weight: 700; color: rgb(0, 0, 0);">Pengaduan</h2>
    </div>
    <form style="width: 400px; margin: auto; font-family: Arial, sans-serif;">
        <div style="margin-bottom: 15px;">
            <label for="nama" style="display: block; margin-bottom: 5px; font-weight: bold;">Nama</label>
            <input type="text" id="nama" placeholder="" 
                   style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="email" style="display: block; margin-bottom: 5px; font-weight: bold;">Email</label>
            <input type="email" id="email" placeholder="" 
                   style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="kontak" style="display: block; margin-bottom: 5px; font-weight: bold;">Nomor Kontak</label>
            <input type="text" id="kontak" placeholder="" 
                   style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="deskripsi" style="display: block; margin-bottom: 5px; font-weight: bold;">Deskripsi</label>
            <textarea id="deskripsi" rows="4" placeholder="" 
                      style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; resize: none;"></textarea>
        </div>
        <div style="display: flex; align-items: center; margin-bottom: 15px;">
            <div style="background-color: #8bc34a; color: white; padding: 8px 15px; border-radius: 4px; margin-right: 10px; font-weight: bold;">
                Sg59h
            </div>
            <input type="text" placeholder="Masukan Captcha" 
                   style="flex: 1; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
        </div>
        <button type="submit" 
                style="background-color: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; width: 100%;">
            SUBMIT
        </button>
    </form>
</body>


<!-- Footer -->
<footer style="font-family: Arial, sans-serif; color: white; margin-top: 50px;">

    <!-- Bagian Atas -->
    <div style="background-color: #F07C1A; padding: 20px; display: flex; justify-content: space-between; align-items: flex-start;">
        <!-- Kiri: Nama Sekolah dan Sosial Media -->
        <div style="flex: 1;">
            <h3 style="margin: 0; font-family: 'Poppins', sans-serif; font-size: 24px; font-weight: 700; color: white;">SDN Bandaharjo 02</h3>

            <div style="margin-top: 10px; background-color: white; display: inline-block; padding: 10px; border-radius: 50px;">
                <a href="#" style="margin: 0 10px; text-decoration: none;">
                    <img src="images/IG.png" alt="Instagram" style="width: 40px;">
                </a>
                <a href="#" style="margin: 0 10px; text-decoration: none;">
                    <img src="images/X.png" alt="X" style="width: 40px;">
                </a>
                <a href="#" style="margin: 0 10px; text-decoration: none;">
                    <img src="images/fb.png" alt="Facebook" style="width: 40px;">
                </a>
                <a href="#" style="margin: 0 10px; text-decoration: none;">
                    <img src="images/youtube.png" alt="YouTube" style="width: 40px;">
                </a>
            </div>
            
        </div>

        <!-- Kanan: Kontak -->
        <div style="flex: 1; text-align: right;">
            <div style="display: flex; justify-content: flex-end; align-items: center; margin-bottom: 10px;">
                <img src="assets/email.png" alt="Email" style="width: 24px; margin-right: 10px;">
                <span>sdnbandaharjo02semarang@gmail.com</span>
            </div>
            <div style="display: flex; justify-content: flex-end; align-items: center;">
                <img src="assets/telp.png" alt="Telp" style="width: 24px; margin-right: 10px;">
                <span>0243563228</span>
            </div>
        </div>  
    </div>

    <!-- Bagian Bawah -->
    <div style="background-color: #A65413; padding: 10px; text-align: center;">
        <p style="margin: 0;">Jl. Lodan Raya No.1 Kel. Bandaharjo, Kec. Semarang Utara, Kota Semarang 50175</p>
    </div>
</footer>
<!-- Footer -->

</html>
