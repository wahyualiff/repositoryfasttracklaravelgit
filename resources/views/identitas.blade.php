@extends('tampilan')

@section('isi_halaman')
<div class="row">
    <div class="col-12" align="center">permainan 3x3</div>
</div>
<div class="row">
    <div class="col"></div>
    <div class="col">
        <div class="row">
            <div class="col">
            <div class="row bg-dark"></div>
            <div class="row"></div>
            <div class="row bg-dark"></div>
            </div>
    <div class="col">
        <div class="row"></div>
        <div class="row bg-dark"></div>
        <div class="row"></div>
    </div>
    <div class="col">
        <div class="row bg-dark"></div>
        <div class="row"></div>
        <div class="row bg-dark"></div>
    </div>
    </div>
    </div>
<div class="col"></div>
</div>
    <div class="row" align="center">
        <div class="col-md-6">SCORE:</div>
        <div class="col-md-6">SCORE:</div>
        <div class="col">0</div>
        <div class="col">0</div>
    </div>
@endsection