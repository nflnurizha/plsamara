@extends('layouts.master')
@section('body')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                    <div class="row m-t-30">
                            <div class="alert alert-success">
                        {{ session('succes') }}
                            </div>
                            <div class="col-md-12">

                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    
                                    <table id="multi-filter-select" class="display table table-striped table-hover table-borderless table-data3"  cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Menu</th>
                                                <th>Nama</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Umur</th>
                                                <th>Nomor HP</th>
                                                <th>Nama Keluarga</th>
                                                <th>Nomor HP Keluarga</th>
                                                <th>Agama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Alamat</th>
                                                <th>Pendidikan</th>
                                                <th>Status Perkawinan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $datum)
                                            <tr>
                                                <td>
                                                    <a href="/tambahrekammedis/{{$datum->id_lansia}}" input type="button" class="btn btn-info btn-block" value="Input">Input</a>
                                                    <a href="/showdatalansia/{{$datum->id_lansia}}" input type="button" class="btn btn-warning btn-block" value="Input">Show / Update</a>
                                                    <a href="/datalansia/{{$datum->id_lansia}}" input type="submit" class="btn btn-danger btn-block" value="Delete">Delete</a>
                                                </td>
                                                <td>{{ucwords($datum->nama)}}</td>
                                                <td>{{ucwords($datum->tempat_lahir)}}</td>
                                                <td>{{tgl_indo($datum->tgllahir)}}</td>
                                                <td>{{\Carbon\Carbon::parse($datum->tgllahir)->age}}</td>
                                                <td>{{$datum->nohp}}</td>
                                                <td>{{ucwords($datum->nama_keluarga)}}</td>
                                                <td>{{$datum->nohp_kel}}</td>
                                                <td>@if($datum->agama==0)
                                                    Islam
                                                    @elseif($datum->agama==1)
                                                    Kristen
                                                    @elseif($datum->agama==2)
                                                    Katolik
                                                    @elseif($datum->agama==3)
                                                    Hindu
                                                    @elseif($datum->agama==4)
                                                    Budha
                                                    @else($datum->agama==5)
                                                    Konghucu
                                                    @endif
                                                </td>
                                                <td>{{($datum->jenis_kelamin)? "Perempuan" : "Laki-laki"}}</td>
                                                <td>{{ucwords($datum->alamat)}}</td>
                                                <td>{{ucwords($datum->pendidikan)}}</td>
                                                <td>@if($datum->status_perkawinan==0)
                                                    Belum Kawin
                                                    @elseif($datum->status_perkawinan==1)
                                                    Kawin
                                                    @elseif($datum->status_perkawinan==2)
                                                    Cerai Hidup
                                                    @else($datum->status_perkawinan==3)
                                                    Cerai Mati
                                                    @endif</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
