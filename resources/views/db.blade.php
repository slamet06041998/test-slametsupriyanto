@extends('layouts.app')
@section('content')

<h1 class="text-center mt-3">--- DESIGN DATABASE ---</h1>
<div class="embed-responsive embed-responsive-4by3">
    <object data="{{url('data/design_database.pdf')}}" type="application/pdf">
        <p>
            Your browser does not support embedded PDF files.<br>
            <a href="test.pdf">Click here to
            download the PDF file.</a>
        </p>
    </object>
</div>
@endsection