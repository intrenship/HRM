@extends('layouts1.app')

@section('main-content')
	
	<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">

              <!-- /. tools -->
           
            <!-- /.box-header -->
           
          <!-- /.box -->

          <div class="box">
            
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form action="{{ url('update_news', $tampiledit->id) }}" method="POST"  enctype="multipart/form-data">
			    {!! csrf_field() !!}

		<div class="box-body">
                <div class="form-group" >
                  <label for="exampleInputEmail1">Headline</label>
                  <p align="center"><input type="text" class="form-control" id="judul" name="judul" value="{{ $tampiledit->judul }}">
                </div>
                <!--<div class="form-group">
                  <label for="exampleInputFile"></label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
				-->
	
              </div>
			  
			  
			  	<div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Qualification
              </h3>
				<div class="box-body pad">

			  <textarea id="editor1" name="berita" rows="10" cols="80">{!! $tampiledit->berita  !!}
                    </textarea>
					</div>
					</div>
					</div>
			  
			  
  		  	 <div class="box-body">
	<div class="form-group">
		<div class="row">
        <div class="input-field col s6">
			<input type="file" id="inputgambar" name="gambar" class="validate"/ >         </div>
      </div>
      </div>
      </div>            
			<div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
			   <a href="#" onclick="history.back();"> <button type="submit" class="btn btn-primary">Back</button></a>   

             </div>
             </div>
			 </form>
			 
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
@endsection
