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
 <link rel="stylesheet" href="{{asset('/plugins/datepicker/datepicker3.css')}}">

  <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('/css/skins/_all-skins.min.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
    <link href="{{ asset('/css/skins/skin-blue.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset('/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/js/smoothscroll.js') }}"></script>
<meta content="noindex, nofollow" name="robots">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link href="{{asset('/css/style.css')}}" rel="stylesheet" type="text/css">
<script src="{{asset('/js/multi_step_form.js')}}"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{asset('/plugins/datepicker/bootstrap-datepicker.js')}}"></script>

<!-- jQuery 2.2.3 -->
<script src="{{asset('/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('//bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('/plugins/select2/select2.full.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('/plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{asset('/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{asset('/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{asset('/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset('/plugins/colorpicker/bootstrap-colorpicker.min.js')}}"></script>
<!-- bootstrap time picker -->
<script src="{{asset('/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{asset('/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{asset('/plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('/js/demo.js')}}"></script>

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
<div class="row">
    <div class="content">
          <div class="box-body">
                <div class="form-group" >
				    <div class="col-md-12">

<form action="{{ url('update_biodata',$users->id_user) }}" class="regform" method="POST" align="center">
						@foreach($datas as $data1)
	    {!! csrf_field() !!}

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
<td>No.KTP</td>
<td colspan="6">
<input class="text_field"  name="no_ktp" value="{{ $data1->no_ktp }}" readonly type="text">
</td>
</tr>
<tr>

<td>Nama  </td>
<td colspan="6"><input class="text_field"  name="nama" value="{{ $data->nama}}" type="text"></td>
</tr><tr>
<td >Email  </td>
<td colspan="6"><input class="text_field"  name="email" value="{{ Auth::user()->email }}" type="text"></td>
</tr><tr>
<td>Alamat  </td>
<td  colspan="6"><input class="text_field"  name="nama" value="{{ $data->alamat}}" type="text"> </td>
</tr><tr>
<td>Alamat Sesuai KTP  </td>
<td colspan="6"><input class="text_field"  name="alamat_ktp" value="{{ $data->alamat_ktp}}" type="text"> </td>
</tr><tr>
<td>Agama  </td>
<td colspan="6"><input class="text_field"  name="agama" value="{{ $data->agama}}" type="text"></td>
</tr><tr>
<td>Jenis Kelamin  </td>
<td ><input class="text_field"  name="jenis_kelamin" value="{{ $data->jenis_kelamin}}" type="text"></td>
<td>Hobi  </td>
<td colspan="6"><input class="text_field"  name="hobi" value="{{  $data->hobi }}" type="text"></td>
</tr><tr>
<td>Suku  </td>
<td colspan="6"><input class="text_field"  name="suku" value="{{ $data->suku}}" type="text"></td>
</tr><tr>
<td>No.Telp  </td>
<td ><input class="text_field"  name="no_tlp" value="{{ $data->no_tlp}}" type="text"></td>
<td>No.Hp  </td>
<td colspan="4"><input class="text_field"  name="no_hp" value="{{ $data->no_hp}}" type="text"> </td>
</tr><tr>
<td>No.SIM  </td>
<td colspan="6"><input class="text_field"  name="no_sim" value="{{ $data->no_sim}}" type="text"></td>
</tr>
<tr><td colspan="7"><p align="center"><label> B.Data Keluarga </p></label></td>
</tr>
<tr>
<td>Anak Ke </td>
<td ><input class="text_field"   name="pekerjaan_ayah" value="{{ Auth::user()->email }}" type="text"></td>
<td>Dari Berapa saudara  </td>
<td colspan="6"><input class="text_field"  name="saudara" value="" type="text"></td>
</tr>
<tr>
<td>Nama Ayah Kandung </td>
<td ><input class="text_field"   name="pekerjaan_ayah" value="{{ Auth::user()->email }}" type="text"></td>
<td>TTL:  </td>
<td ><input name="nama" class="date-range-picker" type="date"></td>
<td>Pekerjaan Ayah:  </td>
<td colspan="6"><input class="text_field"   name="pekerjaan_ayah" value="{{ Auth::user()->email }}" type="text"></td>
</tr>
<tr>
<td>Nama Ibu Kandung </td>
<td ><input class="text_field"   name="pekerjaan_ayah" value="{{ Auth::user()->email }}" type="text"></td>
<td>TTL:  </td>
<td ><input  name="nama" class="date-range-picker" type="date"></td>
<td>Pekerjaan Ibu:  </td>
<td colspan="6"><input class="text_field"  name="pekerjaan" value="" type="text"></td>
</tr>
<tr>
<td>Saudara/i</td>
<td ><input class="text_field"  name="nama_saudara" value="{{ Auth::user()->email }}" type="text"></td>
<td>TTL:  </td>
<td ><input class="text_field" class="date-range-picker"  name="nama" type="date"></td>
<td>Pekerjaan/Sekolah  </td>
<td colspan="6"><input class="text_field"  name="kerja_sekolah" value="{{ Auth::user()->email }}" type="text"></td>
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
<td colspan="6"><input class="text_field"  name="tingkat_pendidikan" value="{{ $data->tingkat_pendidikan}}" type="text"></td>
</tr><tr>
<td>Jurusan  </td>
<td><input class="text_field"  name="jurusan" value="{{ $data->jurusan}}" type="text"></td>
<td>Nama Sekolah/Universitas  </td>
<td colspan="6"> <input class="text_field"  name="sekolah" value="{{ $data->sekolah}}" type="text"></td>
</tr><tr>
<td>Tahun Masuk  </td>
<td >{{ $data->th_masuk}}</td>
<td>Tahun Lulus  </td>
<td colspan="6"><input class="text_field"  name="th_keluar" value="{{ $data->th_keluar}}" type="text"></td>
</tr><tr>
<td >Nilai Terakhir/IPK </td>
<td colspan="6"></td>
</tr>
<tr><td colspan="7">Pendidikan Non </td>
</tr>
<td>Jenis Penidikan Non Formal  </td>
<td colspan="6"><input class="text_field"  name="jenis_pendidikan" value="{{ $data->jenis_pendidikan}}" type="text"></td>
</tr><tr>
<td>Penyelengara  </td>
<td colspan="6"><input class="text_field"  name="penyelengara" value="{{ $data->penyelengara}}" type="text"></td>
</tr><tr>
<td>durasi  </td>
<td colspan="6"><input class="text_field"  name="penyelengara" value="{{ $data->penyelengara}}" type="text"></td>
</tr><tr>
<td>tahun  </td>
<td colspan="6"><input class="text_field"  name="tahun" value="{{ $data->tahun}}" type="text"></td>
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

</tr>
<tr>
<td><input class="text_field"  name="jenjang"  type="text"></td>
<td><input class="text_field"  name="nama_organisasi" type="text"></td>
<td><input class="text_field"  name="kota_organisasi" type="text"></td>
<td><input class="text_field"  name="Jabab=tan" 		type="text"></td>
<td><input class="text_field"  name="Tahun keluar"  type="text"></td>
<td colspan="6"><input class="text_field"  name="nama" type="text"></td>
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
<td><input class="text_field"  name="nama_perusahaan" value="{{ Auth::user()->email }}" type="text"></td>
<td><input class="text_field"  name="jabatan" value="{{ Auth::user()->email }}" type="text"></td>
<td><input class="text_field"  name="tahun" value="{{ Auth::user()->email }}" type="text"></td>
<td><input class="text_field"  name="alasan_berhenti" value="{{ Auth::user()->email }}" type="text"></td>
<td><input class="text_field"  name="gaji_terakhir" value="{{ Auth::user()->email }}" type="text"></td>
<td><input class="text_field"  name="tahun_masuk" value="{{ Auth::user()->email }}" type="text"></td>
<td colspan="6"><input class="text_field"  name="tahun_keluar" value="{{ Auth::user()->email }}" type="text"></td>
</tr>
<tr>
<td colspan="7"><p align="center">D. DATA  MINAT DAN KONSEP DIRI</p></td>
</tr>
<tr>
<td colspan="7"><input class="text_field"  name="tahun_masuk" value="{{ Auth::user()->email }}" type="text"></td>
</tr>
<tr>
<td colspan="7">
<input class="submit_btn" type="submit" value="Update">
</td>
</tr>	@endforeach

	</table>
</div>
</div>
</div>
</div>
</div>
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
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>
