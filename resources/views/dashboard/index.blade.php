@extends('layouts.app')

@section('content')

<div>
    <div class="row">
        <div class="col-md-12">
            <center>
                <div class="profilPicture gap">
                    <img src="assets/img/logoBapsii.png" style="width: 20%; margin-bottom: 20px" alt="#">
                    <h2 class="text-uppercase"><b>BIRO ADMINISTRASI PERENCANAAN DAN SISTEM INFORMASI</b></h2>
                    <!-- <marquee width="50%" direction="left">[Ubah Text Berjalan Halaman Depan Disini Pada Setting Aplikasi]</marquee> -->
                </div>
            </center>
        </div>
    </div>
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6">
            <div class="card shadow m-1">
                <div class="card-body">
                    <center>
                        <div id="date-and-clock">
                            <h3 id="clocknow"></h3>
                            <h3 id="datenow"></h3>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 justify-content-center">
        <div class="col-md-3">
            <div class="card shadow m-1">
                <div class="card-body">
                    <h6 class="fs-6 fw-light">Data Divisi</h6>
                    <h4 class="fw-bold">{{ $positionCount }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow m-1">
                <div class="card-body">
                    <h6 class="fs-6 fw-light">Data Asisten</h6>
                    <h4 class="fw-bold">{{ $userCount }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    #date-and-clock {
        width: 50%;
        margin: 0 auto;
    }
</style>


@endsection 

@push('script')
<script type="module" src="{{ asset('js/time.js') }}"></script>
@endpush