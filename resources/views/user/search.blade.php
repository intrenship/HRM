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
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />

	 <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
    <link href="{{ asset('/css/skins/skin-blue.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset('/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/js/smoothscroll.js') }}"></script>
	<script>
	$(document).on('ajaxComplete ready', function () {
		$('.modalMd').off('click').on('click', function () {
			$('#modalMdContent').load($(this).attr('value'));
			var myBookId = $(this).data('id');
			//alert($(this).data('id'));
			$("#bebas").val($(this).data('id'));
			$("#bebas1").val($(this).data('id'));
	  $('#modalMdTitle').html($(this).attr('title'));
		});
	});
	</script>
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


<section id="home" name="home"></section>
<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <h1><img src="{{ asset('/img/dios.png') }}" alt=""></h1>
        </div>
    </div> <!--/ .container -->
</div><!--/ #headerwrap -->
<section id="desc" name="desc"></section>
<!-- INTRO WRAP -->

<div id="intro">
    <div class="container">
        <div class="row centered">
           
			<form action="{{ url('search_lowongan1', Auth::user()->id) }}" method="GET">
    <div class="row">
          <div class="box-body">
                <div class="form-group" >
				    <div class="col-md-3">
					                <div class="input-group" >

						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
						<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
						</button>
						</span>
					</div>
				</div>
				</div>
          </div>
    </div>
 </form>
  
	<section class="content">
      <div class="row">
        <div class="col-md-12">

              <!-- /. tools -->
           
            <!-- /.box-header -->
           
          <!-- /.box -->

          <div class="box">
            
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
             <table id="example2" class="table">
                <thead>
                <tr>
                  <th><h2>Lowongan</h2></th>
                  <th><h2>Katagori</h2></th>
                  <th><h2>Kualifikasi</h2></th>
                </tr>
                </thead>
					@foreach($datas as $data)

                <tbody align="justify">
                <tr>
                  <td>{{ $data->lowongan }}
                  </td>
                  <td>  {{ $data->katagori }}</td>
                  <td>  {!! $data->kualifikasi !!}</td>
                  <td>  {!! $data->id !!}</td>
                  <td>
						 <a href="#" title="Pilih CV untuk Apply lowongan ini" data-toggle="modal" data-target="#modalMd" ><span class="input-group-btn"><button  type="button" title="Pilih CV untuk Apply lowongan ini" class="btn btn-xs btn-info modalMd" data-toggle="modal" data-target="#modal-apply"   data-id="{{ $data->id }}">Apply<i class="fa fa-fw fa-check-circle"></i></button>
					</span></a>
				</td>
                </tr>
                </tbody>
			</form>
				@endforeach
              </table>
			  {{ $datas->render() }}
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
 	<div class="modal fade" id="modalMd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="modalMdTitle"></h4>
                  </div>
                  <div class="modal-body">
                      <div class="modalError"></div>
					  <div id="modalMdContent">
				<form>
					<input type="radio" name="rad" id="rad1" value="1" class="rad"/> CV dari Sistem  
					<input type="radio"  name="rad" id="rad2" value="2" class="rad"/> Upload Document CV (pdf|docx)
					<!-- form yang mau ditampilkan-->
					<div id="form1" style="display:none">
				</form>
				<form action="{{ url('lamaran1') }}" method="POST"  enctype="multipart/form-data">
		                <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input name="id_user" type="hidden" value="{{Auth::user()->id}}"/>
						<input name="id_lowongan" type="hidden" id="bebas" value=""/>
						<input name="file_cv" type="hidden" value=""/>
						<input name="status" type="hidden" value="Pending"/>
						<input class="btn btn-block btn-primary"  type="submit" value="Submit"/>
			

				</form>
					</div>
					<div id="form2" style="display:none">
			
				  <form action="{{ url('lamaran') }}" method="POST"  enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="input-field col s6">
				Upload CV <br /> 
						  <input class="validate"  name="file_cv" type="file"/> <br />
      </div>
				
						  <input name="id_user" type="hidden" value="{{Auth::user()->id}}"/>
						  <input name="id_lowongan" type="hidden" id="bebas" value=""/>
						  <input name="status" type="hidden" value="Pending"/> <br />
						<span class="input-group-btn">  <input class="btn btn-primary btn-block btn-flat" type="submit" value="Submit"/> </span>
				</form>
			</div>		
		<script type="text/javascript">
			$(function(){
				$(":radio.rad").click(function(){
					$("#form1, #form2").hide()
					if($(this).val() == "1"){
						$("#form1").show();
						
					}else{
						$("#form2").show();
					}
				});
		 	});
		</script>
					  </div>
                  </div>
              </div>
          </div>
        </div>
        </div>
        <br>
        <hr>
    </div> <!--/ .container -->
</div><!--/ #introwrap -->

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
