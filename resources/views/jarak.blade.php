@extends('layouts.app')

@section('content')

<div class="container p-3">

    <h1 class="text-center">--- MENGHITUNG JARAK 2 TITIK ---</h1>
<div class="card p-3 shadow">
    
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                
                <div class="form-group">
                    <input class="form-control" type="number" name="x1" id="x1" placeholder="X1">
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" name="y1" id="y1" placeholder="Y1">
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" name="x2" id="x2" placeholder="X2">
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" name="y2" id="y2" placeholder="Y2">
                </div>
                <div class="form-group">
                    <button class="btn btn-info form-control" onclick="hitung()">HITUNG</button>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <canvas class="bg-white" id="myCanvas" width="300" height="300" style="border:1px solid #e25858;">
                </canvas><h4>Hasil : <span id="hasil"></span></h4>
            </div>
        </div>
    
</div>
</div>
<script>
    function hitung(){
    var canvas = document.getElementById("myCanvas");
    var ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    var x1 = $('#x1').val();
    var x2 = $('#x2').val();
    var y1 = $('#y1').val();
    var y2 = $('#y2').val();

    var a = x1-x2;
    var b = y1-y2;
    var c=Math.sqrt( Math.pow((x1-x2), 2) + Math.pow((y1-y2), 2) );
    $("#hasil").text(c);
    a = Math.pow((x1-x2), 2);
    b = Math.pow((y1-y2), 2);
    ctx.moveTo(0,0);
    ctx.lineTo(a,b);
    ctx.lineWidth=10;
    ctx.strokeStyle="red";
    ctx.stroke();

};
</script>
@endsection