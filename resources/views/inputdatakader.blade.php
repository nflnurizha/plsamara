@extends('layouts.master')

@section('body')
 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        Input Data <strong>Kader</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="/inputdatakader" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                                                    <label for="umur" class=" form-control-label">Tanggal Lahir</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="tanggallahir" name="tanggallahir" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nohp_kader" class=" form-control-label">Nomor HP</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" pattern="[0-9]+" maxlength="12" id="nohp_kader" name="nohp_kader" placeholder="081xxx" class="form-control">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="alamat" class=" form-control-label">Pendidikan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="pendidikan" id="pendidikan" name="pendidikan" placeholder="Pendidikan" class="form-control">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="jabatan" class=" form-control-label">Jabatan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="jabatan" id="jabatan" class="form-control">
                                                        <option value="0">Ketua</option>
                                                        <option value="1">Kader</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
		                                        <label for="pj" class=" form-control-label">Alamat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="alamat" id="alamat" name="alamat" placeholder="Jalan RT/RW" class="form-control">
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
