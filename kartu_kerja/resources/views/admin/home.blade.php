@extends('admin.layout.master')
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
        {{-- <h1 class="display-4">Simple <span>Reliabel</span> Awesome</h1>
        <p>we work, we serve, we collaborate</p>
        <a href="" class="btn btn-success tombol">Contac Us</a>
        <a href="" class="btn btn-danger tombol">Information</a> --}}
        </div>
    </div>
    <br><br><br>
    <div class="row mt-5 mb-5">
        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
          <div class="card h-100">
            <img src="/img/step-01-register.png" class="card-img-top img-fluid w-25 rounded mx-auto d-block mt-3 mb-4" style="height: 50px;" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center"><b>Daftarkan dirimu</b></h5>
              <p class="card text-center">Sebelum daftar, pastikan kamu WNI Minimal berusia 18 tahun Sedang tidak menempuh pendidikan formal</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-3">
          <div class="card h-100">
            <img src="/img/step-02-interest.png" class="card-img-top img-fluid w-25 rounded mx-auto d-block mt-3 mb-4" style="height: 50px;" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center"><b>Tes Motivasi dan Kemampuan Dasar</b></h5>
              <p class="card text-center">Tes ini bertujuan untuk mengenali kompetensi dan potensi yang kamu miliki.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-3">
          <div class="card h-100">
            <img src="/img/step-03-course.png" class="card-img-top img-fluid w-25 rounded mx-auto d-block mt-2" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center"><b>Pilih Pelatihan yang Kamu Inginkan</b></h5>
              <p class="card text-center">Belajar gratis, dapat insentif pula. Dengan Kartu Prakerja, raih masa depan lebih cerah!</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-3">
          <div class="card h-100">
            <img src="/img/step-04-sign-up.png" class="card-img-top img-fluid w-25 rounded mx-auto d-block mt-3 mb-4" style="height: 50px;" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center"><b>Tunggu Apalagi?</b></h5>
              <p class="card text-center">Belajar gratis, dapat insentif pula. Dengan Kartu Prakerja, raih masa depan lebih cerah!</p>
            </div>
          </div>
        </div>
    </div>
</div>
    <br><br><br>
    <div class="jumbotron1 jumbotron-fluid">
        <div class="container">
          <h1 class="display-4"> <span>Tingkatkan Kompetensi Kerja
            <br> dengan Kartu Prakerja</span></h1>
           <h4>Galau cari kerja? Pengen lebih kompeten?
               <br>
            Mau ngembangin diri tanpa pusing mikirin biaya?
                <br>
            Bekali dirimu dengan Kartu Prakerja dan
                <br>
            <b>#SiapDariSekarang</b></h4>
          <div class="email mx-auto">
            <a class="btn btn-warning" href="/kartu/create" id="btn">Daftar Sekarang</a>
          </div>
        </div>
    </div>
    <br><br><br>
    <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <h3 class="text-center" style="color:blue "><b>MITRA PLATFORM DIGITAL</b></h3>
            <hr>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-4">
            <img src="/img/mitra-tokopedia.png" class="img-thumbnail w-50" style="border: none;" alt="">
          </div>
          <div class="col-4">
            <img src="/img/mitra-pintaria.png" class="img-thumbnail w-50" style="border: none;" alt="">
          </div>
          <div class="col-4">
            <img src="/img/mitra-skillacademy.png" style="border: none;" alt="">
          </div>
        </div>

        <div class="row text-center mt-5">
          <div class="col-4">
            <img src="/img/mitra-bukalapak.png" class="img-thumbnail w-35" style="border: none;" alt="">
          </div>
          <div class="col-4">
            <img src="/img/mitra-sekolahmu.png" class="img-thumbnail w-35" style="border: none;" alt="">
          </div>
          <div class="col-4">
            <img src="/img/mitra-maubelajarapa.png" class="img-thumbnail w-35" style="border: none;" alt="">
          </div>
        </div>
    </div>
    <br><br><br>
    <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <h3 class="text-center" style="color:blue "><b>MITRA PEMBAYARAN</b></h3>
            <hr>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-4">
            <img src="/img/bni.png" class="img-thumbnail w-20" style="border: none;" alt="">
          </div>
          <div class="col-4">
            <img src="/img/mitra-ovo.png" class="img-thumbnail w-20" style="border: none;" alt="">
          </div>
          <div class="col-4">
            <img src="/img/mitra-link-aja.png" class="img-thumbnail w-20 " style="border: none;" alt="">
          </div>
        </div>
        <br><br><br>
        <p class="text-center"><b>Program ini adalah hasil kolaborasi antara pemerintah dengan sektor swasta.
            <br> Pada tahap awal pengembangan situs program kartu prakerja banyak dibantu oleh:</b> </p>
        <br><br><br>
        <div class="row text-center">
          <div class="col-4">
            <img src="/img/mitra-tokopedia.png" style="border: none;" alt="">
          </div>
          <div class="col-4">
              <img src="/img/mitra-skillacademy.png" style="border: none;" alt="">
          </div>
          <div class="col-4">
            <img src="/img/mitra-ovo.png" style="border: none;" alt="">
          </div>
        </div>

        <div class="row text-center mt-5">
          <div class="col-4">
            <img src="/img/mitra-pintaria.png" class="img-thumbnail w-10" style="border: none;" alt="">
          </div>
          <div class="col-4">
            <img src="/img/mitra-sekolahmu.png" class="img-thumbnail w-10" style="border: none;" alt="">
          </div>
          <div class="col-4">
            <img src="/img/mitra-maubelajarapa.png" class="img-thumbnail w-10" style="border: none;" alt="">
          </div>
        </div>
    </div>
@endsection

