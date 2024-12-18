<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Logistica - Shipping Company Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href={{asset('frontend/assets/img/favicon.ico')}} rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href={{asset('frontend/assets/lib/animate/animate.min.css')}} rel="stylesheet">
    <link href={{asset('frontend/assets/lib/owlcarousel/assets/owl.carousel.min.css')}} rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href={{asset('frontend/assets/css/bootstrap.min.css')}} rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href={{asset('frontend/assets/css/style.css')}} rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('layouts.user.nav')
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    @include('layouts.user.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src={{asset('frontend/assets/lib/wow/wow.min.js')}}></script>
    <script src={{asset('frontend/assets/lib/easing/easing.min.js')}}></script>
    <script src={{asset('frontend/assets/lib/waypoints/waypoints.min.js')}}></script>
    <script src={{asset('frontend/assets/lib/counterup/counterup.min.js')}}></script>
    <script src={{asset('frontend/assets/lib/owlcarousel/owl.carousel.min.js')}}></script>

    <!-- Template Javascript -->
    <script src={{asset('frontend/assets/js/main.js')}}></script>
    <script>
        function toggleMessage(element) {
            // Ambil pesan lengkap dari atribut data-full-message
            var fullMessage = element.getAttribute('data-full-message');

            // Ganti teks elemen dengan pesan lengkap
            element.innerHTML = fullMessage;

            // (Optional) Anda bisa mengganti tombolnya atau melakukan hal lain
            element.onclick = function() {
                // Jika ingin mengembalikan ke tampilan semula
                element.innerHTML = "{{ \Illuminate\Support\Str::limit('Ini adalah deskripsi lengkap yang akan ditampilkan saat diklik. Anda dapat menambahkan lebih banyak teks di sini untuk menunjukkan pesan yang lebih panjang.', 50, '...') }}";
                element.onclick = toggleMessage;
            }
        }
    </script>

</body>

</html>
