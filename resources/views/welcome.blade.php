<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KongKowDignity</title>
    <link rel="icon" type="image/png" href="{{ asset('asset/images/ko.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>

    <!-- Hero Section -->
    <header class="bg-dark text-white py-5">
        <div class="container text-center">
            <div class="bg-white p-2 rounded shadow d-inline-block">
                <img src="/asset/images/hero.png" alt="Hero Image" class="img-fluid rounded"
                    style="max-width: 100%; height: auto; padding: 10px;">
            </div>
        </div>
    </header>

    <!-- Sponsor Marquee -->
    <section class="bg-light py-5">
        <div class="container text-dark text-center mb-3">
            <h3 class="mb-2 text-dark"><strong>Sponsored By</strong></h3>
            <p>Open Sponsorship:</p>
        </div>

        <div id="marquee-container" style="overflow: hidden; white-space: nowrap; position: relative;">
            <div id="marquee-logos" style="display: inline-block; white-space: nowrap;">
                <!-- Duplikat agar menyambung -->
                <div style="display: inline-block;">
                    <img src="/asset/images/PEPEK.png" alt="Logo 1" height="120" class="mx-3">
                </div>
                <div style="display: inline-block;">
                    <img src="/asset/images/PEPEK.png" alt="Logo 1" height="120" class="mx-3">
                </div>
                <div style="display: inline-block;">
                    <img src="/asset/images/PEPEK.png" alt="Logo 1" height="120" class="mx-3">
                </div>
                <div style="display: inline-block;">
                    <img src="/asset/images/PEPEK.png" alt="Logo 1" height="120" class="mx-3">
                </div>
                <div style="display: inline-block;">
                    <img src="/asset/images/PEPEK.png" alt="Logo 1" height="120" class="mx-3">
                </div>
                <div style="display: inline-block;">
                    <img src="/asset/images/PEPEK.png" alt="Logo 1" height="120" class="mx-3">
                </div>
                <div style="display: inline-block;">
                    <img src="/asset/images/PEPEK.png" alt="Logo 1" height="120" class="mx-3">
                </div>
                <div style="display: inline-block;">
                    <img src="/asset/images/PEPEK.png" alt="Logo 1" height="120" class="mx-3">
                </div>
                <div style="display: inline-block;">
                    <img src="/asset/images/PEPEK.png" alt="Logo 1" height="120" class="mx-3">
                </div>
                <div style="display: inline-block;">
                    <img src="/asset/images/PEPEK.png" alt="Logo 1" height="120" class="mx-3">
                </div>
                <div style="display: inline-block;">
                    <img src="/asset/images/PEPEK.png" alt="Logo 1" height="120" class="mx-3">
                </div>
                <div style="display: inline-block;">
                    <img src="/asset/images/PEPEK.png" alt="Logo 1" height="120" class="mx-3">
                </div>
                <div style="display: inline-block;">
                    <img src="/asset/images/PEPEK.png" alt="Logo 1" height="120" class="mx-3">
                </div>
            </div>

        </div>
        </div>
    </section>

    <!-- Tentang Acara -->
    <section class="container py-5">
        <div class="text-center mb-5">
            <h2>Tentang Acara</h2>
            <p class="text-muted">Kontes tahunan yang mempertemukan para pecinta motor dari seluruh Indonesia. Bergabung
                dan raih gelar motor terbaik tahun ini!</p>
        </div>
        <div class="row g-4 text-center text-md-start">
            <div class="col-md-4">
                <div class="p-4 border rounded h-100 bg-light">
                    <h4 class="mb-3">🏍️ <strong>Kategori Modifikasi</strong></h4>
                    <ul class="list-unstyled">
                        <li>🚴‍♂️ Mothai Open</li>
                        <li>🚴‍♂️ Racing Style Open</li>
                        <li>🚴‍♂️ Restorasi Fashion [Sport]</li>
                        <li>🚴‍♂️ Restorasi Fashion [Non Sport]</li>
                        <li>🚴‍♂️ CB Standar Touring</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border rounded h-100 bg-light">
                    <h4 class="mb-3">🏁 <strong>Best Categories</strong></h4>
                    <ul class="list-unstyled">
                        <li>🏆 The Best Paint</li>
                        <li>🏆 The Best Team</li>
                        <li>🏆 The Best Custom Part</li>
                        <li>🏆 The Best Detailing</li>
                        <li>🏆 The Best Accessories</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border rounded h-100 bg-light">
                    <h4 class="mb-3">🏆 <strong>Reward Champion</strong></h4>
                    <ul class="list-unstyled">
                        <li>🥇 1st Rp.750k + Trophy + Piagam</li>
                        <li>🥈 2nd Rp.600k + Trophy + Piagam</li>
                        <li>🥉 3rd Rp.500k + Trophy + Piagam</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Ajakan -->
    <section class="bg-dark text-white text-center py-5">
        <h3 class="mb-3">📅 Jadwal Acara</h3>
        <p>18 Agustus 2025 | Lapangan Bangunsari Bandar, Pacitan</p>
        <h2 class="mb-3">IKUTI ACARANYA!!</h2>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdf22z1vledGMcAelMD8Eqj1-StegapGhY1TKghvkmroJC1Ww/viewform?usp=dialog"
            class="btn btn-outline-light mt-3" target="_blank">Daftar Sekarang</a>
    </section>

    <!-- Footer -->
    <footer class="text-center py-4 bg-light">
        <small>&copy; 2025 bamal and bangkits software engineer Contest. All Rights Reserved.</small>
    </footer>

    <!-- Marquee Script -->
    <script>
        const marquee = document.getElementById('marquee-logos');
        let x = 0;

        function animateMarquee() {
            x -= 1;
            marquee.style.transform = `translateX(${x}px)`;

            if (Math.abs(x) >= marquee.scrollWidth / 2) {
                x = 0;
            }

            requestAnimationFrame(animateMarquee);
        }

        animateMarquee();
    </script>

</body>

</html>
