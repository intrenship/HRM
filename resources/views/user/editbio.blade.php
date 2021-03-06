<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }}" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title>Digital Oasis</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

	 <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

  <link rel="stylesheet" href="{{ asset('../../bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('../../dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('../../dist/css/skins/_all-skins.min.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
    <link href="{{ asset('/css/skins/skin-blue.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset('/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/js/smoothscroll.js') }}"></script>
<meta content="noindex, nofollow" name="robots">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link href="{{asset('/css/style.css')}}" rel="stylesheet" type="text/css">
<script src="{{asset('/js/multi_step_form.js')}}"></script>

</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"  onclick="history.back();" href="#"><b>Digital Oasis</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#home" class="smoothScroll">{{ trans('adminlte_lang::message.home') }}</a></li>
                <li><a href="#desc" class="smoothScroll">About Us</a></li>
                <li><a href="#showcase" class="smoothScroll">{{ trans('adminlte_lang::message.showcase') }}</a></li>
                <li><a href="#contact" class="smoothScroll">{{ trans('adminlte_lang::message.contact') }}</a></li>
            </ul>
			
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login1') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                    <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                @else
                    <li><a href="#">{{ Auth::user()->name }}</a></li>
				    <li><a href="{{ url('/logout') }}">Logout</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
  
          <!-- Horizontal Form -->
            
            <!-- /.box-header -->
            <!-- form start -->
<!-- Multistep Form -->
    <div class="row">
    <div class="content">
          <div class="box-body">
                <div class="form-group" >
				    <div class="col-md-12">

	<table  align="center">
	<tr> 
		<td>
		<div class="col-lg-8">
		<img class="img-responsive" src="{{ asset('/img/dios.png') }}">
		</div>
		</div>
		</div>
		</div>
</td>
		<td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </td>
		<td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </td>
		<td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </td>
		<td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </td>
		<td> <h4><b>Digital Oasis <br/> (PT.Pilar Timur Teknologi)</b></h4>Jl.Unpar III No.3 Sukawarna. Bandung <br /> Email : hrd@digitaloasis.co.id <br /> Website : www.digitaloasis.co.id</td>
	</tr>
	</table>
	<br />
<div class="box-body">
<table  class="table table-bordered" role="grid" border="3">
@foreach($datas as $data)
<tr>
<th colspan="4"> <p align="center">FORM PENERIMAAN <br /> CALON KARYAWAN BARU<p></th>
<th colspan="7" > <br /> Tanggal : {{date('d-m-Y')}}<br /> Tempat :</th>
</tr>
<tr>
<td colspan="7"><p align="center"> <b>A. DATA  PRIBADI</b> </p>
</td>
</tr>
<tr>
<td>Nama  </td>
<td colspan="6">{{ $data->nama}}</td>
</tr><tr>
<td >Email  </td>
<td colspan="6">{{ Auth::user()->email }}</td>
</tr><tr>
<td>Alamat  </td>
<td  colspan="6"> {{ $data->alamat}}</td>
</tr><tr>
<td>Alamat Sesuai KTP  </td>
<td colspan="6"> {{ $data->alamat_ktp}}</td>
</tr><tr>
<td>Agama  </td>
<td colspan="6">{{ $data->agama}}</td>
</tr><tr>
<td>Jenis Kelamin  </td>
<td >{{ $data->jenis_kelamin}}</td>
<td>Hobi  </td>
<td colspan="6">{{ $data->hobi}}</td>
</tr><tr>
<td>Suku  </td>
<td colspan="6">{{ $data->suku}}</td>
</tr><tr>
<td>No.Telp  </td>
<td >{{ $data->no_tlp}}</td>
<td>No.Hp  </td>
<td colspan="4">{{ $data->no_hp}}</td>
</tr><tr>
<td>No.SIM  </td>
<td colspan="6">{{ $data->no_sim}}</td>
</tr>
<tr><td colspan="7"><p align="center"><label> B.Data Keluarga </p></label></td>
</tr>
<tr>
<td>Anak Ke </td>
<td >{{ $data->anak_ke}}</td>
<td>Dari Berapa saudara  </td>
<td colspan="6">{{ $data->saudara}}</td>
</tr>
<tr>
<td>Nama Ayah Kandung </td>
<td >{{ $data->nama_ayah}}</td>
<td>TTL:  </td>
<td >{{ $data->tgl_lahir_ayah}}</td>
<td>Pekerjaan:  </td>
<td colspan="6">{{ $data->pekerjaan_ayah}}</td>
</tr>
<tr>
<td>Nama Ibu Kandung </td>
<td >{{ $data->nama_ibu}}</td>
<td>TTL:  </td>
<td >{{ $data->tgl_lahir_ibu}}</td>
<td>Pekerjaan:  </td>
<td colspan="6">{{ $data->pekerjaan}}</td>
</tr>
<tr>
<td>Saudara/i</td>
<td >{{ $data->saudara_i}}</td>
<td>TTL:  </td>
<td ></td>
<td>Pekerjaan/Sekolah  </td>
<td colspan="6"></td>
</tr>
<tr>
<td colspan="7"><p align="center"><label> C. DATA PENDIDIKAN DAN WAWASAN </p></label></td></label>
</tr>
<tr>
<td colspan="7">Pendidikan Formal</td>
</tr>
<tr>

</tr>

<tr>
<td>Pendidikan Terakhir  </td>
<td colspan="6">{{ $data->tingkat_pendidikan}}</td>
</tr><tr>
<td>Jurusan  </td>
<td>{{ $data->jurusan}}</td>
<td>Nama Sekolah/Universitas  </td>
<td colspan="6"> {{ $data->sekolah}}</td>
</tr><tr>
<td>Tahun Masuk  </td>
<td >{{ $data->th_masuk}}</td>
<td>Tahun Lulus  </td>
<td colspan="6">{{ $data->th_keluar}}</td>
</tr><tr>
<td >Nilai Terakhir/IPK </td>
<td colspan="6">{{ $data->IPK}}</td>
</tr>
<tr><td colspan="7">Pendidikan Non </td>
</tr>
<td>Jenis Penidikan Non Formal  </td>
<td colspan="6">{{ $data->jenis_pendidikan}}</td>
</tr><tr>
<td>Penyelengara  </td>
<td colspan="6">{{ $data->penyelengara}}</td>
</tr><tr>
<td>durasi  </td>
<td colspan="6">{{ $data->penyelengara}}</td>
</tr><tr>
<td>tahun  </td>
<td colspan="6">{{ $data->tahun}}</td>
</tr>
<tr>
<td colspan="7">Pengalaman Organisasi</td>
</tr>
<tr>
<td>Jenjang </td>
<td>Nama Organisasi</td>
<td>kota tinggal Organisasi</td>
<td>Jabatan</td>
<td>Tahun Keluar</td>
<td colspan="6">IPK</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td colspan="6"></td>
</tr>
<tr>

<td colspan="7"> Pengalaman Bekerja</td>
</tr>
<tr>
<td rowspan="2">Nama Perusahaan</td>
<td rowspan="2">Jabatan</td>
<td colspan="2">Tahun</td>
<td rowspan="2">Alasan Berhenti</td>
<td rowspan="2" colspan="6" >Gaji Terakhir</td>
</tr>
<tr>
<td >Tahun Masuk  </td>
<td >Tahun Keluar</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td colspan="6"></td>
</tr>
<tr>
<td colspan="7"><p align="center">D. DATA  MINAT DAN KONSEP DIRI</p></td>
</tr>
<tr>
<td colspan="6"></td>
</tr>
<tr>
	@endforeach

<td colspan="7">
    <a href="{{ url('edit_biodata', $data->id_user) }}"><button  class="btn btn-large btn-success">Edit CV</button></a>
</td>
</tr>	

	</table>
</div>
</div>
</div>
</div>
</div>

            
              <!-- /. tools -->
            <!-- /.box-header -->

<section id="contact" name="contact"></section>
<div id="footerwrap">
    <div class="container">
        <div class="col-lg-5">
            <h3>{{ trans('adminlte_lang::message.address') }}</h3>
            <p>
               Jalan Unpar III No.13<br/>
                 Kota Bandung,<br/>
                40164<br/>
                Telp :(022) 8888 89 89
            </p>
        </div>

        <div class="col-lg-7">
            <h3>{{ trans('adminlte_lang::message.dropus') }}</h3>
            <br>
            <form role="form" action="#" method="post" enctype="plain">
                <div class="form-group">
                    <label for="name1">{{ trans('adminlte_lang::message.yourname') }}</label>
                    <input type="name" name="Name" class="form-control" id="name1" placeholder="{{ trans('adminlte_lang::message.yourname') }}">
                </div>
                <div class="form-group">
                    <label for="email1">{{ trans('adminlte_lang::message.emailaddress') }}</label>
                    <input type="email" name="Mail" class="form-control" id="email1" placeholder="{{ trans('adminlte_lang::message.enteremail') }}">
                </div>
                <div class="form-group">
                    <label>{{ trans('adminlte_lang::message.yourtext') }}</label>
                    <textarea class="form-control" name="Message" rows="3"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-large btn-success">{{ trans('adminlte_lang::message.submit') }}</button>
            </form>
        </div>
    </div>
</div>
<div id="c">
    <div class="container">
        <p>
            <strong>Copyright &copy; 2017 Digital Oasis</strong>
           
        </p>

    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
