<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama - Sistem Peminjaman Buku</title>
    <link rel="stylesheet" href="{{ asset('css/client.css') }}">
</head>
<body>
    <header>
        <h1>Daftar Buku</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">Formulir Peminjaman</a>
        </nav>
    </header>

    <main>
        <section class="book-list">
            <div class="book-item">
                <h2>Judul Buku</h2>
                <p>Pengarang: Nama Pengarang</p>
                <p>Genre: Genre Buku</p>
                <a href="#">Lihat Detail</a>
            </div>
            <!-- Tambahkan lebih banyak buku di sini -->
        </section>
    </main>
</body>
</html>
