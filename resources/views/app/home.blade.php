@extends('layout.app')
@section('tittle', 'Home')
@section('content')
   <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Selamat Datang Di<br>BookLend</h1>
      <h2>Klik menu di bawah untuk mendaftar</h2>
      <a href="{{ url('login')}}" class="btn-get-started">Daftar</a>
    </div>
  </section><!-- End Hero -->
  
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ asset('frontend/assets/img/about.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Deskripsi</h3>
            <p class="fst-italic">
            <ul>
              <li>BookLend adalah sistem peminjaman buku online yang memungkinkan pengguna untuk mencari, meminjam, dan mengelola koleksi buku mereka 
                dengan mudah. Platform ini cocok untuk perpustakaan, komunitas membaca, dan institusi pendidikan yang ingin meningkatkan aksesibilitas 
                dan efisiensi dalam pengelolaan buku.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

</main><!-- End #main -->
@endsection