@extends('layouts.master')

@section('body')
 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        Update Data<strong> Lansia</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="/showdatalansia/{{$data->id_lansia}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                            {{ csrf_field() }}

                                            <input type="hidden" name="_method" value="PUT">

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nama" class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="nama" id="nama" name="nama" value="{{ucwords($data->nama)}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="tempatlahir" class=" form-control-label">Tempat Lahir</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="tempatlahir" id="tempatlahir" name="tempatlahir" value="{{ucwords($data->tempat_lahir)}}" class="form-control">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="tanggallahir" class=" form-control-label">Tanggal Lahir</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="tanggallahir" name="tanggallahir" value="{{$data->tgllahir}}"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nohp" class=" form-control-label">Nomor HP</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" pattern="[0-9]+" maxlength="12" id="nohp" name="nohp" value="{{$data->nohp}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="namakel" class=" form-control-label">Nama Keluarga</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="nama" id="namakel" name="namakel" value="{{ucwords($data->nama_keluarga)}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nohp_kel" class=" form-control-label">Nomor HP Keluarga</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" pattern="[0-9]+" maxlength="12" id="nohp_kel" name="nohp_kel" value="{{$data->nohp_kel}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="agama" class=" form-control-label">Agama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="agama" id="agama" class="form-control">
                                                     @php
                                                        $datas = [["0", "islam"],["1", "Kristen"],["2", "Katolik"],["3", "Hindu"],["4", "Budha"],["5", "Konghucu"],]
                                                    @endphp
                                                    @foreach($datas as $data1)
                                                        <option value="{{$data1[0]}}" 
                                                            @if($data->agama == $data1[0])
                                                            Selected
                                                            @endif
                                                        >{{$data1[1]}}</option>
                                                    @endforeach
                                                    </select>
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="jeniskel" class=" form-control-label">Jenis Kelamin</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="jeniskel" id="jeniskel" class="form-control">
                                                    @php
                                                        $datas = [["0", "Laki-Laki"],["1", "Perempuan"],]
                                                    @endphp
                                                        @foreach($datas as $data1)
                                                        <option value="{{$data1[0]}}" 
                                                            @if($data->jeniskel == $data1[0])
                                                            Selected
                                                            @endif
                                                        >{{$data1[1]}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                <label for="alamat" class=" form-control-label">Alamat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="alamat" id="alamat" name="alamat" value="{{ucwords($data->alamat)}}" class="form-control">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="pendidikan" class=" form-control-label">Pendidikan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="pendidikan" id="pendidikan" name="pendidikan" value="{{ucwords($data->pendidikan)}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="statper" class=" form-control-label">Status Perkawinan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="statper" id="statper" class="form-control">
                                                    @php
                                                        $datas = [["0", "Belum Kawin"],["1", "Kawin"],["2", "Cerai Hidup"],["3", "Cerai Mati"],]
                                                    @endphp
                                                        @foreach($datas as $data1)
                                                        <option value="{{$data1[0]}}" 
                                                            @if($data->statper == $data1[0])
                                                            Selected
                                                            @endif
                                                        >{{$data1[1]}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-warning btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Edit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                        {{ csrf_field() }}

                                            <input type="hidden" name="_method" value="PUT">
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