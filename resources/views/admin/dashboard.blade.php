<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Sistem Peminjaman Buku</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="#dashboard">Dashboard</a></li>
            <li><a href="#books">Daftar Buku</a></li>
            <li><a href="#addBook">Tambah Buku</a></li>
            <li><a href="#loanSettings">Pengaturan Peminjaman</a></li>
        </ul>
    </div>
    <div class="content">
        <section id="dashboard">
            <h1>Dashboard</h1>
            <!-- Konten Dashboard -->
        </section>

        <section id="books">
            <h1>Daftar Buku</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Genre</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Daftar buku akan ditampilkan di sini -->
                </tbody>
            </table>
        </section>

        <section id="addBook">
            <h1>Tambah Buku</h1>
            <form id="addBookForm">
                <label for="title">Judul:</label>
                <input type="text" id="title" name="title" required>
                <label for="author">Pengarang:</label>
                <input type="text" id="author" name="author" required>
                <label for="genre">Genre:</label>
                <input type="text" id="genre" name="genre" required>
                <button type="submit">Tambah Buku</button>
            </form>
        </section>

        <section id="loanSettings">
            <h1>Pengaturan Peminjaman</h1>
            <!-- Pengaturan Peminjaman akan ditampilkan di sini -->
        </section>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
