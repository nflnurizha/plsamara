@extends('layouts.master')

@section('body')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                    <div class="row m-t-30">
                  @if (session('succes'))
                      <div class="alert alert-success">
                        {{ session('succes') }}
                      </div>
                  @endif
                            <div class="col-md-12">
                                
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table id="multi-filter-select" class="display table table-striped table-hover table-borderless table-data3"  cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Menu</th>
                                                <th>Tanggal Pemeriksaan</th>
                                                <th>Nama</th>
                                                <th>Umur</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tinggi Badan (cm)</th>
                                                <th>Berat Badan (kg)</th>
                                                <th>Sistolik (mmHg)</th>
                                                <th>Diastolik (mmHg)</th>
                                                <th>Nadi (detik)</th>
                                                <th>Gula Sesaat (mg/dL)</th>
                                                <th>Gula Puasa (mg/dL)</th>
                                                <th>Kolesterol Sesaat (mg/dL)</th>
                                                <th>Kolesterol Puasa (mg/dL)</th>
                                                <th>Asam Urat (mg/dL)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $datum)
                                            <tr>
                                                <td>
                                                    <a href="/showrekammedis/{{$datum->id_rekam_medis}}" input type="button" class="btn btn-warning btn-block" value="Input">Show / Update</a>
                                                    <a href="/datarekammedis/{{$datum->id_rekam_medis}}" input type="submit" class="btn btn-danger btn-block" value="Delete">Delete</a>
                                                </td>
                                                <td><center>{{tgl_indo($datum->created_at)}}</center></td>
                                                <td><center>{{$datum->lansia->nama}}</center></td>
                                                <td><center>{{\Carbon\Carbon::parse($datum->lansia->tgllahir)->age}}</center></td>
                                                <td><center>{{($datum->lansia->jenis_kelamin)? "Perempuan" : "Laki-laki"}}</center></td>
                                                <td><center>{{$datum->tinggi_badan}}</center></td>
                                                <td><center>{{$datum->berat_badan}}</center></td>
                                                <td><center>{{$datum->sistolik}}</center></td>
                                                <td><center>{{$datum->diastolik}}</center></td>
                                                <td><center>{{$datum->nadi}}</center></td>
                                                <td><center>{{$datum->gula_sesaat}}</center></td>
                                                <td><center>{{$datum->gula_puasa}}</center></td>
                                                <td><center>{{$datum->kolesterol_sesaat}}</center></td>
                                                <td><center>{{$datum->kolesterol_puasa}}</center></td>
                                                <td><center>{{$datum->asam_urat}}</center></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
<<?php  
function tgl_indo($tanggal){
    $tanggal = date_format($tanggal, "Y-m-d");
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
    @endsection('body')

    @section('js')
    <script>
        $('#multi-filter-select').DataTable( {
         "pageLength": 5,
         initComplete: function () {
          this.api().columns().every( function () {
           var column = this;
           var select = $('')
           .appendTo( $(column.footer()).empty() )
           .on( 'change', function () {
            var val = $.fn.dataTable.util.escapeRegex(
             $(this).val()
             );

            column
            .search( val ? '^'+val+'$' : '', true, false )
            .draw();
           } );

           column.data().unique().sort().each( function ( d, j ) {
            select.append( ''+d+'' )
           } );
          } );
         }
        });
    </script>
@endsection
