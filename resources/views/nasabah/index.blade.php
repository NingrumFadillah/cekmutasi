@extends('layouts.master')
@section('content')
<!-- MAIN -->
<title>Beranda</title>
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">

				<div class="panel-body" style="background-color:#2B333E;">
		
			<center>

						<div style="text-transform: uppercase;"><h4 style="color: #AEB7C2">Untuk dapat melihat data mutasi
		dimohon untuk login dengan menekan ikon bank dibawah</h4></div>
	</center>
							<div style="padding: 7em;">
					
							<center>

								<!--      <a href=" {{ url('loginbri') }}"><img src="bri.png" height= "130px" width="220" style="padding: 30px;"/></a> -->
								<button style="border-radius: 25%;height: 15em;width: 20em;background-color: #F3F5F8">
								<a href="{{url ('loginbca')}}"><img src="bca.png" height= "160px" width="220" style="padding: 1em;"/></a>
								</button>
								<button style="border-radius: 25%;height: 15em;width: 20em;margin-left: 3em;background-color: #F3F5F8">
								<a href="{{url ('loginbtn')}}"><img src="btn.png" height= "130px" width="220" style="padding: 1em;"/></a><br>
							</button>
							
							</center>
							</div>
							<h3  style="text-align: right;color: #AEB7C2;" class="panel-title">Terakhir Diakses  : {{ Carbon\Carbon::parse(Auth::user()->lastlast_login_at)->translatedFormat('d F Y') }} </h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT -->
	</div>
	<!-- END MAIN -->
	@endsection