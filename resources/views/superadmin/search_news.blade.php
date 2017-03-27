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
             <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>News ID</th>
                  <th>Headline</th>
                  <th>Content</th>
                  <th>Action</th>
                </tr>
                </thead>
				@if (count($hasil))
Hasil pencarian : <b>{{$query}}
					@foreach($hasil as $data)

                <tbody>
                <tr>
                  <td>{{ $data->id }}</td>
                  <td>{{ $data->judul }}
                  </td>
                  <td>   <img src="{{ asset('image/'.$data->gambar)  }}" style="max-height:200px;max-width:200px;margin-top:10px;"><br />{!! $data->berita !!}</td>
                 <td><a href="{{ url('edit_news', $data->id) }}"><button type="button" class="btn btn-block btn-warning">Edit <i class="fa fa-edit"></i></button></a> <a href="{{ url('delete', $data->id) }}"><button type="button" class="btn btn-block btn-danger">Delete <i class="fa fa-fw fa-close"></i></button></a></td>
                </tr>
                </tbody>
					@endforeach
@else
   <div class="card-panel red darken-3 white-text">Oops.. Data <b>{{$query}}</b> Tidak Ditemukan</div>
@endif
                <tfoot>
                <tr>
                  <th>News ID</th>
                  <th>Headline</th>
                  <th>Content</th>
                </tr>
                </tfoot>
              </table>
			  {{ $hasil->render() }}
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
@endsection
