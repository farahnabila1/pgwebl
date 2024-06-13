<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ShopSpot Surabaya : Jejak Mall Melalui Lensa WebGIS') }}
        </h2>
    </x-slot>

    <!-- Content -->
    <div class="container py-12">
        <div class="row">
            <!-- Data Card -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">Data</h3>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary" role="alert">
                            <h4><i class="fa-solid fa-location-dot"></i> Titik Mall Surabaya</h4>
                            <p style="font-size: 28pt">{{ $total_points }}</p>
                        </div>
                        <hr>
                        <p>Anda login sebagai <b>{{ Auth::user()->name }}</b> dengan email <i>{{ Auth::user()->email }}</i></p>
                    </div>
                </div>
            </div>

            <!-- Additional Info Card -->
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">Apa Itu ShopSpot Surabaya?</h3>
                    </div>
                    <div class="card-body">
                        <p>Jejak Mall Melalui Lensa WebGIS adalah platform inovatif yang memanfaatkan teknologi WebGIS untuk memvisualisasikan dan memudahkan akses terhadap informasi geografis tentang mall-mall di Surabaya. Dengan fitur peta interaktif yang dinamis, pengguna dapat dengan mudah menjelajahi lokasi mall, memilih dari berbagai layer basemap untuk perspektif yang berbeda, dan melihat data distribusi mall dalam bentuk tabel. Hal ini tidak hanya mendukung perencanaan dan pengembangan kota dengan pemahaman yang lebih baik tentang struktur ruang kota, tetapi juga memberikan kemudahan bagi warga dan pengunjung untuk merencanakan kunjungan mereka dengan informasi yang akurat dan terkini. Dengan integrasi teknologi Leaflet.js dan data geografis yang komprehensif, platform ini tidak hanya menjadi alat analisis yang kuat bagi pemerintah dan pengembang properti, tetapi juga memfasilitasi pengambilan keputusan strategis dalam bisnis dan menyediakan sumber informasi yang bermanfaat bagi masyarakat umum.
</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">© 2024 WebGIS. By Farah Nabila.</span>
        </div>
    </footer>
</x-app-layout>

<!-- Include Bootstrap CSS and JS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
