@extends('layouts.master')

@section('body')
 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        Input Data<strong> Lansia</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="/inputdatalansia" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            @csrf
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nama" class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="nama" id="nama" name="nama" placeholder="Nama" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="tempatlahir" class=" form-control-label">Tempat Lahir</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="tempatlahir" id="tempatlahir" name="tempatlahir" placeholder="Tempat Lahir" class="form-control">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="tanggallahir" class=" form-control-label">Tanggal Lahir</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="tanggallahir" name="tanggallahir" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nohp" class=" form-control-label">Nomor HP</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" pattern="[0-9]+" maxlength="12" id="nohp" name="nohp" placeholder="081xxx" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="namakel" class=" form-control-label">Nama Keluarga</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="nama" id="namakel" name="namakel" placeholder="Nama Keluarga" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nohp_kel" class=" form-control-label">Nomor HP Keluarga</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" pattern="[0-9]+" maxlength="12" id="nohp_kel" name="nohp_kel" placeholder="081xxx" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="agama" class=" form-control-label">Agama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="agama" id="agama" class="form-control">
                                                        <option value="0">Islam</option>
                                                        <option value="1">Kristen</option>
                                                        <option value="2">Katolik</option>
                                                        <option value="3">Hindu</option>
                                                        <option value="4">Budha</option>
                                                        <option value="5">Konghucu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="jeniskel" class=" form-control-label">Jenis Kelamin</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="jeniskel" id="jeniskel" class="form-control">
                                                        <option value="0">Laki-Laki</option>
                                                        <option value="1">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                <label for="alamat" class=" form-control-label">Alamat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="alamat" id="alamat" name="alamat" placeholder="Jalan RT/RW" class="form-control">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="pendidikan" class=" form-control-label">Pendidikan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="pendidikan" id="pendidikan" name="pendidikan" placeholder="Pendidikan" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="statper" class=" form-control-label">Status Perkawinan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="statper" id="statper" class="form-control">
                                                        <option value="0">Belum Kawin</option>
                                                        <option value="1">Kawin</option>
                                                        <option value="2">Cerai Hidup</option>
                                                        <option value="3">Cerai Mati</option>
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="username" class=" form-control-label">Username</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="username" name="username" placeholder="Username" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="Password" id="password" name="password" value="samara@123" readonly="readonly"  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                        </form>

                                    </div>
                                </div>
                            </div>
    @endsection('body')
