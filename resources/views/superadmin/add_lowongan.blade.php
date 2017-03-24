@extends('layouts1.app')

@section('main-content')
	<style type="text/css">

.textarea-none-resize{
 width: 1000px;
 height: 180px;
 resize: none;
}
</style>
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
              <form action="{{ url('') }}" method="POST"  enctype="multipart/form-data">
			    {!! csrf_field() !!}

		  <div class="box-body pad">
              <form action="{{ url('') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
               
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Lowongan" name="lowongan" value="{{ old('lowongan') }}"/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                
				 <div class="form-group has-feedback">
                  <select class="form-control" name="id_group">
					<option >Katagori</option>	
                    <option value="1">IT</option>
                    <option value="2">Marketing</option>
                    <option value="0">HRD</option>
                    <option value="0">Design</option>
                    <option value="0">Manager Divisi</option>
                  </select>
                </div>
				
				
				<div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Qualification
              </h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                    <textarea id="editor1" name="kualifikasi" rows="10" cols="80">
                    </textarea>
              </form>
            </div>
          </div>
				
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Save</button>  
			 </form>
			 
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
	  
@endsection
