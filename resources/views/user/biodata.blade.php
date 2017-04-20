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
  
	<section class="content">
          <!-- Horizontal Form -->
            
            <!-- /.box-header -->
            <!-- form start -->
<!-- Multistep Form -->
<div class="main">
<form action="{{ url('insert_biodata') }}" class="regform" method="POST" align="center">
			    {!! csrf_field() !!}
<!-- Progress Bar -->
<ul id="progressbar">
<li class="active">Data Pribadi</li>
<li>Pendidikan</li>
<li>Ketrampilan</li>
<li>Pengalaman Bekerja</li>
<li>Data Orang </li>
</ul>
<fieldset id="first">
<h3 class="title">Input Your Personal Data</h3>
<p class="subtitle">Step 1</p>
<input class="text_field"  	name="no_ktp" placeholder="No KTP" type="text" required >
<input class="text_field"   name="nama" placeholder="Full Name" type="text" require >
<input class="text_field"   name="alamat" placeholder="Alamat Tinggal" type="text" required >
<input class="text_field"   name="alamat_ktp" placeholder="Alamat KTP" type="text" required >
<input class="text_field"   name="email" placeholder="Email"type="text" required >
<input class="text_field"   name="tinggi" placeholder="Tinggi Badan"type="text" required >
<input class="text_field"   name="berat" placeholder="Berat Badan"type="text" required >
<input class="text_field"   name="npwp" placeholder="No NPWP"type="text" required >
<select class="text_field"  name="agama" placeholder="Agama" type="text" required > 
<option value="">Pilih Agama
</option>
@foreach($biodata as $data)
<option value="{{ $data->agama }}">{{ $data->agama }}
</option>
@endforeach
</select>
<table>
<label>Jenis Kelamin</label>
<tr>
@foreach($jenis as $data)
<td><input class="text_field" name="jenis_kelamin"  type="radio" value="{{ $data->jenis_kelamin }}" checked>{{ $data->jenis_kelamin }} &nbsp;</td>

@endforeach
</tr>
</table>
<table>
<label> Status Pernikahan</label>

<tr>

@foreach($kawin as $data)
<td><input class="text_field" name="status_perkawinan"  type="radio" value="{{ $data->status }}" checked>{{ $data->status }} &nbsp;</td>
@endforeach
</tr>
</table>

<input class="text_field" name="hobi" placeholder="hobi" type="text" required >
<input class="text_field"  name="suku" placeholder="suku" type="text" required >
<input class="text_field"  name="no_tlp" placeholder="no_tlp" type="text" required >
<input class="text_field"  name="no_hp" placeholder="no_hp" type="text" required >
<table>
<tr>
<label> Kendaraan</label>
</tr>
<tr>
<td><input class="text_field" name="kendaraan" placeholder="" type="checkbox" value="Motor">Motor &nbsp </td>
<td><input class="text_field" name="kendaraan" placeholder="" type="checkbox" value="Mobil">Mobil</td>
<tr>
</table>
<table>
<tr>
<label> Memiliki Surat Izin Mengemudi(SIM)</label>
</tr>
<tr>
<td><input class="text_field" name="sim" placeholder="" type="checkbox" value="A">A &nbsp </td>
<td><input class="text_field" name="sim" placeholder="" type="checkbox" value="B">B &nbsp </td>
<td><input class="text_field" name="sim" placeholder="" type="checkbox" value="B1">B1 &nbsp </td>
<td><input class="text_field" name="sim" placeholder="" type="checkbox" value="B2">B2 &nbsp </td>
<td><input class="text_field" name="sim" placeholder="" type="checkbox" value="B3">B3 &nbsp </td>
<td><input class="text_field" name="sim" placeholder="" type="checkbox" value="C">C &nbsp </td>
<tr>
</table>
<input class="text_field"  name="no_sim" placeholder="no_sim" type="text" requiered>
<input class="next_btn" name="next" type="button" value="Next">
</fieldset>
<fieldset>
<h2 class="title">Educational Profiles</h2>
<p class="subtitle">Step 2</p>
<label> Pendidikan Formal </label>
<select class="text_field" name="tingkat_pendidikan" placeholder="jenis_kelamin" type="text"> 
<option value="">Pendidikan Terakhir
</option>
@foreach($jenjang as $data)
<option value="{{ $data->jejang }}">{{ $data->jejang }}
</option>
@endforeach
</select>
<select class="text_field" name="jurusan" placeholder="jenis_kelamin" type="text" required > 
<option value="">Jurusan
</option>
@foreach($jurusan as $data)
<option value="{{ $data->jurusan }}">{{ $data->jurusan }}
</option>
@endforeach
</select>
<input class="text_field" id ="sekolah" name="sekolah" placeholder="masukan nama sekolah/universitas" type="text" required >
<input class="text_field" id ="sekolah" name="kota" placeholder="Kota/Kabupaten" type="text" required >
<input class="text_field"  id ="sekolah"  name="th_masuk" placeholder="Tahun masuk" type="text" required >
<input class="text_field"  id ="sekolah"  name="th_keluar" placeholder="Tahun keluar" type="text" required >
<label> Pengalaman Organisasi </label>
<input class="text_field" id ="sekolah"  name="jenis" placeholder="Jenis Organisasi" type="text" >
<input class="text_field"  id ="sekolah"  name="nama_organisasi" placeholder="Nama Organisasi" type="text">
<input class="text_field" id ="sekolah"  name="kota" placeholder="Kota/kabupaten" type="text">
<input class="text_field" id ="sekolah"  name="posisi" placeholder="Posisi" type="text">
<input class="text_field" id ="sekolah"  name="tahun" placeholder="Tahun" type="text">
<input class="pre_btn" name="previous" type="button" value="Previous">
<input class="next_btn" name="next" type="button" value="Next">
</fieldset>
<fieldset>
<h3 class="title">Skills Mastered</h3>
<p class="subtitle">Step 3</p>
<label> Keterampilan </label>
<input class="text_field"   name="jenis" placeholder="Jenis Ketrampilan" type="text" required >
<table>
<p>Tingkat Penguasaan</p>
<tr>
<td>
<input class="text_field"   name="Tingkat" type="radio" value="Baik">Baik &nbsp;
<input class="text_field"   name="Tingkat" type="radio" value="Cukup" checked>Cukup &nbsp;
<input class="text_field"   name="Tingkat" type="radio" value="Kurang">Kurang &nbsp;
</td>
</table><input class="pre_btn" type="button" value="Previous">
<input class="next_btn" name="next" type="button" value="Next">

<!--<input class="submit_btn" type="submit" value="Submit">-->
</fieldset>
<fieldset>
<h2 class="title">Jobs Experience</h2>
<p class="subtitle">Step 4</p>
<label> Pengalaman Kerja Terbaru </label>
<input class="text_field"   name="jenis" placeholder="Jenis Ketrampilan" type="text" required >
<table><tr>
<td>
<input class="text_field"  placeholder="nama_perusahaan"  name="nama_perusahaan" type="text" required >
<input class="text_field"  placeholder="jabatan" name="jabatan" type="text" required  >
<input class="text_field"  placeholder="Tahun Masuk" name="th_masuk" type="text" required >
<input class="text_field"  placeholder="Tahun Keluar" name="th_keluar" type="text" required  >
</td>
</table><input class="pre_btn" type="button" value="Previous">
<input class="next_btn" name="next" type="button" value="Next">
</fieldset>
<fieldset>
<h2 class="title">Data Parent</h2>
<p class="subtitle">Step 5</p>
<input class="text_field" name="nama_ibu" placeholder="Masukan Nama Ibu" type="text" required >
<input class="text_field" name="alamat_ortu" placeholder="Alamat ibu" type="text" requiered>
<input class="form-control pull-right text_field" id="datepicker" name="tggl_lahir" placeholder="Tanggal Lahir Ibu" type="text" required >
<input class="text_field" name="pekerjaan" placeholder="Pekerjaan" type="text" required >
<input class="text_field" name="id_user"  type="hidden" value="{{ Auth::user()->id }}">
<input class="pre_btn" type="button" value="Previous">
<input class="submit_btn" type="submit" value="Submit">
</fieldset>
</form>
</div>
</div>
          </div>

    </section>
            
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
