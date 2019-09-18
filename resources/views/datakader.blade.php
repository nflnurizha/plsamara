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
                                                <th>Nama</th>
                                                <th>Umur</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Nomor HP</th>
                                                <th>Pendidikan</th>
                                                <th>Jabatan</th>
                                                <th>Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $datum)
                                            <tr>
                                                <td>
                                                <a href="/showdatakader/{{$datum->id_kader}}" input type="button" class="btn btn-warning btn-block" value="Input">Show / Update</a>  
                                                <a href="/datakader/{{$datum->id_kader}}" input type="submit" class="btn btn-danger btn-block" value="Delete">Delete</a>
                                                </td>
                                                <td><center>{{ucwords($datum->nama)}}</center></td>
                                                <td><center>{{\Carbon\Carbon::parse($datum->tgllahir)->age}}</center></td>
                                                <td><center>{{ucwords($datum->tempat_lahir)}}</center></td>
                                                <td><center>{{date_format(date_create($datum->tgllahir), 'd/m/y')}}</center></td>
                                                <td><center>{{$datum->nohp_kader}}</center></td>
                                                <td><center>{{ucwords($datum->pendidikan)}}</center></td>
                                                <td><center>{{($datum->jabatan)? "Kader" : "Ketua"}}</center></td>
                                                <td><center>{{ucwords($datum->alamat)}}</center></td>
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

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
