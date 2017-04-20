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

<form action="{{ url('update_biodata',$users->id_user) }}" class="regform" method="POST" align="center">
						@foreach($datas as $data1)
	    {!! csrf_field() !!}

<!-- Progress Bar -->
<ul id="progressbar">
<li class="active">Data Pribadi</li>
<li>Pendidikan</li>
<li>Ketrampilan</li>
<li>Pengalaman Bekerja</li>
<li>Data Orang </li>


<fieldset id="first">
<h2 class="title">Input Your Personal Data</h2>
<p class="subtitle">Step 1</p>
<label>No Ktp</label>
<input class="text_field"  name="no_ktp" value="{{ $data1->no_ktp }}" readonly type="text">
<label>Full Name</label>
<input class="text_field"   name="nama" value="{{ $data1->nama }}" type="text">
<label>Alamat Sekarang</label>
<input class="text_field"    name="alamat" value="{{ $data1->alamat }}" type="text">
<label>Alamat Ktp</label>
<input class="text_field"   name="alamat_ktp" value="{{ $data1->alamat_ktp }}" type="text">
<label>Agama</label>
<select class="text_field"  name="agama" value="{{ $data1->agama }}"type="text"> 
<option value="{{ $data1->agama }}">Pilih Agama
</option>
@foreach($biodata as $data)
<option value="{{ $data->agama }}">{{ $data1->agama }}
</option>
@endforeach
</select>
<label>No Ktp</label>
<select class="text_field"  name="jenis_kelamin" placeholder="jenis_kelamin" type="text"> 
<option value="{{ $data1->jenis_kelamin }}">Pilih Jenis Kelamin
</option>
@foreach($jenis as $data)
<option value="{{ $data->jenis_kelamin }}">{{ $data->jenis_kelamin }}
</option>
@endforeach
</select>
<label>Status Perkawinan</label>
<select class="text_field" name="status_perkawinan" value="{{ $data1->no_ktp }}" type="text"> 
<option value="">Pilih Status
</option>
@foreach($kawin as $data)
<option value="{{ $data->status }}">{{ $data->status }}
</option>
@endforeach
</select> 
<label>Hobi</label>
<input class="text_field" name="hobi" value="{{ $data1->hobi }}"type="text">
<label>Suku</label>
<input class="text_field"  name="suku" value="{{ $data1->suku }}" type="text">
<label>No.Telp</label>
<input class="text_field"  name="no_tlp" value="{{ $data1->no_tlp }}" type="text">
<label>No.Hp</label>
<input class="text_field"  name="no_hp" value="{{ $data1->no_hp }}" type="text">
<label>No.SIM</label>
<input class="text_field"  name="no_sim" value="{{ $data1->no_sim }}" type="text">
<input class="next_btn" name="next" type="button" value="Next">
</fieldset>
<fieldset>
<h2 class="title">Educational Profiles</h2>
<p class="subtitle">Step 2</p>
<label> Pendidikan Formal </label>
<br />
<select class="text_field" name="tingkat_pendidikan" value="{{ $data1->no_ktp }}" type="text"> 
<option value="{{ $data1->tingkat_pendidikan }}">Pendidikan Terakhir
</option>
@foreach($jenjang as $data)
<option value="{{ $data->jejang }}">{{ $data->jejang }}
</option>
@endforeach
</select>
<label>Jurusan</label>
<select class="text_field" name="jurusan" placeholder="jenis_kelamin" type="text"> 
<option value="{{ $data1->no_ktp }}">Jurusan
</option>
@foreach($jurusan as $data)
<option value="{{ $data->jurusan }}">{{ $data->jurusan }}
</option>
@endforeach
</select>
<label>Sekolah/Universitas</label>
<input class="text_field" id ="sekolah" name="sekolah" value="{{ $data1->sekolah }}" type="text">
<label>Tahun Masuk</label>
<input class="text_field"  id ="sekolah"  name="th_masuk" value="{{ $data1->th_masuk }}" type="text">
<label>tahun Keluar</label>
<input class="text_field"  id ="sekolah"  name="th_keluar" value="{{ $data1->th_keluar }}" type="text">
<label> Pendidikan Non Formal </label>
<br />
<label>Jenis Pendidikan</label>
<input class="text_field"  id ="sekolah"  name="jenis_pendidikan" value="{{ $data1->jenis_pendidikan }}" type="text">
<label>Penyelengarah</label>
<input class="text_field"  id ="sekolah"  name="penyelengara" value="{{ $data1->penyelengara }}" type="text">
<label>Lama Pendidikan</label>
<input class="text_field"  id ="sekolah"  name="durasi" value="{{ $data1->durasi }}" type="text">
<label>Tahun Pendidikan</label>
<input class="text_field"  id ="sekolah"  name="tahun" value="{{ $data1->tahun }}" type="text">
<label> Pengalaman Organisasi </label>
<label>Jenis Organisasi</label>
<input class="text_field" id ="sekolah"  name="jenis" value="" type="text">
<label> Nama_organisasi</label>
<input class="text_field"  id ="sekolah"  name="nama_organisasi" value="" type="text">
<label>Posisi</label>
<input class="text_field" id ="sekolah"  name="posisi" value="" type="text">
<label>Tahun</label>
<input class="text_field" id ="sekolah"  name="tahun" value="" type="text">
<input class="pre_btn" name="previous" type="button" value="Previous">
<input class="next_btn" name="next" type="button" value="Next">
</fieldset>
<fieldset>
<h3 class="title">Skills Mastered</h3>
<p class="subtitle">Step 3</p>
<label> Keterampilan </label>
<label>Jenis Ketrampilan</label>
<input class="text_field"   name="jenis" type="text" required >
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
<label>Nama Ibu</label>
<input class="text_field" name="nama_ibu" value="{{ $data1->nama_ibu }}" type="text">
<label>Alamat Ibu</label>
<input class="text_field" name="alamat_ortu" value="{{ $data1->alamat_ortu }}" type="text">
<input class="text_field" name="id_user"  type="hidden" value="{{ Auth::user()->id }}">
<input class="pre_btn" type="button" value="Previous">
<input class="submit_btn" type="submit" value="Update">
</fieldset>
@endforeach

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
