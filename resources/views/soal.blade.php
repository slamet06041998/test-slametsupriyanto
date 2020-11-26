@extends('layouts.app')
@section('content')
<div class="container pt-3">
    <h1 class="text-center">--- SOAL ---</h1>
    <div class="card p-3 mb-2">
        <div class="card-title"><strong>1.Jelaskan apa yang Anda ketahui tentang Git!</strong></div>
        <div class="card-text">
            Jawaban :
            -> Git adalah salah satu sistem pengontrol versi (Version Control System),
            yang bertugas mencatat setiap perubahan pada file proyek yang dikerjakan oleh banyak orang maupun sendiri.
        </div>
    </div>
    <div class="card p-3 mb-2">
        <div class="card-title"><strong>2.Jelaskan apa yang Anda ketahui tentang Git Workflows!</strong></div>
        <div class="card-text">
        Jawaban :
        -> Git Workflow adalah sebuah fitur dari Git yang digunakan untuk keperluan desain alur kerja.
        Artinya fitur ini dapat mempermudah dalam mengerjakan project yang besar di dalam sebuah tim.

        </div>
    </div>
    <div class="card p-3 mb-2">
        <div class="card-title"><strong>3.Jelaskan apa yang Anda ketahui tentang Functional Programming!</strong></div>
        <div class="card-text">
        Jawaban :
        -> Functional programming adalah paradigma pemrograman yang berkutat pada komputasi yang terjadi di dalam fungsi matematis dan menghindari terjadinya perubahan data.
        </div>
    </div>
    <div class="card p-3 mb-2">
        <div class="card-title"><strong>4.Jelaskan apa yang Anda ketahui tentang Object Oriented Programming!</strong></div>
        <div class="card-text">
        Jawaban :
        -> (OOP) adalah sebuah paradigma dalam pemograman yang menyelesaikan masalah program dengan menyediakan objek-objek(terdiri dari beberapa attribute dan method) yang saling berkaitan,
        dan disusun kedalam satu kelompok atau yang disebut dengan class.
        Nantinya objek-objek tersebut akan saling berinteraksi untuk menyelasaikan masalah program yang rumit.
        </div>
    </div>
    <div class="card p-3 mb-2">
        <div class="card-title"><strong>5.Jelaskan apa yang Anda ketahui tentang Seeder dalam konteks Database!</strong></div>
        <div class="card-text">
        Jawaban :
        -> Database Seeder di laravel berfungsi untuk mengisi data ke dalam database,
        untuk penggunaannya sendiri biasanya di gunakan untuk mengisi database pada saat setup pertama kali,
        Bisa juga untuk memperbarui data yang sudah ada atau menghapusnya dari belakang layar.
        </div>
    </div>
    <div class="card p-3 mb-2">
        <div class="card-title"><strong>6.Jelaskan apa yang Anda ketahui tentang Migration dalam konteks Database!</strong></div>
        <div class="card-text">
        Jawaban :
        -> Migration pada laravel, itu berfungsi untuk membuat sebuah database dengan menggunakan kode program PHP.
        saat membuat file migration,biasanya saya membuat sekalian dengan Model dengan perintah seperti di bawah.
        "php artisan make:model -m"
        untuk mengeksekusinya saya biasa menggunakan perintah "php artisan migrate"
        </div>
    </div>
    <div class="card p-3 mb-2">
        <div class="card-title"><strong>7.Jelaskan apa yang Anda ketahui tentang konsep MVC (Model, View, Controller)!</strong></div>
        <div class="card-text">
        Jawaban :
        -> MVC adalah sebuah konsep untuk memisahkan aplikasi berdasarkan komponen.<br>
        M = Models(yang bertugas untuk mengola data untuk database)<br>
        V = View(yang akan di tampilkan di halaman web)<br>
        C = Controller(yang menjembatani antara Model dan View)
        </div>
    </div>
    <div class="card p-3 mb-2">
        <div class="card-title"><strong>8.[PHP] Jelaskan apa yang Anda ketahui tentang PHP Composer dalam konteks Manajemen Dependensi!</strong></div>
        <div class="card-text">
        Jawaban :
        -> Composer adalah program untuk manajemen proyek
        yang biasa kita gunakan untuk mendownload sebuah paket.<br>
        salah satu contoh perintah yang sering saya gunakan "composer require laravel/ui"
        </div>
    </div>
    <div class="card p-3 mb-2">
        <div class="card-title"><strong>9.Diketahui kumpulan bilangan bulat unik tak teratur. Buatlah fungsi yang bisa mendeteksi bilangan bulat positif terkecil yang tidak ada di kumpulan tersebut!</strong></div>
        <div class="card-text">
            <div class="card p-3 mb-2">
                <div class="card-title"><strong>[-5,-4,5,-1,6,2] bilangan bulat positif terkecil yang tidak ada di kumpulan adalah 1</strong></div>
                <div class="card-text">
                    Jawaban :
                    <div class="row">
                        <div class="col-6">
                            Code
<pre class="card p-3">                              
<code 
>$r  = [-5,-4,5,-1,6,2];
$na = "";
$i  = 0;
$n;
foreach($r as $va){
    $i++;
    $na .= $va;
	if($i < count($r)){
        $na .= ',';
    };
};
echo "Nilai Awal : [".$na."]";
sort($r);
$nsu    = "";
$np     = "";
foreach($r as $va){
    if($va == max($r)){
        $nsu .= $va;
    }else{
        $nsu .= $va.',';
    }
    if($va > 0){
        if($va == max($r)){
            $np .= $va;
        }else{
            $np .= $va.',';
        }
    }
}
echo "Nilai Setelah Di Urutkan : [".$nsu."]<br>";
echo "Mengambil Nilai Positif : [".$np."]<br>";
$n  = explode(',',$np);
foreach($n as $ke => $va){
	if($ke+1 != $va){
		$ndc = ($ke+1);
        break 1;
    }
}
echo "<br>";
echo "Nilai Positif Terkecil Yang Tidak Ada Di Urutan Adalah :".$ndc."<br>";
</code>
</pre>
                        </div>
                        <div class="col-6">
                            Output
                            <div class="card p-3">
                                @php
                                    $r = [-5,-4,5,-1,6,2];
            
                                    $n;
                                    $na="";
                                    $i=0;
                                    foreach ($r as $va) {
                                        $i++;
                                        $na .= $va;
                                        if($i < count($r)){
                                        $na .= ',';
                                        }
                                    }
                                    echo "Nilai Awal : [".$na."]";
                                    echo "<br>";
                                    sort($r);
                                    $nsu="";
                                    $np="";
                                    foreach ($r as $va) {
                                    if($va == count($r)){
                                            $nsu .= $va;
                                        }else{
                                            $nsu .= $va.',';
                                        }
                                            //echo $va;
                                        if($va>0){
                                        if($va == max($r)){
                                            $np .= $va;
                                        }else{
                                            $np .= $va.',';
                                        }
                                        }
                                    }
                                    echo "Nilai Setelah Di Urutkan : [".$nsu."]<br>";
                                    echo "Mengambil Nilai Positif : [".$np."]<br>";
                                    $n = explode(',',$np);
                                    foreach ($n as $ke =>$va) {
                                        if($ke+1 != $va){
                                            $ndc = ($ke+1);
                                            break 1;
                                        }
                                    }
                                    echo "<br>";
                                    echo "Nilai Positif Terkecil Yang Tidak Ada Di Urutan Adalah : ".$ndc."<br>";
                                @endphp
                            </div>
                        </div>
                    </div>
                    @php
                        $r = [-5,-4,5,-1,6,1,2,3,4,10];

                        $n;
                        $na="";
                        foreach ($r as $va) {
                            if($va == max($r)){
                                $na .= $va;
                            }else{
                                $na .= $va.',';
                            }
                        }
                        echo "Nilai Awal : [".$na."]<br>";
                        sort($r);
                        $nsu="";
                        $np="";
                        foreach ($r as $va) {
                        if($va == max($r)){
                                $nsu .= $va;
                            }else{
                                $nsu .= $va.',';
                            }
                                //echo $va;
                            if($va>0){
                            if($va == max($r)){
                                $np .= $va;
                            }else{
                                $np .= $va.',';
                            }
                            }
                        }
                        echo "Nilai Setelah Di Urutkan : [".$nsu."]<br>";
                        echo "Mengambil Nilai Positif : [".$np."]<br>";
                        $n = explode(',',$np);
                        foreach ($n as $ke =>$va) {
                            if($ke+1 != $va){
                                $ndc = ($ke+1);
                                break 1;
                            }
                        }
                        echo "<br>";
                        echo "Nilai Positif Terkecil Yang Tidak Ada Di Urutan Adalah :".$ndc."<br>";
                    @endphp
                </div>
            </div>
            <div class="card p-3 mb-2">
                <div class="card-title"><strong>[1,-6,-8,0,4,2] bilangan bulat positif terkecil yang tidak ada di kumpulan adalah 3</strong></div>
                <div class="card-text">
                    Jawaban :
                    <div class="row">
                    <div class="col-6">
                        Code :
<pre class="card p-3">                              
<code 
>$r  = [1,-6,-8,0,4,2];
$na = "";
$i  = 0;
$n;
foreach($r as $va){
    $i++;
    $na .= $va;
    if($i < count($r)){
        $na .= ',';
    };
};
echo "Nilai Awal : [".$na."]";
sort($r);
$nsu    = "";
$np     = "";
foreach($r as $va){
    if($va == max($r)){
        $nsu .= $va;
    }else{
        $nsu .= $va.',';
    }
    if($va > 0){
        if($va == max($r)){
            $np .= $va;
        }else{
            $np .= $va.',';
        }
    }
}
echo "Nilai Setelah Di Urutkan : [".$nsu."]<br>";
echo "Mengambil Nilai Positif : [".$np."]<br>";
$n  = explode(',',$np);
foreach($n as $ke => $va){
    if($ke+1 != $va){
        $ndc = ($ke+1);
        break 1;
    }
}
echo "<br>";
echo "Nilai Positif Terkecil Yang Tidak Ada Di Urutan Adalah :".$ndc."<br>";
</code>
</pre>
                    </div>
                        <div class="col-6">
                            Output
                            <div class="card p-3">
                                @php
                                    $r = [1,-6,-8,0,4,2];
            
                                    $n;
                                    $na="";
                                    $i=0;
                                    foreach ($r as $va) {
                                        $i++;
                                        $na .= $va;
                                        if($i < count($r)){
                                        $na .= ',';
                                        }
                                    }
                                    echo "Nilai Awal : [".$na."]";
                                    echo "<br>";
                                    sort($r);
                                    $nsu="";
                                    $np="";
                                    foreach ($r as $va) {
                                    if($va == count($r)){
                                            $nsu .= $va;
                                        }else{
                                            $nsu .= $va.',';
                                        }
                                            //echo $va;
                                        if($va>0){
                                        if($va == max($r)){
                                            $np .= $va;
                                        }else{
                                            $np .= $va.',';
                                        }
                                        }
                                    }
                                    echo "Nilai Setelah Di Urutkan : [".$nsu."]<br>";
                                    echo "Mengambil Nilai Positif : [".$np."]<br>";
                                    $n = explode(',',$np);
                                    foreach ($n as $ke =>$va) {
                                        if($ke+1 != $va){
                                            $ndc = ($ke+1);
                                            break 1;
                                        }
                                    }
                                    echo "<br>";
                                    echo "Nilai Positif Terkecil Yang Tidak Ada Di Urutan Adalah : ".$ndc."<br>";
                                @endphp
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection