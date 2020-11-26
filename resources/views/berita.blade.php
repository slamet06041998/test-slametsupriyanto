@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center">Web Berita</h1>
        <div class="container shadow px-0">
            
            
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand btn btn-outline-info" href="#">NEWS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav mr-auto ">
                <li class="nav-item">
                  <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">NEWS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">TEKNOLOGI</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">HIBURAN</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">GAYA HIDUP</a>
                </li>
            </ul>

            <form class="form-inline">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-info btn-rounded ml-2" type="submit">Search</button>
              </form>
          
        </div>
      </nav>
            <div class="row p-5">
                <div class="col-12">
                    <h1>Ahli Pakai Sinar-X Teliti 'Jeroan' Mumi Tanpa Pembongkaran </h1>
                    <p> Kamis, 26 November 2020 08:23, Reporter : Ahda Bayhaqi, Eko Prasetya </p>
                </div>
            </div>
            <div class="row">
                <div class="col-8 ml-5">
                    <img src="/data/berita-1.jpeg" alt="">
                    <p style="white-space: pre-line;">
                        Jakarta, CNN Indonesia --

                        Para ilmuwan telah memelopori teknik baru yang memungkinkan mereka menyelidiki bagian dalam mumi berusia 1.900 tahun tanpa harus membuka dan merusak artefak kuno.
                        
                        Peneliti menggunakan kombinasi baru teknologi computed tomography (CT) dengan difraksi Sinar-X lias X-Ray untuk mengungkap petunjuk tentang mumi Mesir era Romawi, yang ditemukan di Hawara, Mesir.
                        
                        Selama hampir satu abad, mumi Mesir telah dicitrakan secara noninvasif dengan Sinar-X.
                        
                        Dalam temuan yang diuraikan dalam Journal of Royal Society pada hari Selasa, tim peneliti menjelaskan menggunakan kombinasi CT scan dan difraksi Sinar-X untuk pertama kalinya, mengungkapkan petunjuk tentang mayat kuno yang tergeletak di dalamnya.
                        
                        Dengan menggunakan X-Ray, para ahli bisa mengidentifikasi objek kecil pada mumi dalam keadaan terbungkus.
                        
                        "Sinar-X mengeluarkan apa yang pada dasarnya adalah sidik jari yang merupakan karakteristik material," kata Stuart Stock, seorang peneliti di Sekolah Kedokteran Feinberg di Universitas Northwestern di Chicago mengutip CNN, Rabu (25/11).
                        
                        Apa yang ditemukan para ahli dari Northwestern University, Argonne National Laboratory, dan Metropolitan State University of Denver di tubuh yang diduga milik anak berusia 5 tahun, mengejutkan mereka.
                        
                        Para peneliti menemukan sepotong kecil kalsium karbonat yang sangat murni dalam mumi tersebut, yang mereka yakini adalah bentuk yang tepat untuk menjadi kumbang scarab, yang secara tradisional ditempatkan pada sayatan di perut selama mumifikasi.
                        
                        "Objek buram ini memiliki bentuk yang tepat untuk scarab. Scarab adalah simbol kelahiran kembali," ucapnya.
                        
                        Item tersebut memberikan petunjuk lebih lanjut tentang status sosial mumi meskipun bukan bangsawan. Sebuah penelitian tentang tubuh juga menunjukkan bahwa anak tersebut, yang dianggap perempuan.
                        
                        Para ahli percaya bahwa teknik ini dapat digunakan untuk studi lebih lanjut tentang mumi, memberikan petunjuk lebih lanjut mengenai objek yang terkubur di samping mayat kuno, tanpa perlu mengganggu dan merusak tubuh.

                    </p>

                    <nav>
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link">Kembali</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">4</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">5</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">Lanjut</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="col-12 text-center">
                        <div class="btn bg-dark text-white my-5">
                            <span>100</span>
                                <a class="btn btn-outline-info mx-3" href="#!"><i class="fa fa-fw fa-smile fa-2x" style="color:yellow"></i></a>
                            <span>200</span>
                                
                                <a class="btn btn-outline-info mx-3" href="#!"><i class="fa fa-fw fa-laugh-squint fa-2x" style="color:yellow"></i></a>
                            <span>50</span>
                            <a class="btn btn-outline-info mx-3" href="#!"><i class="fa fa-fw fa-sad-cry fa-2x" style="color:yellow"></i></a>
                            <span>10</span>
                                <a class="btn btn-outline-danger mx-3" href="#!"><i class="fa fa-fw fa-angry fa-2x" style="color:red"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-3">

                    <a class="btn btn-sm btn-warning d-block mr-1 mb-2 text-white">Terbaru</a>
                    <div class="card mr-1">
                        <a href="#">
                        <img class="card-img-top w-100" src="/data/berita-2.jpeg" alt="">
                        <div class="card-img-overlay hbg h-100 d-flex text-white flex-column justify-content-end">
                            Transformasi Digital Pacu Produktivitas di Tengah Pandemi
                        </div>
                        </a>
                    </div><div class="card mr-1">
                        <a href="#">
                        
                        <img class="card-img-top w-100" src="/data/berita-3.jpeg" alt="">
                        <div class="card-img-overlay hbg h-100 d-flex text-white flex-column justify-content-end">
                            Edhy Prabowo: Saya Tidak Lari dan Akan Beberkan Kasus
                        </div>
                        </a>
                    </div><div class="card mr-1">
                        <a href="#">
                        
                        <img class="card-img-top w-100" src="/data/berita-4.jpeg" alt="">
                        <div class="card-img-overlay hbg h-100 d-flex text-white flex-column justify-content-end">
                            Kasus Covid-19 Terjadi Lagi Di Jakarta
                        </div>
                        </a>
                    </div>
                    <br><br><br>
                        <div class="col-12 p-0"><a href="#" class="btn btn-sm btn-info">KATEGORI</a></div>
                        <a href="#" class="btn btn-sm btn-outline-info my-1">Terbaru</a>
                        <a href="#" class="btn btn-sm btn-outline-info mb-1">Terhits</a>
                        <a href="#" class="btn btn-sm btn-outline-info mb-1">Terpopuler</a>
                        <a href="#" class="btn btn-sm btn-outline-info mb-1">Komunitas</a>
                        <a href="#" class="btn btn-sm btn-outline-info mb-1">Loker</a>
                        <a href="#" class="btn btn-sm btn-outline-info mb-1">Hukum</a>
                        <a href="#" class="btn btn-sm btn-outline-info mb-1">Bola</a>
                        <a href="#" class="btn btn-sm btn-outline-info mb-1">Bencana Alam</a>
                        <a href="#" class="btn btn-sm btn-outline-info mb-1">Teknologi</a>
                        <a href="#" class="btn btn-sm btn-outline-info mb-1">Server</a>
                        <a href="#" class="btn btn-sm btn-outline-info mb-1">Developer</a>
                        <a href="#" class="btn btn-sm btn-outline-info mb-1">Terlama</a>
                        <br><br><br>
                        <div class="col-12 p-0">
                            <form action="" method="get">
                                <div class="form-group">
                                    <label for="email">Isi Email Anda Untuk Dapatkan Informasi Berita Terbaru</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn d-block btn-success">SEND</button>
                                </div>

                            </form>
                        </div>
                    

                </div>
            </div>
            <footer class="footer text-center">
                <div class="container">
                    <div class="row">
                        <!-- Footer Location-->
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <h4 class="text-uppercase mb-4">Location</h4>
                            <p class="lead mb-0">
                                Pemalang, Pemalang, Jawa Tengah, Indonesia.
                            </p>
                        </div>
                        <!-- Footer Social Icons-->
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <h4 class="text-uppercase mb-4">Around the Web</h4>
                            <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                        </div>
                        <!-- Footer About Text-->
                        <div class="col-lg-4">
                            <h4 class="text-uppercase mb-4">About</h4>
                            <p class="lead mb-0">
                                News.com
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
            
        </div>
    </div>
    
@endsection