@extends('layout.app')
@section('tittle', 'About')
@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About Us</h2>
        <p> </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ asset('frontend/assets/img/about.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>BookLend</h3>
            <p class="fst-italic">
            <ul>
              <li><i class="bi bi-check-circle"></i> Pencarian Buku: Pengguna dapat mencari buku berdasarkan judul, pengarang, genre, atau kata kunci lainnya. Sistem pencarian yang canggih memastikan hasil yang cepat dan akurat.</li>
              <li><i class="bi bi-check-circle"></i> Katalog Buku: Menyediakan katalog lengkap dengan deskripsi, sampul buku, dan informasi terkait lainnya. Pengguna dapat melihat ketersediaan buku secara real-time.</li>
              <li><i class="bi bi-check-circle"></i> Sistem Peminjaman: Memungkinkan pengguna untuk meminjam buku secara online. Pengguna dapat melihat status peminjaman, tanggal pengembalian, dan memperpanjang masa pinjam jika diperlukan.</li>
              <li><i class="bi bi-check-circle"></i> Manajemen Pengguna: Admin dapat mengelola pengguna, menambah anggota baru, dan melacak aktivitas peminjaman dan pengembalian.</li>
              <li><i class="bi bi-check-circle"></i> Notifikasi dan Pengingat: Mengirimkan notifikasi otomatis kepada pengguna tentang tanggal jatuh tempo pengembalian buku dan pembaruan status peminjaman.</li>
              <li><i class="bi bi-check-circle"></i> Ulasan dan Rating: Pengguna dapat memberikan ulasan dan rating pada buku yang telah mereka baca, membantu pengguna lain dalam memilih buku yang baik.</li>
              <li><i class="bi bi-check-circle"></i> Riwayat Peminjaman: Pengguna dapat melihat riwayat peminjaman mereka, termasuk buku yang pernah dipinjam dan ulasan yang diberikan.</li>
            </ul>
          </div>
        </div>

      </div>
    </section>

  </main>
@endsection