@extends('layouts1.app')

@section('main-content')
	<form action="{{ url('query_news') }}" method="GET">
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
             <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>User ID</th>
                  <th>Lowongan</th>
                  <th>katagori</th>
                  <th>Kualifikasi</th>
                  <th>Action</th>
                </tr>
                </thead>
					@foreach($datas as $data)

                <tbody>
                <tr>
                  <td>{{ $data->id }}</td>
                  <td>{{ $data->lowongan }}
                  </td>
                  <td>  {{ $data->katagori }}</td>
                  <td>  {!! $data->kualifikasi !!}</td>
                 <td>  
				    
					<div class="input-group">
						<span class="input-group-btn"><a href="{{ url('edit_jobs', $data->id) }}"><button type="button" class="btn btn-block btn-warning">Edit <i class="fa fa-edit"></i></button></a> </span>
						<span class="input-group-btn"><a href="{{ url('delete_jobs', $data->id) }}"><button type="button" class="btn btn-block btn-danger">Delete <i class="fa fa-fw fa-close"></i></button></a>
					</span>
					</div>
				 </td>
                </tr>
                </tbody>
					@endforeach

                <tfoot>
                <tr>
                  <th>User ID</th>
                  <th>Lowongan</th>
                  <th>katagori</th>
                  <th>Kualifikasi</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
			  {{ $datas->render() }}
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
@endsection
