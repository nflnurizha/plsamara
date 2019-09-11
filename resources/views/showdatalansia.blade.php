@extends('layouts.master')

@section('body')

                        <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        Show Data<strong> Lansia</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="/inputdatalansia" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="umur" class=" form-control-label" style="font-size:25px">Nama</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="alert alert-success" role="alert">
                                     <a class="alert-link" style="font-size:20px">{{ucwords($data->nama)}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="umur" class=" form-control-label" style="font-size:25px">Tempat Lahir</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="alert alert-success" role="alert">
                                     <a class="alert-link" style="font-size:20px">{{ucwords($data->tempat_lahir)}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="umur" class=" form-control-label" style="font-size:25px">Tanggal Lahir</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="alert alert-success" role="alert">
                                     <a class="alert-link" style="font-size:20px">{{tgl_indo($data->tgllahir)}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="umur" class=" form-control-label" style="font-size:25px">Umur</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="alert alert-success" role="alert">
                                     <a class="alert-link" style="font-size:20px">{{\Carbon\Carbon::parse($data->tgllahir)->age}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="umur" class=" form-control-label" style="font-size:25px">Nomor HP</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="alert alert-success" role="alert">
                                     <a class="alert-link" style="font-size:20px">{{$data->nohp}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="umur" class=" form-control-label" style="font-size:25px">Nama Keluarga</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="alert alert-success" role="alert">
                                     <a class="alert-link" style="font-size:20px">{{ucwords($data->nama_keluarga)}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="umur" class=" form-control-label" style="font-size:25px">Nomor HP Keluarga</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="alert alert-success" role="alert">
                                     <a class="alert-link" style="font-size:20px">{{$data->nohp_kel}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="umur" class=" form-control-label" style="font-size:25px">Agama</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="alert alert-success" role="alert">
                                     <a class="alert-link" style="font-size:20px">@if($data->agama==0)
                                                    Islam
                                                    @elseif($data->agama==1)
                                                    Kristen
                                                    @elseif($data->agama==2)
                                                    Katolik
                                                    @elseif($data->agama==3)
                                                    Hindu
                                                    @elseif($data->agama==4)
                                                    Budha
                                                    @else($data->agama==5)
                                                    Konghucu
                                                    @endif</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="umur" class=" form-control-label" style="font-size:25px">Jenis Kelamin</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="alert alert-success" role="alert">
                                     <a class="alert-link" style="font-size:20px">{{($data->jenis_kelamin)? "Perempuan" : "Laki-laki"}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="umur" class=" form-control-label" style="font-size:25px">Alamat</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="alert alert-success" role="alert">
                                     <a class="alert-link" style="font-size:20px">{{ucwords($data->alamat)}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="umur" class=" form-control-label" style="font-size:25px">Pendidikan</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="alert alert-success" role="alert">
                                     <a class="alert-link" style="font-size:20px">{{ucwords($data->pendidikan)}}</a>
                                    </div>
                                </div>
                            </div>
                           <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="umur" class=" form-control-label" style="font-size:25px">Status Perkawinan</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="alert alert-success" role="alert">
                                     <a class="alert-link" style="font-size:20px">@if($data->status_perkawinan==0)
                                                    Belum Kawin
                                                    @elseif($data->status_perkawinan==1)
                                                    Kawin
                                                    @elseif($data->status_perkawinan==2)
                                                    Cerai Hidup
                                                    @else($data->status_perkawinan==3)
                                                    Cerai Mati
                                                    @endif</a>
                                    </div>
                                </div>
                            </div>
                        </form>

                                    </div>
                                </div>
                            </div>

@endsection('body')

<?php  
function tgl_indo($tanggal){
   
$bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    
    // variabel pecahkan 0 = tahun
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tanggal
 
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>