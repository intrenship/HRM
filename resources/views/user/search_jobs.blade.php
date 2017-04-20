@extends('layouts.app')

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
             <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>User ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Group</th>
                  <th>Action</th>
                </tr>
                </thead>
				@if (count($hasil))
				Hasil pencarian : <b>{{$query}}
					@foreach($hasil as $data)

                <tbody>
                <tr>
                  <td>{{ $data->id }}</td>
                  <td>{{ $data->name }}
                  </td>
                  <td>  {{ $data->email }}</td>
                  <td>  {{ $data->id_group }}</td>
                 <td><a href="{{ url('edit_users', $data->id) }}"><button type="button" class="btn btn-block btn-warning">Edit <i class="fa fa-edit"></i></button></a> <a href="{{ url('delete_user', $data->id) }}"><button type="button" class="btn btn-block btn-danger">Delete <i class="fa fa-fw fa-close"></i></button></a></td>
                </tr>
                </tbody>
					@endforeach
				@else
				<div class="card-panel red darken-3 white-text">Oops.. Data <b>{{$query}}</b> Tidak Ditemukan</div>
				@endif
                <tfoot>
                <tr>
                 <th>User ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Group</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
			 
{{ $hasil->render() }}
				<br />

 <div class="col-md-4">

					<a href="#" onclick="history.back();"> <button type="submit" class="btn btn-block btn-primary">Back</button></a>   
						
				
				</div>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
@endsection
