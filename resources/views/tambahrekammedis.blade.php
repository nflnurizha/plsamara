@extends('layouts.master')

@section('body')
 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        Input Data<strong> Rekam Medis</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="/tambahrekammedis/{{$id}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            @csrf
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="tb" class=" form-control-label">Tinggi Badan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="tb" name="tb" placeholder="Tinggi Badan" class="form-control">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="bb" class=" form-control-label">Berat Badan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="bb" name="bb" placeholder="Berat Badan" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="sistolik" class=" form-control-label">Sistolik</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="sistolik" name="sistolik" placeholder="Sistolik" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="diastolik" class=" form-control-label">Diastolik</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="diastolik" name="diastolik" placeholder="diastolik" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                            <div class="col col-md-3">
                                                    <label for="nadi" class=" form-control-label">Nadi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nadi" name="nadi" placeholder="Nadi" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                            <div class="col col-md-3">
                                                    <label for="gs" class=" form-control-label">Gula Sesaat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="gs" name="gs" placeholder="Gula Sesaat" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                <label for="gp" class=" form-control-label">Gula Puasa</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="gp" name="gp" placeholder="Gula Puasa" class="form-control">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="ks" class=" form-control-label">Kolesterol Sesaat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="ks" name="ks" placeholder="Kolesterol Sesaat" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="kp" class=" form-control-label">Kolesterol Puasa</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="kp" name="kp" placeholder="Kolesterol Puasa" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="au" class=" form-control-label">Asam urat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="au" name="au" placeholder="Asam urat" class="form-control">
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
