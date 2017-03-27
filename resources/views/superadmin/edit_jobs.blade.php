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
              <form action="{{ url('update_jobs', $tampiledit->id) }}" method="POST">
			    {!! csrf_field() !!}
		  <div class="box-body pad">               
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Lowongan" name="lowongan" value="{{ $tampiledit->lowongan}}"/>
                 <!--   <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
                </div>
				 <div class="form-group has-feedback">
                  <select class="form-control" name="katagori" >
					<option value="{{ $tampiledit->katagori}}">{{ $tampiledit->katagori}}</option>	
                    <option value="IT">IT</option>
                    <option value="Marketing">Marketing</option>
                    <option value="HRD">HRD</option>
                    <option value="Design">Design</option>
                    <option value="Manager">Manager Divisi</option>
                  </select>
                </div>
				<div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Qualification
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                    <textarea id="editor1" name="kualifikasi" rows="10" cols="80">{!! $tampiledit->kualifikasi !!}
                    </textarea>
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
