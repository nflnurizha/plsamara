<!DOCTYPE html>
<html>
<head>
<title>Posyandu Lansia Samara</title>
<link href="{{asset('/user/css/bootstrap.css')}}" rel='stylesheet' type='text/css'/>
<link href="{{asset('/user/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{asset('/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
<link href="{{asset('/user/fontawesome/css/all.css/')}}" rel="stylesheet" media="all">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="{{('/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Millor Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<script src="{{asset('/user/js/jquery.min.js')}}"> </script>
<!--start-smoth-scrolling-->
		<script type="text/javascript" src="{{asset('/user/js/move-top.js')}}"></script>
		<script type="text/javascript" src="{{asset('/user/js/easing.js')}}"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!--start-smoth-scrolling-->
</head>
<body>
<!--header-->
<div class="banner">
	 <div class="container">
		 <div class="banner-top">		  
				<div class="logo">
				</div>
                <div class="top-menu">
                    <span class="menu"> </span> 
                    <ul>
                        <li><a class="hvr-shutter-out-horizontal" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form></li>                     
                     </ul>               
                 </div>
				<div class="clearfix"> </div>	 
				 		 		 <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(".top-menu ul").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->	 
		 </div>	
		 <div  class="banner-bottom">
		 	<div class="col-md-6 banner-left">
		 		<h2>POSYANDU</h2>
		 		<h2>LANSIA</h2>
		 		<h2>SAMARA</h2>
		 		<p>Jalan Saikin, RW 08 Pondok Pinang</p>
		 	</div>
		 	<div class="col-md-6 banner-right">
		 		<div class="app-img">
		 			<img src="{{asset('/images/icon/LogoSkripsiOpay2.png')}}" class="img-responsive" alt=""/>
		 		</div>
		 	</div>
		 	<div class="clearfix"> </div>
		 </div>
	</div>
</div>
<div class="table-responsive m-b-40">
    <table id="multi-filter-select" class="display table table-striped table-hover table-borderless table-data3"  cellspacing="0" width="100%">
        <thead class="thead-dark">
            <tr>
                <th>Tanggal Pemeriksaan</th>
                <th>Tinggi Badan</th>
                <th>Berat Badan</th>
                <th>Sistolik</th>
                <th>Diastolik</th>
                <th>Nadi</th>
                <th>Gula Sesaat</th>
                <th>Gula Puasa</th>
                <th>Kolesterol Sesaat</th>
                <th>Kolesterol Puasa</th>
                <th>Asam Urat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $datum)
            <tr>
                <td>{{tgl_indo($datum->created_at)}}</td>
                <td>{{$datum->tinggi_badan}}</td>
                <td>{{$datum->berat_badan}}</td>
                <td>{{$datum->sistolik}}</td>
                <td>{{$datum->diastolik}}</td>
                <td>{{$datum->nadi}}</td>
                <td>{{$datum->gula_sesaat}}</td>
                <td>{{$datum->gula_puasa}}</td>
                <td>{{$datum->kolesterol_sesaat}}</td>
                <td>{{$datum->kolesterol_puasa}}</td>
                <td>{{$datum->asam_urat}}</td>
                <!-- <td>{{date_diff(date_create($datum->lansia->tgllahir),\Carbon\Carbon::now())->format('%y tahun, %m bulan')}}</td> -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="text-center">
  <div class="row">
    <div class="col-sm-6">
        <div class="sejajar">
        <i class="fas fa-home fa-7x"> </i>
                <div class="text-center jarak">
                <a class="button curl-bottom-right" href="{{route('homelansia')}}">Home</a>
            </div>
        </div>
    </div>
    <div class="spasi"> <br/> </div>
    <div class="col-sm">
      <div class="sejajar">
        <i class="fas fa-users fa-7x "></i>
                <div class="text-center jarak">
                <a class="button curl-bottom-right" href="{{route('datapribadilansia')}}">Data Pribadi</a>
            </div>
        </div>  
    </div>
    </div>
</div>
<div class="copyrights">
	<div class="container"> 
		<p>Copyrights &copy; 2019 Posyandu Lansia Samara </p>
		
<div class="clearfix"> </div>
	</div>
</div>
 <script type="text/javascript" charset ="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <?php  
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

</body>
</html>