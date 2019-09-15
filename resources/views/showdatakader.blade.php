@extends('layouts.master')

@section('body')
 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        Update Data <strong>Kader</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="/showdatakader/{{$data->id_kader}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
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
                                                    <input type="text" id="tempatlahir" name="tempatlahir" value="{{ucwords($data->tempat_lahir)}}" class="form-control">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="umur" class=" form-control-label">Tanggal Lahir</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="tanggallahir" name="tanggallahir" value="{{$data->tgllahir}}" class="form-control">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nohp_kader" class=" form-control-label">Nomor HP</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" pattern="[0-9]+" maxlength="12" id="nohp_kader" name="nohp_kader" value="{{$data->nohp_kader}}" class="form-control">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="alamat" class=" form-control-label">Pendidikan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="pendidikan" id="pendidikan" name="pendidikan" value="{{ucwords($data->pendidikan)}}" class="form-control">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="jabatan" class=" form-control-label">Jabatan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="jabatan" id="jabatan" class="form-control">
                                                        @php
                                                        $datas = [["0", "Ketua"],["1", "Kader"],]
                                                    @endphp
                                                        @foreach($datas as $data1)
                                                        <option value="{{$data1[0]}}" 
                                                            @if($data->jabatan == $data1[0])
                                                            Selected
                                                            @endif
                                                        >{{$data1[1]}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                <label for="pj" class=" form-control-label">Alamat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="alamat" id="alamat" name="alamat" value="{{ucwords($data->alamat)}}" class="form-control">
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
                                        </form>

                                    </div>
                                </div>
                            </div>
    @endsection('body')
