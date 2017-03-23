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
					@foreach($datas as $data)

                <tbody>
                <tr>
                  <td>{{ $data->id }}</td>
                  <td>{{ $data->name }}
                  </td>
                  <td>  {{ $data->email }}</td>
                  <td>  {{ $data->id_group }}</td>
                 <td><a href="{{ url('edit_news', $data->id) }}"><button type="button" class="btn btn-block btn-warning">Edit <i class="fa fa-edit"></i></button></a> <a href="{{ url('delete', $data->id) }}"><button type="button" class="btn btn-block btn-danger">Delete <i class="fa fa-fw fa-close"></i></button></a></td>
                </tr>
                </tbody>
					@endforeach

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
			  {{ $datas->render() }}
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
@endsection
