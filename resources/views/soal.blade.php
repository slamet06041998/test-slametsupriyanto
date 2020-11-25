@extends('layouts.app')
@section('content')
<div class="container">
    <p style="white-space: pre-line;">
        1.Jelaskan apa yang Anda ketahui tentang Git!
        Jawaban :
        -> Git adalah salah satu sistem pengontrol versi (Version Control System),
        yang bertugas mencatat setiap perubahan pada file proyek yang dikerjakan oleh banyak orang maupun sendiri.

        2.Jelaskan apa yang Anda ketahui tentang Git Workflows!
        Jawaban :
        ->Git Workflow adalah sebuah fitur dari Git yang digunakan untuk keperluan desain alur kerja.
        Artinya fitur ini dapat mempermudah dalam mengerjakan project yang besar di dalam sebuah tim.

        3.Jelaskan apa yang Anda ketahui tentang Functional Programming!
        Jawaban :
        Functional programming adalah paradigma pemrograman yang berkutat pada komputasi yang terjadi di dalam fungsi matematis dan menghindari terjadinya perubahan data.

        4.Jelaskan apa yang Anda ketahui tentang Object Oriented Programming!
        Jawaban :
        ->(OOP) adalah sebuah paradigma dalam pemograman yang menyelesaikan masalah program dengan menyediakan objek-objek(terdiri dari beberapa attribute dan method) yang saling berkaitan,
        dan disusun kedalam satu kelompok atau yang disebut dengan class.
        Nantinya objek-objek tersebut akan saling berinteraksi untuk menyelasaikan masalah program yang rumit.

        5.Jelaskan apa yang Anda ketahui tentang Seeder dalam konteks Database!
        Jawaban :
        -> Database Seeder di laravel berfungsi untuk mengisi data ke dalam database,
        untuk penggunaannya sendiri biasanya di gunakan untuk mengisi database pada saat setup pertama kali,
        Bisa juga untuk memperbarui data yang sudah ada atau menghapusnya dari belakang layar.

        6.Jelaskan apa yang Anda ketahui tentang Migration dalam konteks Database!
        Jawaban :
        -> Migration pada laravel, itu berfungsi untuk membuat sebuah database dengan menggunakan kode program PHP.
        saat membuat file migration,biasanya saya membuat sekalian dengan Model dengan perintah seperti di bawah.
        "php artisan make:model -m"
        untuk mengeksekusinya saya biasa menggunakan perintah "php artisan migrate"

        7.Jelaskan apa yang Anda ketahui tentang konsep MVC (Model, View, Controller)!
        Jawaban :
        ->MVC adalah sebuah konsep untuk memisahkan aplikasi berdasarkan komponen.
        M = Models(yang bertugas untuk mengola data untuk database)
        V = View(yang akan di tampilkan di halaman web)
        C = Controller(yang menjembatani antara Model dan View)

        8.[PHP] Jelaskan apa yang Anda ketahui tentang PHP Composer dalam konteks Manajemen Dependensi!
        Jawaban :
        ->Composer adalah program untuk manajemen proyek.
        yang biasa kita gunakan untuk mendownload sebuah paket.
        contoh "composer require laravel/ui"

        9.Diketahui kumpulan bilangan bulat unik tak teratur. Buatlah fungsi yang bisa mendeteksi bilangan bulat positif terkecil yang tidak ada di kumpulan tersebut! Contoh:

        [-5,-4,5,-1,6,2] bilangan bulat positif terkecil yang tidak ada di kumpulan adalah 1
        Jawaban :
        function detect(){
            $r[] = [-5,-4,5,-1,6,2];
            $s=1;
        }

        [1,-6,-8,0,4,2] bilangan bulat positif terkecil yang tidak ada di kumpulan adalah 3
    </p>
</div>
@endsection